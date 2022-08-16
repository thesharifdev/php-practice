<?php

/**
 * Make our own data type for student
 */
class Student {

    public $name;
    public $id;
    public $class;
}

/**
 * Classroom class only take Student type of data
 */
class ClassRoom {

    public $class_name;
    public $class_id;
    public $student_name;
    public $student_id;
    public $student_class;

    public function __construct(Student $student){

        $this->student_name  = $student->name;
        $this->student_id    = $student->id;
        $this->student_class = $student->class;
    }

    public function getStudentName(){
        return $this->student_name;
    }

    public function getStudentId(){
        return $this->student_id;
    }

    public function getStudentClass(){
        return $this->student_class;
    }
}

$student = new Student();

$student->name  = "Md Sharif Miah";
$student->id    = 778978;
$student->class = 15;

$classRoom         = new ClassRoom($student);

echo $classRoom->getStudentName();