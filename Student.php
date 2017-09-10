<?php

/**
 * Student.php (Class)
 * User: Connor
 * Date: 9/7/2017
 * Time: 1:41 PM
 * Description: The Student.php class is a student object, used to store information about a student. Stored the
 *              student's fist/last name, email addresses, and grades.
 */
class Student
{
    /**
     * Student constructor.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    /**
     * Function to add an email address for the student
     * @param $which - Type of email address (work/home/etc.)
     * @param $address - The email address to be stored
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    /**
     * Function to add a grade to the student
     * @param $grade - The grade to be added to the student's grades array.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Calculates the student's average grade by adding all the grades up, and
     * dividing that sum by the total number of grades.
     * @return float|int - Returns the average of the grades.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    /** Function to turn student's info into a readable string
     * @return string - Returns the students info as a string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}