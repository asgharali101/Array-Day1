<?php
$students = [
    [
        'name' => 'Asghar',
        'father_name' => 'haji chanesar',
        'cast' => 'burdi',
    ],
    [
        'name' => 'Ali',
        'father_name' => 'Ahmed',
        'cast' => 'memon',
    ],
    [
        'name' => 'Afzal',
        'father_name' => 'Gul ahmed',
        'cast' => 'burdi',
    ],
    [
        'name' => 'faraz',
        'father_name' => 'najeeb',
        'cast' => 'memon',
    ],
];



foreach ($students as $student) {
    unset($student['cast']);

    echo "Name: " . $student['name'] . '<br>';
    echo "Father's Name: " . $student['father_name'] . "<br>";
    //echo "cast" . $student['cast'] . "<br> <br>";
}
?>