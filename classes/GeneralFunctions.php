<?php 

    include_once("Database.php");

    class GeneralFunctions{
        
        private $connection;
        
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
        }
        
        public function getTotalRequiredCount($table_name){
            $sql = "SELECT count(*) AS total_count from $table_name WHERE deleted=0";
            $result_set = $this->connection->query($sql);
            if($row = mysqli_fetch_assoc($result_set)){
                return $row['total_count'];
            }else{
                die("Error while Fetching total count of students");
            }
        }
        
        public function getTotalRecordsCountWithCondition($table_name, $condition){
            $sql = "SELECT count(*) AS total_count from $table_name WHERE deleted=0 " . $condition;
            //echo $sql;
            $result_set = $this->connection->query($sql);
            if($row = mysqli_fetch_assoc($result_set)){
                return $row['total_count'];
            }else{
                die("Error while Fetching with condition total count of students");
            }
        }
        
        public function getAllDetailsById($table_name, $id){
            $sql = "SELECT * FROM $table_name WHERE id = $id ";
            $result_set = $this->connection->query($sql);
            if($this->connection->error)
                echo $this->connection->error;
            return ($result_set);
        }
        
        public function deleteById($table_name, $id){
            $current_date = date("Y-m-d h:i:sa");
            $deleted = 1;
            $deleted_by = 1;
            
            $query = "UPDATE $table_name SET deleted = $deleted, deleted_at = '$current_date', deleted_by = '$deleted_by' WHERE id = $id";
            $this->connection->query($query);
        }
        
        public function readAllRecords($table_name){
            $result_set = $this->connection->query("SELECT * FROM $table_name WHERE deleted = 0");
            return $result_set;
        }

        public function readAllRecordsWithCondition($table_name, $condition){
            $result_set = $this->connection->query("SELECT * FROM $table_name WHERE deleted = 0 " . $condition);
            return $result_set;
        }
        
    }
?>