<?php
/**
 * Created by PhpStorm.
 * User: akirui
 * Date: 07/07/2018
 * Time: 14:24
 */

namespace allan;


trait FullName
{
    public function fullname($name = null)
    {
        return 'Mr '. $name;
    }
}