<?php

class EcomDev_PHPUnitTest_Test_Model_Fixture extends EcomDev_PHPUnit_Test_Case
{

    /**
     * @loadFixture testFixtureArrayMerge.yaml
     */
    public function testFixtureArrayMerge()
    {
        require_once($this->_getVfsUrl('app/code/community/EcomDev/PHPUnit/Test/Model/ExampleClass.php'));

        $testCase = new EcomDev_PHPUnitTest_Test_Model_ExampleClass();
        $testCase->setName('testLoadFixtureOrder');
        $this->getFixture()->loadForClass(get_class($testCase));
        $this->getFixture()->loadByTestCase($testCase);
        $this->getFixture()->apply();
    }

    protected function _getVfsUrl($path)
    {
        return $this->getFixture()->getVfs()->url($path);
    }


}