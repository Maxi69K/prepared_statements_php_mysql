<?php
class Student
{
    public function getInfo()
    {
        return "name: " . $this->name . ", " . "age: " . $this->age;
    }
    public function compare(Student $student)
    {
        if ($this->age > $student->age) {
            return $this->name . " is older";
        } elseif ($this->age < $student->age) {
            return $this->name . " is younger";
        } else {
            return "They are the same age";
        }
    }
}