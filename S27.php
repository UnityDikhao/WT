<?php
function validateName($name) {
    return preg_match('/^[A-Z\s]+$/', $name);
}

function validateAge($age) {
    return $age >= 18;
}

function validateNationality($nationality) {
    return $nationality === 'INDIAN';
}

$name = $_POST['name'];
$age = $_POST['age'];
$nationality = $_POST['nationality'];


if (!validateName($name)) {
    echo "Invalid name. Please enter name in upper case letters only.";
} elseif (!validateAge($age)) {
    echo "Invalid age. Age should not be less than 18 years.";
} elseif (!validateNationality($nationality)) {
    echo "Invalid nationality. Nationality should be Indian.";
} else {
    echo "Registration successful!";
}
?>
