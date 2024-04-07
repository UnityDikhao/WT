<?php
$course = $_GET['course'];

function generateStudentXML() {
    $students = array(
        array("roll_no" => "101", "name" => "John Doe", "address" => "123 Main St", "college" => "ABC College", "course" => "Engineering"),
        array("roll_no" => "102", "name" => "Jane Smith", "address" => "456 Elm St", "college" => "XYZ University", "course" => "Computer Science"),
        array("roll_no" => "103", "name" => "Michael Johnson", "address" => "789 Oak St", "college" => "DEF Institute", "course" => "Business Administration"),
        array("roll_no" => "104", "name" => "Sarah Lee", "address" => "567 Pine St", "college" => "GHI College", "course" => "Medicine"),
        array("roll_no" => "105", "name" => "David Brown", "address" => "321 Cedar St", "college" => "JKL University", "course" => "Law")
    );

    $xml = new SimpleXMLElement('<students/>');

    foreach ($students as $student) {
        $studentNode = $xml->addChild('student');
        $studentNode->addChild('roll_no', $student['roll_no']);
        $studentNode->addChild('name', $student['name']);
        $studentNode->addChild('address', $student['address']);
        $studentNode->addChild('college', $student['college']);
        $studentNode->addChild('course', $student['course']);
    }

    $xml->asXML('student.xml');
}

generateStudentXML();

function printStudentDetails($course) {
    $xml = simplexml_load_file('student.xml');
    $foundStudents = array();

    foreach ($xml->student as $student) {
        if ((string)$student->course === $course) {
            $foundStudents[] = array(
                'roll_no' => (string)$student->roll_no,
                'name' => (string)$student->name,
                'address' => (string)$student->address,
                'college' => (string)$student->college
            );
        }
    }

    if (count($foundStudents) > 0) {
        echo "<h2>Student Details for Course: $course</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Roll No</th><th>Name</th><th>Address</th><th>College</th></tr>";
        foreach ($foundStudents as $student) {
            echo "<tr><td>{$student['roll_no']}</td><td>{$student['name']}</td><td>{$student['address']}</td><td>{$student['college']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No students found for course: $course";
    }
}

if (isset($_GET['course'])) {
    $course = $_GET['course'];
    printStudentDetails($course);
}
?>

