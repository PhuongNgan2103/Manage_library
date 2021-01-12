<?php


namespace App\Model;


class StudentsManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnects();
    }

    public function getAllStudents()
    {
        $sqlQuery = "SELECT * FROM Students";
        $stmt = $this->dbConnect->connect()->query($sqlQuery);
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $item){
            $students[] = new Students($item['student_number'],$item['student_name'],$item['address'],$item['email']);
        }
        return $students;
    }

    public function addStudent($student)
    {
        $student_number = $student->getStudentNumber();
        $student_name = $student->getStudentName();
        $address = $student->getAddress();
        $email = $student->getEmail();
        $image = $student->getImage();
        $sqlQuery = "INSERT INTO Students(`student_number`, `student_name`, `address`, `email`, `image`) VALUES ('$student_number','$student_name','$address','$email','$image')";
        $stmt = $this->dbConnect->connect()->prepare($sqlQuery);
        $stmt->execute();
    }

    public function deleteStudent($studentNumber)
    {
        $sql = "DELETE FROM `Students` WHERE student_number='$studentNumber'";
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->execute();
    }
}