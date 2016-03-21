<?php
class m_database
{
    var $servername = "localhost";
    var $username = "root";
    var $password = "1234";
    var $database = "smartosc_assignment3_bachvu";
    var $conn = null;

    /**
     * dbconnect constructor.
     */
    public function __construct(){

    }

    /*
     * OPEN DATABASE
     */
    public function openConnect(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            return false;
        } return true;
    }

    /*
     * CLOSE DATABASE AFTER CONNECT
     */
    public function closeConnect(){
        mysqli_close($this->conn);
        $this->conn = null;
    }
    /*
     *  SELECT ALL VALUE IN TABLE TO ARRAY
     */
    public function selectAllQuery($sql){
        if($sql != '')
        {
            $this->openConnect();
            $list = mysqli_query($this->conn,$sql);
            $result = array();
            if( mysqli_num_rows($list) > 0)
            {
                while($row = mysqli_fetch_array($list))
                {
                    $result[] = $row;
                }
                $this->closeConnect();
                return $result;
            }
            else
            {
                return false;
            }
        } else return false;
    }

    /*
     *  SELECT 1 VALUES
     */
    public function selectQuery($sql){
        if($sql != '')
        {
            $this->openConnect();
            $list = mysqli_query($this->conn,$sql);
            $result = array();
            if(!$list){} else {
                if(mysqli_num_rows($list) > 0)
                {
                    while($row = mysqli_fetch_array($list))
                    {
                        $result = $row;
                    }
                    $this->closeConnect();
                    return $result[0];
                }
                else
                {
                    return false;
                }
            }
        } else return false;
    }

    /*
	 *	Query to update, delete processor
     */

    public function executeQuery($sql){
        if($sql != '')
        {
            $this->openConnect();
            $execute = mysqli_query($this->conn,$sql);
            if($execute)
            {
                $this->closeConnect();
                return true;
            }
            else
                return false;

        } else return false;
    }
}
?>