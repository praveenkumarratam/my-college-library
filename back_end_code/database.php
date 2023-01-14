<?php
class Database{
    private $server_name;
    private $user_name;
    private $password;
    private $college_library_data;

    protected function connection(){
        $this->server_name = "localhost";
        $this->user_name = "root";
        $this->password = "";
        $this->college_library_data = "my_college_library";
        $con = new mysqli($this->server_name, $this->user_name, $this->password, $this->college_library_data);
        return $con;
    }
}

class Query extends Database{
    //insert data
    public function insert_data($name, $class, $semister, $mobile_number, $book){
        $sql = "INSERT INTO `student`(`name`, `class`, `semister`, `mobile`, `book_name`) 
        VALUES ('{$name}','{$class}','{$semister}','{$mobile_number}','{$book}')";
        $result = $this->connection()->query($sql);
        echo "success";
    }

    //get data
    public function get_data(){
        $sql = "SELECT * FROM `student`";
        $result = $this->connection()->query($sql);
        $row = $result->num_rows;
        if($row > 0){
              $res = $result->fetch_all(MYSQLI_ASSOC);
              echo json_encode($res);
            };
        }
     //get single data
     public function get_single_data($id){
        $sql = "SELECT * FROM `student` WHERE id = '{$id}'";
        $result = $this->connection()->query($sql);
        $row = $result->num_rows;
        if($row > 0){
              $res = $result->fetch_all(MYSQLI_ASSOC);
              echo json_encode($res);
            };
        }


    //update data
    public function update_data($id, $name, $class, $sem, $mobile, $book){
        $sql = "UPDATE `student` SET `name`='{$name}',`class`='{$class}',`semister`='{$sem}',
        `mobile`='{$mobile}',`book_name`='{$book}' WHERE id = '{$id}'";
        $result = $this->connection()->query($sql);
        echo "success";

    }

    public function delete_data($id){
        $sql = "DELETE FROM `student` WHERE id='$id'";
        $result = $this->connection()->query($sql);
        echo "delete";

    }

    public function search_data($name){
        $sql = "SELECT * FROM `student` WHERE name like '%$name%'";
        $result = $this->connection()->query($sql);
        $row = $result->num_rows;
        if($row > 0){
            $res = $result->fetch_all(MYSQLI_ASSOC);
            echo json_encode($res);
        }else{
            echo json_encode(array("message"=>"Not Exists Record", "status"=>false));
        }

    }
}
?>