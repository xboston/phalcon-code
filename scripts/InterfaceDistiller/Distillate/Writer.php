<?php
namespace com\github\gooh\InterfaceDistiller\Distillate;
class Writer
{
    /**
     * @var \SplFileObject
     */
    protected $fileObject;

    /**
     * @var bool
     */
    protected $inGlobalNamespace;
     
    /**
     * @param \SplFileObject $fileObject
     * @return void
     */
    public function __construct(\SplFileObject $fileObject)
    {
        $this->fileObject = $fileObject;
    }

    /**
     * @param \com\github\gooh\InterfaceDistiller\Accessors $distillate
     * @return void
     */
    public function writeToFile(Accessors $distillate)
    {
        $this->writeString('<?php' . PHP_EOL);
        $this->writeInterfaceSignature(
            $distillate->getInterfaceName(),
            $distillate->getExtendingInterfaces()
        );
        $this->writeString('    {');
        $this->writeString(PHP_EOL);
        $this->writeConsts($distillate->getInterfaceConsts());
        $this->writeMethods($distillate->getInterfaceMethods());
        $this->writeString('    }'.PHP_EOL);
        $this->writeString('}');
    }

    /**
     * @param string $string
     * @return void
     */
    protected function writeString($string)
    {
        $this->fileObject->fwrite($string);
    }

    /**
     * @return void
     */
    protected function writeInterfaceSignature($interfaceName, $extendingInterfaces = false)
    {
        $nameParts = explode('\\',$interfaceName);
        $interfaceShortName = array_pop($nameParts);
        if($nameParts){
            $this->writeString('namespace ' . implode('\\',$nameParts) . '{' .PHP_EOL);
            $this->inGlobalNamespace = false;
        } else {
            $this->inGlobalNamespace = true;
        }
        $this->writeString("    abstract class $interfaceShortName");
        if ($extendingInterfaces) {
            $this->writeString(" implements \\$extendingInterfaces");
        }
        $this->writeString(PHP_EOL);
    }

    /**
     * @return void
     */
    protected function writeConsts(array $consts)
    {
        
        foreach ($consts as $constName=>$constValue) {
            $this->writeConst($constName,$constValue);
            $this->writeString(PHP_EOL);
        }
    }

    /**
     * @param $constName
     * @param $constValue
     * @return void
     */
    protected function writeConst( $constName,$constValue)
    {
        $this->writeString(
            sprintf(
                '        const %s = %s;',
                $constName,$constValue
            )
        );
    }
    
    /**
     * @return void
     */
    protected function writeMethods(array $methods)
    {
        foreach ($methods as $method) {
            $this->writeMethod($method);
            $this->writeString(PHP_EOL);
        }
    }

    /**
     * @param \ReflectionMethod $method
     * @return void
     */
    protected function writeMethod(\ReflectionMethod $method)
    {
        $this->writeString(
            sprintf(
            	'%s        %s%sfunction %s(%s){}',
                $this->writeDocCommentOfMethod($method),
                ($method->isPublic() ? 'public' : 'protected' ),
                $method->isStatic() ? ' static ' : ' ',
                $method->name,
                $this->methodParametersToString($method)
            )
        );
    }

    /**
     * @param \ReflectionMethod $method
     * @return void
     */
    protected function writeDocCommentOfMethod(\ReflectionMethod $method)
    {
        if ($method->getDocComment()) {
            $this->writeString('    ');
            $this->writeString($method->getDocComment());
            $this->writeString(PHP_EOL);
        }
    }

    /**
     * @param \ReflectionMethod $method
     * @return string
     */
    protected function methodParametersToString(\ReflectionMethod $method)
    {
        return implode(
        	', ',
            array_map(
                array($this, 'parameterToString'),
                $method->getParameters()
            )
        );
    }

    /**
     * @param \ReflectionParameter $parameter
     * @return string
     */
    protected function parameterToString(\ReflectionParameter $parameter)
    {
        $classPrefix = $this->inGlobalNamespace ? '': '\\';
        return trim(
            sprintf(
            	'%s%s %s$%s%s',
                $parameter->getClass() ? $classPrefix.$this->resolveTypeHint($parameter) : '',
                $parameter->isArray() ? 'array' : '',
                $parameter->isPassedByReference() ? '&' : '',
                $parameter->name,
                $this->resolveDefaultValue($parameter)
            )
        );
    }

    /**
     * @param \ReflectionParameter $reflectionParameter
     * @return string
     */
    protected function resolveTypeHint(\ReflectionParameter $reflectionParameter)
    {
        if ($reflectionParameter->getDeclaringClass()->inNamespace()) {
            $typeHint = $reflectionParameter->getClass();
            return $typeHint->isInternal()
                ? '\\' . $typeHint->getName()
                : $typeHint->getName();
        }
        return $reflectionParameter->getClass()->getName();
    }

    /**
     * @param \ReflectionParameter $parameter
     * @return string
     */
    protected function resolveDefaultValue(\ReflectionParameter $parameter)
    {
        if (false === $parameter->isOptional()) {
            return;
        }
        if ($parameter->isDefaultValueAvailable()) {
            $defaultValue = var_export($parameter->getDefaultValue(), true);
            return ' = ' . preg_replace('(\s)', '', $defaultValue);
        }
        return $this->handleOptionalParameterWithUnresolvableDefaultValue($parameter);
    }

    /**
     * @param \ReflectionParameter $parameter
     * @return string
     */
    protected function handleOptionalParameterWithUnresolvableDefaultValue(\ReflectionParameter $parameter)
    {
        return ' = NULL ';
        
        if ($parameter->allowsNull()) {
            return ' = NULL ';
        }
        return ' /* = unresolvable */ ';
    }
}