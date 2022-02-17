<?php

namespace App\Model;

class TypeNoteModel extends Baseconnect
{
    public $table="note_type";

    public function createTypeNote($typenote){
        $sql="insert into $this->table(name,description) values (?,?)";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$typenote['name']);
        $stmt->bindParam(2,$typenote['description']);
        $stmt->execute();
    }
    public function updatetypeNote($id,$note){
        $sql="update $this->table set name=?,description=?  where id=?";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$note["name"]);
        $stmt->bindParam(2,$note["description"]);
        $stmt->bindParam(3,$id);
        $stmt->execute();
    }
    public function deleteNoteType($id){
        $noteMode=new NoteModel();
        $noteMode->deleteNoteByTypeId($id);
        $this->delete($id);
    }
}