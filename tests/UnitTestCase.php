<?php
/**
 * Author: xuqingfeng <js-xqf@hotmail.com>
 * Date: 15/4/26
 */

//class UnitTestCase extends \Phalcon\Test\UnitTestCase {
//
//    /**
//     * @var \Voice\Cache
//     */
//    protected $_cache;
//
//    /**
//     * @var \Phalcon\Config
//     */
//    protected $_config;
//
//    /**
//     * @var bool
//     */
//    private $_loaded = false;
//
//    public function setUp(Phalcon\DiInterface $di = NULL, Phalcon\Config $config = NULL) {
//
//        // Load any additional services that might be required during testing
//        $di = \Phalcon\DI::getDefault();
//
//        // get any DI components here. If you have a config, be sure to pass it to the parent
//        parent::setUp($di);
//
//        $this->_loaded = true;
//    }
//
//    /**
//     * Check if the test case is setup properly
//     * @throws \PHPUnit_Framework_IncompleteTestError;
//     */
//    public function __destruct() {
//        if(!$this->_loaded) {
//            throw new \PHPUnit_Framework_IncompleteTestError('Please run parent::setUp().');
//        }
//    }
//}

class UnitTestCase extends \PHPUnit_Framework_TestCase {

}