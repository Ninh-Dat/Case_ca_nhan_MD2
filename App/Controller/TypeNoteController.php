<?php

namespace App\Controller;

use App\Model\TypeNoteModel;

class TypeNoteController
{
    public $typenoteModel;

    public function __construct()
    {
        $this->typenoteModel= new TypeNoteModel();
    }

    public function getALl(){
        $note_types=$this->typenoteModel->getAll();
        include "App/View/note_type/list.php";
    }
    public function getDetail($id){
        $type= $this->typenoteModel->detail($id);
        include "App/View/note_type/detail.php";
    }
    public function delete($id){
        $this->typenoteModel->deleteNoteType($id);
        header("location:index.php?page=type_note-list");
    }
    public function createTypeNote(){
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            include "App/View/note_type/create.php";
        }
        else{
            $data=[
                "name"=>$_REQUEST["name"],
                "description"=>$_REQUEST["description"],
            ];
            $this->typenoteModel->createTypeNote($data);
            header("location:index.php?page=type_note-list");
        }
    }
    public function updateTypeNote(){
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $note=$this->typenoteModel->detail($_REQUEST["id"]);
            include "App/View/note_type/update.php";
        }
        else{
            $data=[
                "id"=>$_REQUEST["id"],
                "name"=>$_REQUEST["name"],
                "description"=>$_REQUEST["description"],

            ];
            $this->typenoteModel->updateTypeNote($_REQUEST["id"],$data);
            header("location:index.php?page=type_note-list");
        }
    }
}