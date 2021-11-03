<?php

use beautinow\guanyicerp\CErpApi;
use PHPUnit\Framework\TestCase;

class CErpApiTest extends TestCase
{
    function testGetShop() {

        $config = [
            'appkey' =>  '',
            'secret' =>  '',
            'sessionkey' =>  ''
        ];

        $api = new CErpApi($config);
        $shops = $api->getShop();
        print_r($shops);
        $this->assertTrue(is_array($shops));
        $this->assertTrue(count($shops) > 0);
    }

    function testGetVip() {
        $config = [
            'appkey' =>  '',
            'secret' =>  '',
            'sessionkey' =>  ''
        ];

        $api = new CErpApi($config);
        $shops = $api->getVip();
        print_r($shops);
        $this->assertTrue(is_array($shops));
        $this->assertTrue(count($shops) > 0);
    }

    function testGetStock() {
        $config = [
            'appkey' =>  '',
            'secret' =>  '',
            'sessionkey' =>  ''
        ];

        $api = new CErpApi($config);
        $shops = $api->getStock([
            'warehouse_code'    =>  '005'
        ]);
        print_r($shops);
        $this->assertTrue(is_array($shops));
        $this->assertTrue(count($shops) > 0);
    }

    function testGetSupplier() {
        $config = [
            'appkey' =>  '',
            'secret' =>  '',
            'sessionkey' =>  ''
        ];

        $api = new CErpApi($config);
        $shops = $api->getSupplier([

        ]);
        print_r($shops);
        $this->assertTrue(is_array($shops));
        $this->assertTrue(count($shops) > 0);
    }

}
