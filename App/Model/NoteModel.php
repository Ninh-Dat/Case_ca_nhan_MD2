<?php

namespace App\Model;

class NoteModel extends Baseconnect
{
    public $table="notes";

    public function getAll()
    {
      $sql= "select notes.id as id, title, content, note_type.name as typeName
       from notes join note_type on type_id= note_type.id";
      $stmt= $this->connect->query($sql);
      return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function deleteNoteByTypeId($id){
        $sql="delete from $this->table where type_id=$id";
        $this->connect->query($sql);
    }
    public function createNote($note){
        $sql="insert into $this->table(title,content,type_id) values (?,?,?)";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$note["title"]);
        $stmt->bindParam(2,$note["content"]);
        $stmt->bindParam(3,$note["type_id"]);
        $stmt->execute();
    }

    public function updateNote($id,$note){
        $sql="update $this->table set title=?,content=? where id=?";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$note["title"]);
        $stmt->bindParam(2,$note["content"]);
        $stmt->bindParam(3,$id);
        $stmt->execute();
    }
}