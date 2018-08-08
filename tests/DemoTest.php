<?php
/**
 * Created by PhpStorm.
 * User: wangwangqin
 * Date: 2018/8/7
 * Time: 下午11:00
 */

use Demo\Demo;

class DemoTest extends \PHPUnit\Framework\TestCase
{
    public function testToday()
    {
        $today = date('Y-m-d');
        $testToday = Demo::getToday();
        $this->assertEquals($today, $testToday);
    }

    public function testYesterday()
    {
        $yesterday = date('Y-m-d', time() - 86400);
        $testYesterday = Demo::getYesterday();
        $this->assertEquals($yesterday, $testYesterday);
    }

    public function testTomorrow()
    {
        $tomorrow = date('Y-m-d', time() + 86400);
        $testTomorrow = Demo::getTomorrow();
        $this->assertEquals($tomorrow, $testTomorrow);
    }
}