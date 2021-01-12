<?php


namespace App\Controller;
use App\Model\Students;
use App\Model\StudentsManager;

class StudentController
{
    protected $studentManager;

    public function __construct()
    {
        $this->studentManager = new StudentsManager();
    }

    public function viewList()
    {
        $students = $this->studentManager->getAllStudents();
        include_once 'src/View/list.php';
    }

    public function addStudent()
    {
        //$this->studentManager->addStudent();
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once 'src/View/add-student.php';
        }else{
            $student_number = $_POST['studentNumber'];
            $student_name = $_POST['studentName'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $image = $_POST['image'];

            $student = new Students($student_number,$student_name,$address,$email);
            $this->studentManager->addStudent($student);
            header('location: index.php');
        }
    }

    public function deleteStudent()
    {
        $studentNumber = $_REQUEST['studentNumber'];
        $this->studentManager->deleteStudent($studentNumber);
        header('location:index.php');
    }
}