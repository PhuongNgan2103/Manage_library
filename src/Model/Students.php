<?php


namespace App\Model;


class Students
{
    protected $student_number;
    protected $student_name;
    protected $address;
    protected $email;
    protected $image;

    /**
     * Students constructor.
     * @param $student_number
     * @param $student_name
     * @param $address
     * @param $email
     */
    public function __construct($student_number, $student_name, $address, $email)
    {
        $this->student_number = $student_number;
        $this->student_name = $student_name;
        $this->address = $address;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getStudentNumber()
    {
        return $this->student_number;
    }

    /**
     * @param mixed $student_number
     */
    public function setStudentNumber($student_number)
    {
        $this->student_number = $student_number;
    }

    /**
     * @return mixed
     */
    public function getStudentName()
    {
        return $this->student_name;
    }

    /**
     * @param mixed $student_name
     */
    public function setStudentName($student_name)
    {
        $this->student_name = $student_name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


}