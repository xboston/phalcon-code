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

    private $isInterface;

    public function __construct(\SplFileObject $fileObject , $isInterface = false)
    {
        $this->fileObject  = $fileObject;
        $this->isInterface = $isInterface;
    }


    public function writeToFile(Accessors $distillate)
    {
        $this->writeString('<?php' . PHP_EOL);
        $this->writeInterfaceSignature(
            $distillate->getInterfaceName() ,
            $distillate->getExtendingInterfaces() ,
            $distillate->getParentClass()
        );
        $this->writeString('    {');
        $this->writeString(PHP_EOL);
        $this->writeConsts($distillate->getInterfaceConsts());

        if ( $distillate->getInterfaceName() == 'Phalcon\DI\Injectable' ) {

            $this->writeString($this->di);
            $this->writeString(PHP_EOL);
            $this->writeString(PHP_EOL);
        }

        $this->writeMethods($distillate->getInterfaceMethods());
        $this->writeString('    }' . PHP_EOL);
        $this->writeString('}');
    }

    /**
     * @param string $string
     *
     * @return void
     */
    protected function writeString($string)
    {
        $this->fileObject->fwrite($string);
    }


    protected function writeInterfaceSignature($interfaceName , $extendingInterfaces = false , $getParentClass = false)
    {
        $nameParts          = explode('\\' , $interfaceName);
        $interfaceShortName = array_pop($nameParts);
        if ( $nameParts ) {
            $this->writeString('namespace ' . implode('\\' , $nameParts) . '{' . PHP_EOL);
            $this->inGlobalNamespace = false;
        } else {
            $this->inGlobalNamespace = true;
        }
        $this->writeString(sprintf("    %s $interfaceShortName" , ($this->isInterface ? 'interface' : 'class')));
        if ( $getParentClass ) {
            $this->writeString(" extends \\$getParentClass");
        }
        if ( $extendingInterfaces ) {
            $this->writeString(" implements \\$extendingInterfaces");
        }
        $this->writeString(PHP_EOL);
    }


    protected function writeConsts(array $consts)
    {

        foreach ( $consts as $constName => $constValue ) {
            $this->writeConst($constName , $constValue);
            $this->writeString(PHP_EOL);
        }
    }

    /**
     * @param $constName
     * @param $constValue
     *
     * @return void
     */
    protected function writeConst($constName , $constValue)
    {
        $this->writeString(
            sprintf(
                '        const %s = %s;' ,
                $constName ,
                $constValue
            )
        );
    }

    /**
     * @return void
     */
    protected function writeMethods(array $methods)
    {
        foreach ( $methods as $method ) {
            $this->writeMethod($method);
            $this->writeString(PHP_EOL);
        }
    }

    /**
     * @param \ReflectionMethod $method
     *
     * @return void
     */
    protected function writeMethod(\ReflectionMethod $method)
    {
        $this->writeString(
            sprintf(
                '%s        %s%sfunction %s(%s)%s' ,
                $this->writeDocCommentOfMethod($method) ,
                ($method->isPublic() ? 'public' : 'protected') ,
                $method->isStatic() ? ' static ' : ' ' ,
                $method->name ,
                $this->methodParametersToString($method) ,
                ($this->isInterface ? ';' : '{}')
            )
        );
    }

    /**
     * @param \ReflectionMethod $method
     *
     * @return void
     */
    protected function writeDocCommentOfMethod(\ReflectionMethod $method)
    {
        if ( $method->getDocComment() ) {
            $this->writeString('    ');
            $this->writeString($method->getDocComment());
            $this->writeString(PHP_EOL);
        }
    }

    /**
     * @param \ReflectionMethod $method
     *
     * @return string
     */
    protected function methodParametersToString(\ReflectionMethod $method)
    {
        return implode(
            ', ' ,
            array_map(
                array( $this , 'parameterToString' ) ,
                $method->getParameters()
            )
        );
    }

    /**
     * @param \ReflectionParameter $parameter
     *
     * @return string
     */
    protected function parameterToString(\ReflectionParameter $parameter)
    {
        $classPrefix = $this->inGlobalNamespace ? '' : '\\';

        return trim(
            sprintf(
                '%s%s %s$%s%s' ,
                $parameter->getClass() ? $classPrefix . $this->resolveTypeHint($parameter) : '' ,
                $parameter->isArray() ? 'array' : '' ,
                $parameter->isPassedByReference() ? '&' : '' ,
                $parameter->name ,
                $this->resolveDefaultValue($parameter)
            )
        );
    }

    /**
     * @param \ReflectionParameter $reflectionParameter
     *
     * @return string
     */
    protected function resolveTypeHint(\ReflectionParameter $reflectionParameter)
    {
        if ( $reflectionParameter->getDeclaringClass()->inNamespace() ) {
            $typeHint = $reflectionParameter->getClass();

            return $typeHint->isInternal() ? '\\' . $typeHint->getName() : $typeHint->getName();
        }

        return $reflectionParameter->getClass()->getName();
    }

    /**
     * @param \ReflectionParameter $parameter
     *
     * @return string
     */
    protected function resolveDefaultValue(\ReflectionParameter $parameter)
    {
        if ( false === $parameter->isOptional() ) {
            return;
        }
        if ( $parameter->isDefaultValueAvailable() ) {
            $defaultValue = var_export($parameter->getDefaultValue() , true);

            return ' = ' . preg_replace('(\s)' , '' , $defaultValue);
        }

        return $this->handleOptionalParameterWithUnresolvableDefaultValue($parameter);
    }

    /**
     * @param \ReflectionParameter $parameter
     *
     * @return string
     */
    protected function handleOptionalParameterWithUnresolvableDefaultValue(\ReflectionParameter $parameter)
    {
        return ' = NULL ';
    }

    private $di = '
        /**
         * @var \Phalcon\Mvc\View
         */
        public $view;

        /**
         * @var \Phalcon\Mvc\Router
         */
        public $router;

        /**
         * @var \Phalcon\Mvc\Dispatcher
         */
        public $dispatcher;

        /**
         * @var \Phalcon\Mvc\Url
         */
        public $url;

        /**
         * @var \Phalcon\Di
         */
        public $di;

        /**
         * @var \Phalcon\HTTP\Request
         */
        public $request;

        /**
         * @var \Phalcon\HTTP\Response
         */
        public $response;

        /**
         * @var \Phalcon\Flash\Direct
         */
        public $flash;

        /**
         * @var \Phalcon\Flash\Session
         */
        public $flashSession;

        /**
         * @var \Phalcon\Session\Adapter
         */
        public $session;

        /**
         * @var \Phalcon\Session\Bag
         */
        public $persistent;

        /**
         * @var \Phalcon\Mvc\Model\Manager
         */
        public $modelsManager;

        /**
         * @var \Phalcon\Mvc\Model\Metadata
         */
        public $modelsMetadata;

        /**
         * @var \Phalcon\Mvc\Model\Transaction\Manager
         */
        public $transactionManager;

        /**
         * @var \Phalcon\Filter
         */
        public $filter;

        /**
         * @var \Phalcon\Security
         */
        public $security;

        /**
         * @var \Phalcon\Annotations\Adapter\Memory
         */
        public $annotations;';
}