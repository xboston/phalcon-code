<?php
namespace com\github\gooh\InterfaceDistiller\Distillate;
//@codeCoverageIgnoreStart
interface Mutators
{
    /**
     * @param string $interfaceName
     * @return void
     */
    public function setInterfaceName($interfaceName);

    /**
     * @param string $commaSeparatedInterfaceNames
     * @return void
     */
    public function setExtendingInterfaces($commaSeparatedInterfaceNames);

    /**
     * @param \ReflectionMethod $reflectionMethod
     * @return void
     */
    public function addMethod(\ReflectionMethod $reflectionMethod);

    /**
     * @param array $reflectionConst
     * @return void
     */
    public function addConsts(array $reflectionConst);
}
//@codeCoverageIgnoreEnd
