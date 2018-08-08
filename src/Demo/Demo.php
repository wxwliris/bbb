<?php
/**
 * Created by PhpStorm.
 * User: wangwangqin
 * Date: 2018/8/7
 * Time: 下午11:00
 */
namespace Demo;

use Carbon\Carbon;

class Demo
{
    public static function getToday()
    {
        return Carbon::today()->format('Y-m-d');
    }

    public static function getYesterday()
    {
        return Carbon::yesterday()->format('Y-m-d');
    }

    public static function getTomorrow()
    {
        return Carbon::tomorrow()->format('Y-m-d');
    }
}