<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student classes</title>
    <style>
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
require_once('student.php');

// Initialise the student object
$lily = new Student("Lily", "Peterson", "24/08/2012");

// Set the values
$lily->set_home_address("1 Flinders Lane MELBOURNE VIC 3000");
$lily->set_parent_phone("0423 456 789");
$lily->set_parent_email("d.peterson@example.com");
$lily->set_subscribe("NO");
?>
<pre>
<?php
// Dump it
var_dump($lily);
?>
</pre>
<div>
    <?php
    // OR, print it nicely if __toString() is defined
    echo $lily;
    ?>
</div>

<?php
require_once('enrolment.php');

// Initialise the enrolment object
$james = new Enrolment("James", "Peterson", "24/08/1992");

// Set the values
$james->set_home_address("20 Exhibition Walk MONASH UNIVERSITY VIC 3800");
$james->set_parent_phone("0498 765 432");
$james->set_parent_email("d.peterson@example.com");
$james->set_subscribe("YES");

// Set values for the new fields
$james->set_instrument("Piano");
$james->set_level("advanced");
?>

<pre>
<?php
// Dump it
var_dump($james);
?>
</pre>

<div>
    <?php
    // OR, print it nicely if __toString() is defined
    echo $james;
    ?>
</div>
</body>