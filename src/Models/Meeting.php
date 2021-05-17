<?php

namespace App\Models;

use App\Connection;
use PDO;

class Meeting {
    private ?int $id;
    private string $coder;
    private string $topic;
    private ?string $mytime;
    
    private $connection;

    public function __construct(int $id = null, string $coder = '', string $topic = '', string $mytime = null)
    {
        $this->coder = $coder;
        $this->topic = $topic;
        $this->mytime = $mytime;
        $this->connection = new Connection();
    }

    public function getList()
    {
        $sql = "SELECT * FROM `meeting`";
        $query = $this->connection->mysql->query($sql);
        $meetingArray = $query->fetchAll();
        $meetingList = [];
        
        foreach($meetingArray as $meeting){
            $meetingItem = new Meeting ($meeting['id'], $meeting['coder'], $meeting['topic'], $meeting['mytime']);
            array_push($meetingList, $meetingItem);
        }

        return $meetingArray;
    }


    
    public function insertItem()
    {
        $sql = "INSERT INTO `meeting` VALUES ('$this->coder', '$this->topic' , '$this->mytime') ";
        
    }



    /* public function insert($coder, $topic, $mytime) 
    {
        $this->coder = $coder;
        $this->topic = $topic;
        $this->mytime = $mytime;
        
        $sql = "INSERT INTO meeting(coder, topic, mytime) VALUE(?,?,?)";
        $insert = $this->connection->prepare($sql);
        $arrayData = array($this->coder, $this->topic, $this->mytime);
        $resultInsert = $insert->execute($arrayData);
        $idInsert = $this->connection->lastInsertId();
        return $idInsert;
    
    }

    public function update($id, $coder, $topic, $mytime)
    {
        $this->coder = $coder;
        $this->topic = $topic;
        $this->mytime = $mytime;
        $sql = "UPDATE meeting SET coder=?, topic=?, mytime=? WHERE id=$id";
        $update = $this->connection->prepare($sql);
        $arrayData = array($this->coder, $this->topic, $this->mytime);
        $resultExecute = $update->execute($arrayData);
        return $resultExecute;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM meeting WHERE id = ?";
        $arrayWhere = array($id);
        $execute = $this->connection->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    } 

    public function delete($id)
    {
        
        $sql = "DELETE FROM meeting WHERE id=?";
        $arrayWhere = array($id);
        $delete = $this->connection->prepare($sql);
        $resultDelete = $delete->execute($arrayWhere);
        return $resultDelete;
    } */
} 