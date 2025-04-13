<?php

require_once './solution.php';

$classroom1 = new Classroom([new Student("AC-343424", "James", "Smith", 6), new Student("AC-343428", "Maria", "Garcia", 5),new Student("AC-343434", "Robert", "Johnson", 3),new Student("AC-343454","Danny", "Robertson",10)], "Algebra II", "Emily Theodore");
echo $classroom1->getClassIdentity() . PHP_EOL;
echo $classroom1->getNumberOfStudents() . PHP_EOL;

$classroom2 = new Classroom([new Student("AC-340014","Kent", "Carter",9), new Student("AC-340024","Isaiah", "Chambers",10),new Student("AC-340018","Leta", "Ferguson", 7)], "English", "Daniel Pherb");
echo $classroom2->getClassIdentity() . PHP_EOL;
echo $classroom2->getNumberOfStudents() . PHP_EOL;