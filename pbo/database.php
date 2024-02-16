<?php

class Database{
    public $db="dbtoko";
    private $house="localhost";
    private $user="root";
    private $password="";
public function insertData(){
   return"INSERT DATA";

    }
    public function selectData(){
   return"SELECT DATA";

    }
    public function deleteData(){
   return"DELETE DATA";

    }
    public function updateData(){
   return"UPDATE DATA";

    }
    public function ambil(){
    return $this->host;

    }

}   

$usedb= new Database;
echo $usedb->insertData();
echo "<br>";
echo $usedb->db;
echo "<br>";
echo $usedb->ambil();
echo "<br>";
echo $usedb->selectData();


echo Database::selectData();


?>