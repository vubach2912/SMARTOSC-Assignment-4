<?php
/*
 * Model student
 * __contruct parameter -> id, name, email, address, phone, gender, country
 *
 * Function get
 * Function set -> update this value in database if ID other 0 (ID != 0)
 *
 */
require_once('../../application/model/m_database.php');
class m_student{
	var $db = new m_database;
	var $id;
	var $username;
	var $email;
	var $phone;
	var $gender;
	var $address;
	var $country;
	
	public function __construct($id,$username,$email,$address,$phone,$gender,$country){
		$this->id = $id;
		$this->username = $username;
		$this->email = $email;
		$this->address = $address;
		$this->phone = $phone;
		$this->gender = $gender;
		$this->country = $country;
    }

    /*
     * Get value with your parameter id, name, email, address, gender, country
     */
	public function getId(){
		return $this->id;
	}

	public function getUsername(){
		return $this->username;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getAddress(){
		return $this->address;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function getGender(){
		return $this->gender;
	}

	public function getCountry(){
		return $this->country;
	}

    /*
     * Update name of student with parameter username (string)
     */
	public function setUsername($username){
		$this->username = $username;
        if($this->id != 0){
		    $sql = "UPDATE `tbl_sinhvien` SET `name` = '$username' WHERE id = '$this->$id'";
		    $this->db->executeQuery($sql);
        }
	}

    /*
     * Update email of student with parameter email (string)
     */
	public function setEmail($email){
        $this->email = $email;
        if($this->id != 0){
            $sql = "UPDATE `tbl_sinhvien` SET `email` = '$email' WHERE id = '$this->$id'";
            $this->db->executeQuery($sql);
        }
	}

    /*
     * Update address of student with parameter address (string)
     */
	public function setAddress($address){
        $this->address = $address;
        if($this->id != 0){
            $sql = "UPDATE `tbl_sinhvien` SET `address` = '$address' WHERE id = '$this->$id'";
            $this->db->executeQuery($sql);
        }
	}

    /*
     * Update phone of student with parameter phone (int)
     */
	public function setPhone($phone){
        $this->phone = $phone;
        if($this->id != 0){
            $sql = "UPDATE `tbl_sinhvien` SET `phone` = '$phone' WHERE id = '$this->$id'";
            $this->db->executeQuery($sql);
        }
	}

    /*
     * Update gender of student with parameter gender (int)
     */
	public function setGender($gender){
        $this->gender = $gender;
        if($this->id != 0){
            $sql = "UPDATE `tbl_sinhvien` SET `gender` = '$gender' WHERE id = '$this->$id'";
            $this->db->executeQuery($sql);
        }
	}

    /*
     * Update country of student with parameter country
     */
	public function setCountry($country){
        $this->country = $country;
        if($this->id != 0){
            $sql = "UPDATE `tbl_sinhvien` SET `country` = '$country' WHERE id = '$this->$id'";
            $this->db->executeQuery($sql);
        };
	}
	
}
?>