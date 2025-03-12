<?php
require_once('student.php');

class Enrolment extends Student {
    protected $_instrument;
    protected $_level;

    public function __construct($first_name, $surname, $dob) {
        // Initialise the object with parent's constructor
        parent::__construct($first_name, $surname, $dob);

        // We don't need to initialise other fields as new fields here are all optional
    }

    public function __toString() {
        // Call parent's original toString() override to generate the repetitive contents
        $output = parent::__toString();
        // Then attach new contents to the output
        $output .= '<p style="font-weight:bold">Student is enrolled in ' . $this->get_level() . ' level ' . $this->get_instrument() . ' class. </p>';

        return $output;
    }

    public function get_level() {
        return $this->_level;
    }

    public function set_level($level) {
        // Make sure the class set here are one of the three valid options

        $valid_levels = [
            'basic',
            'intermediate',
            'advanced',
        ];

        if (in_array($level, $valid_levels)) {
            $this->_level = $level;
        } else {
            echo "Class level must be either basic, intermediate or advanced!";
        }
    }

    public function get_instrument() {
        return $this->_instrument;
    }

    public function set_instrument($instrument) {
        $this->_instrument = $instrument;
    }
}