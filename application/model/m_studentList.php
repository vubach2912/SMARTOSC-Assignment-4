<?php

require_once('../../application/model/m_student.php');
require_once('../../application/model/m_database.php');
class m_studentList
{
    var $studentList = array();
    var $db = new m_database();

    function __construct()
    {

    }

    function getList(){
        $sql = 'SELECT * FROM `tbl_sinhvien`';
        $studentListArray = $this->db->executeQuery($sql);
        foreach ($studentListArray as $row){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $address = $row['address'];
            $phone = $row['phone'];
            $gender = $row['gender'];
            $country = $row['country'];
            $this->studentList[] = new m_student($id,$name,$email,$address,$phone,$gender,$country);
        }
        return $this->studentList;
    }

    function addStudent($name,$email,$address,$phone,$gender,$country){
        new m_student(0,$name,$email,$address,$phone,$gender,$country);
    }

    function updateStudent(m_student $student){
        $newStudent = $student;
        $newStudent->setUsername($student->username);
        $newStudent->setEmail($student->email);
        $newStudent->setAddress($student->address);
        $newStudent->setPhone($student->phone);
        $newStudent->setGender($student->gender);
        $newStudent->setCountry($student->country);
    }

    function deleteStudent($id){
        $id = $student;
        $sql = "DELETE FROM `tbl_sinhvien` WHERE id = '$id'";
        return $this->db->executeQuery($sql);
    }
}