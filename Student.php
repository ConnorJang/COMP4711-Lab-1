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
    // Adding email address for the student
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    // Adding a grade to the student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    // Calculates the student's average grade
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    // Makes student's info readable
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}