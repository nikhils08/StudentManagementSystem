<?php

include_once("Database.php");
include_once("Session.php");
/*
    pid, parent_first_name, parent_number, parent_email, parent_gender, created_at, updated_at, updated_by, deleted, deleted_at, deleted_by

    pid, $parent_first_name, $parent_number, $parent_email, $parent_gender, $created_at, $updated_at, $updated_by, $deleted, $deleted_at, $deleted_by
*/
class Parents{

    public function __construct(){
        Session::startSession();
    }
    public function readAllParent(){
        global $database;
        $result_set = $database->query("SELECT * FROM parents");
        return $result_set;
    }

    public function insertParentDetails($parent_first_name, $parent_number, $parent_email, $parent_gender){
        global $database;
        $connection = $database->getConnection();
        $current_date = date("Y-m-d h:i:sa");
        $updated_by = $_SESSION['member_id'];
        $created_by = $_SESSION['member_id'];
        $deleted = 0;

        $query = "INSERT INTO parents(parent_first_name, parent_number, parent_email, parent_gender, created_by, created_at, updated_at, updated_by, deleted) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $preparedStatement = $connection->prepare($query);
        $preparedStatement->bind_param("ssssissii", $parent_first_name, $parent_number, $parent_email, $parent_gender, $created_by, $current_date, $current_date, $updated_by, $deleted);


        if($preparedStatement->execute()){
            return $connection->insert_id;
        } else{
            die("ERROR WHILE INSERTING PARENT");
        }
    }

    public function getFatherDetails($sid){
        global $database;
        $connection = $database->getConnection();
        $sql = "SELECT * FROM parents WHERE pid in (SELECT pid FROM gaurdian WHERE sid= $sid)";
        $result_set = $connection->query($sql);
        while($row = mysqli_fetch_assoc($result_set)){
            if($row['parent_gender'] == "Male"){
                return $row;
            }
        }
    }

    public function getMotherDetails($sid){
        global $database;
        $connection = $database->getConnection();
        $sql = "SELECT * FROM parents WHERE pid in (SELECT pid FROM gaurdian WHERE sid= $sid)";
        $result_set = $connection->query($sql);
        while($row = mysqli_fetch_assoc($result_set)){
            if($row['parent_gender'] == "Female"){
                return $row;
            }
        }
    }

    public function updateParentDetails($pid,$parent_first_name, $parent_number, $parent_email){
        global $database;
        $connection = $database->getConnection();
        $current_date = date("Y-m-d h:i:sa");
        $updated_by = 1;

        $query = "UPDATE parents SET parent_first_name = ?, parent_number = ?, parent_email = ?, updated_at = ?, updated_by = ? WHERE pid = ?";


        $preparedStatement = $connection->prepare($query);
        $preparedStatement->bind_param("ssssii", $parent_first_name, $parent_number, $parent_email, $current_date, $updated_by, $pid);


        if($preparedStatement->execute()){
            return true;
        } else{
            die("ERROR WHILE UPDATING PARENT");
        }
    }
}
?>