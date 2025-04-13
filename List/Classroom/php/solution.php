<?php

class Student {
    public string $studentId;
    public string $firstName;
    public string $lastName;
    public int $gradeLevel;

    public function __construct($studentId, $firstName, $lastName, $gradeLevel){
        $this->studentId = $studentId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gradeLevel = $gradeLevel;
    }

    public function getStudentInfo(): string{
        return sprintf("%s: %s%s", $this->gradeLevel, $this->firstName, $this->lastName);
    }
}

class Classroom {
    public array $students;
    public string $courseName;
    public string $teacher;

    public function __construct($students, $courseName, $teacher){
        $this->students = $students;
        $this->courseName = $courseName;
        $this->teacher = $teacher;
    }

    public function getClassIdentity(): string{
        return sprintf("%s managed by %s", $this->courseName, $this->teacher);
    }

    public function getNumberOfStudents(): int{
        return count($this->students);
    }
}