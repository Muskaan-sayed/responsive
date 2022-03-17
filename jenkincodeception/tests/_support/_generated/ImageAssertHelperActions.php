<?php  //[STAMP] 132914e30f85f647418924caaf832539
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

trait ImageAssertHelperActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Helper\ImageAssertHelper::seeImageWithSource()
     */
    public function canSeeImageWithSource($image_url) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeImageWithSource', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Helper\ImageAssertHelper::seeImageWithSource()
     */
    public function seeImageWithSource($image_url) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeImageWithSource', func_get_args()));
    }
}
