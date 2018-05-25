<?php 
    include_once("Database.php");
    include_once("Session.php");
    require_once("Functions.php");

    class User{
        private $connection;
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
            Session::startSession();
        }
        
        /*********************************************************
        # The below function is used to login the user
        # It automatically assigns session attributes
        # It is responsibility of CALEE to start the session
        # returns true if credentials were correct otherwise false
        **********************************************************/
        public function processLogin($email, $password){
            /*
                $query  = "SELECT * FROM members WHERE member_email = '$email";
                $select_user = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc()){
                    extract();
                    #this function will be extracting every row
                }
                
            */
            $query  = "SELECT * FROM members WHERE member_email = ?";
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("s", $email);
            $preparedStatement->execute();
            
            $preparedStatement->store_result(); #PHP 7 method
            
            $count = $preparedStatement->num_rows;
            if($count == 1) {
                $preparedStatement->bind_result($id, $member_name, $member_email, $member_password, $member_role, $created_at, $updated_at);
                $preparedStatement->fetch();
                if($password === $member_password){
                    $_SESSION['login'] = true;
                    $_SESSION['member_id'] = $id;
                    $_SESSION['member_name'] = $member_name;
                    $_SESSION['member_role'] = $member_role;
                    return true;
                } else{
                    return false;
                }
            }
        }
        
        public function get_session(){
            return $_SESSION['login'];
        }
        
        public function user_logout() {
            $_SESSION['login'] = false;
            $_SESSION['member_id'] = null;
            $_SESSION['member_name'] = null;
            $_SESSION['member_role'] = null;
            session_destroy();
        }
        
        public static function checkActiveSession(){
            if(!Session::isSessionStart())
                Functions::redirect("login.php");
        }
    }
?>