<?php

/**
 * Created by PhpStorm.
 * User: Connor
 * Date: 9/7/2017
 * Time: 1:41 PM
 */
class Student
{
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}