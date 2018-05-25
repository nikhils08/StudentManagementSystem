<?php 

    include_once("Database.php");
    include_once("GeneralFunctions.php");
    include_once("Session.php");

    class Subject extends GeneralFunctions{
        private $connection;
        public $recordsPerPage;
        public $table_name;
        public function __construct(){
            parent::__construct();
            global $database;
            $this->connection = $database->getConnection();
            $this->recordsPerPage = 2;
            $this->table_name = "subjects";
        }
        
        public function delete($id){
            $this->deleteById($this->table_name, $id);
        }
        
        
        public function insert($subject_name, $subject_fees, $semester_id, $branch_id){

            $query  = "INSERT INTO $this->table_name (subject_name, subject_fees, semester_id, branch_id, created_by, created_at) VALUES (?, ?, ?, ?, ?, ?)";
            $created_by = $_SESSION['member_id'];
            $current_date = date("Y-m-d h:i:sa");
            $updated_by = 1;
            $deleted = 0;

            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("ssssii", $subject_name, $subject_fees, $semester_id, $branch_id, $created_by, $current_date);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING RECORD IN $this->table_name");
            }
        }
        
        public function getAllDetailsOfASubject($id){
            return ($this->getAllDetailsById($this->table_name, $id));
        }
        
        
        public function update($id, $subject_name, $subject_fees){

            $query  = "UPDATE $this->table_name SET subject_name = ?, subject_fees = ?, updated_at = ?, updated_by = ? WHERE id = ?";

            $current_date = date("Y-m-d h:i:sa");
            $updated_by = 1;

            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("sssii", $subject_name, $subject_fees, $current_date, $updated_by, $id);
            if($preparedStatement->execute()){
                return true;
            } else{
                die("ERROR WHILE UPDATING SUBJECT");
            }
        }
        
        
    public function displayRecordsWithPagination($recordsPerPage){
        echo "<table class='table'><thead class='thead-light'><tr>
                <th>#</th>
                <th>Subject Name</th>
                <th>Subject Fees</th>
                <th></th>
            </tr>
            </thead>
            <tbody>";

            if(isset($_POST['page'])){
                $page = $_POST['page'];
            } else{
                $page=1;
            }

            if($page=="" || $page == 1){
                $limit_start = 0;
            }else{
                $limit_start = ($page * $recordsPerPage) - $recordsPerPage;
            }

            $condition = "";
            if( isset( $_POST['key'] ) ) {
                $key = $_POST['key'];
                $condition = "AND (subject_name like '%$key%' ) ";
            }

            $total_branch = $this->getTotalRecordsCountWithCondition($this->table_name, $condition);
            $num_of_pages = ceil($total_branch/$recordsPerPage);

            $condition = $condition . "LIMIT $limit_start, $recordsPerPage";

            $result_set = $this->readAllRecordsWithCondition($this->table_name, $condition);

            $sr_no = $recordsPerPage * $page - $recordsPerPage + 1;
            while ($row = mysqli_fetch_assoc($result_set)) {
                $id = $row['id'];
                ?>
        <tr>
        <th scope="row">
        <?php echo $sr_no; ?>
        </th>
        <td>
        <?php echo $row['subject_name']; ?>
        </td>
        <td>
        <?php echo $row['subject_fees']; ?>
        </td>

        <td>
        <div class="button-list">
        <a type="button" class="btn btn-icon waves-effect waves-light btn-purple" data-toggle="tooltip" title="Edit Subject!" href="subject.php?q=edit&id=<?php echo $id; ?>"> <i class="fa fa-pencil"></i> </a>
        <a type="button" class="btn btn-icon waves-effect waves-light btn-danger delete-subject" data-toggle="tooltip" title="Delete Subject!" data-record-id="<?php echo $id; ?>"> <i class="fa fa-remove"></i> </a>
        </div>
        </td>
        </tr>
        <?php
        $sr_no++;
        }
        echo "</tbody>";
        echo "</table>";
        ?>

        <hr>
        <ul class="pagination justify-content-end pagination-split mt-0">
        <?php
            $li_class= "page-item";
            $a_class = "page-link";
            $li_active_class = $li_class." active";
            $page_num = $page==1?1:$page-1;
            echo "<li class='$li_class'><a onclick='paginationLinkClicked($page_num)' class='$a_class'>&lt;&lt;</a></li>";
            for($i=1; $i<=$num_of_pages; $i++) {
                if($i==$page)
                    echo "<li class='$li_active_class'><a onclick='paginationLinkClicked($i)' class='$a_class'>$i</a></li>";
                else
                    echo "<li class='$li_class'><a onclick='paginationLinkClicked($i)' class='$a_class'>$i</a></li>";
            }
            $page_num = $page==$num_of_pages?$num_of_pages:$page+1;
            echo "<li class='$li_class'><a onclick='paginationLinkClicked($page_num)' class='$a_class'>&gt;&gt;</a></li>";
            ?>
        </ul>
        <?php
        }
    }
?>