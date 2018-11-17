<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$project_folder = explode("/", str_replace($_SERVER["DOCUMENT_ROOT"], "/", $_SERVER["SCRIPT_FILENAME"]));
include ($_SERVER["DOCUMENT_ROOT"]."/".$project_folder[2]."/database/Connection.php");
class DataAccess extends Connection{
    private $conn;
    public function DataAccess(){
        Connection::Connection();
        $this->conn=  Connection::getConnection();
    }
    
    public function getAll($table){
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_CLASS);
        return $data;
    }
    public function getById($table, $id){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=$id");
        $stmt->execute();
        $data=$stmt->fetch();
        return $data;
    }

    public function select($table,$field='*',$condition=null,$order_by=null,$limit=null){
        $sql="SELECT $field FROM $table";
        $sql.=$condition ? " $condition" : " ";
        $sql.=$order_by?" ORDER BY $order_by":'';
        $sql.=$limit?" LIMIT $limit":'';
        // echo $sql;exit;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data=$stmt->fetchAll();
        return $data;
    }



    public function insert($table,$data=array()){
        $fields=implode(',',array_keys($data));
        $placeholder = implode(',', array_fill(0, count($data), '?'));
        $sql = "INSERT INTO $table ($fields) VALUES ($placeholder)";
        $stmt=$this->conn->prepare($sql);
        $result=$stmt->execute(array_values($data));
        return $result;
    }

    public function update($table,$data=array(),$condition){
        $fields='';
        $params=[];
        foreach ($data as $key => $value) {
            $fields.=$key.'=:'.$key.',';
            $params[':'.$key]=$value;
        }
        $fields=trim($fields,',');
        $sql = "UPDATE $table SET $fields WHERE $condition";
        $stmt=$this->conn->prepare($sql);
        $result=$stmt->execute($params);
        return $result;
    }

    public function delete($table,$condition){
        $sql = "DELETE FROM $table WHERE $condition";
        $stmt=$this->conn->prepare($sql);
        $result=$stmt->execute();
        return $result;
    }
}

