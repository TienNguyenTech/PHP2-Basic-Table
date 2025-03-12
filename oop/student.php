<?php

class Student {
    protected $_firstName;
    protected $_surname;
    protected $_home_address;
    protected $_parent_phone;
    protected $_parent_email;
    protected $_dob;
    protected $_subscribe;

    public function __construct($first_name, $surname, $dob) {
        // Consider all variables set in constructor as "required"
        $this->set_firstName($first_name);
        $this->set_surname($surname);
        $this->set_dob($dob);

        // Also initialise the boolean with default value
        $this->set_subscribe(true);
    }

    public function __toString() {
        // PHP OOP Magic Functions: https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
        // This function will allow the object to be placed in an echo call directly and generate meaningful outputs
        $output = '<p><span class="label">Student name: </span>' . $this->get_fullName() . '</p>';
        $output .= '<p><span class="label">Date of birth: </span>' . $this->get_dob() . '</p>';
        $output .= '<p><span class="label">Home address: </span>' . $this->get_home_address() . '</p>';
        $output .= '<p><span class="label">Parent phone number: </span>' . $this->get_parent_phone() . '</p>';
        $output .= '<p><span class="label">Parent email address: </span>' . $this->get_parent_email() . '</p>';
        $output .= '<p><span class="label">Subscribed to newsletter? </span>' . $this->get_subscribe() . '</p>';

        return $output;
    }

    public function get_fullName(): string {
        // A special accessor that combines firstname and surname into full name
        return $this->_firstName . " " . $this->_surname;
    }

    public function get_dob() {
        // See https://www.php.net/manual/en/datetime.format.php
        return $this->_dob->format('d/m/Y');
    }

    public function set_dob($dob) {
        /*
         * Date of Birth is a bit special - we'll need to convert it to a date object
         * See https://www.php.net/manual/en/datetime.construct.php
         * We'll use the format of 31/12/2022
         * However since the DateTime constructor only uses "2000-12-31" format,
         * we better use DateTime::createFromFormat() to interpret the string instead
         */
        $interpreted_datetime = DateTime::createFromFormat(
            'd/m/Y',
            $dob,
            new DateTimeZone('Australia/Melbourne')
        );
        // Only set dob when the datetime is correctly interpreted
        if ($interpreted_datetime) $this->_dob = $interpreted_datetime;
    }

    public function get_home_address() {
        return $this->_home_address;
    }

    public function set_home_address($home_address) {
        $this->_home_address = $home_address;
    }

    public function get_parent_phone() {
        return $this->_parent_phone;
    }

    public function set_parent_phone($parent_phone) {
        $this->_parent_phone = $parent_phone;
    }

    public function get_parent_email() {
        return $this->_parent_email;
    }

    public function set_parent_email($parent_email) {
        $this->_parent_email = $parent_email;
    }

    public function get_subscribe(): string {
        // Ternary operator - show YES or NO based on the boolean value
        return ($this->_subscribe) ? "Yes" : "No";
    }

    public function set_subscribe($subscribe) {
        $this->_subscribe = $subscribe;
    }

    public function get_firstName() {
        return $this->_firstName;
    }

    public function set_firstName($firstname) {
        $this->_firstName = $firstname;
    }

    public function get_surname() {
        return $this->_surname;
    }

    public function set_surname($surname) {
        $this->_surname = $surname;
    }
}