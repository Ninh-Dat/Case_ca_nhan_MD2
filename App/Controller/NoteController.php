<?php
namespace App\Controller;
use App\Model\NoteModel;
use App\Model\TypeNoteModel;

class NoteController
{
    public $noteModel;

    public function __construct()
    {
        $this->noteModel= new NoteModel();
    }

    public function getALl(){
        $notes=$this->noteModel->getAll();
        include "App/View/nost/list.php";
    }
    public function getDetail($id){
        $note= $this->noteModel->detail($id);
        include "App/View/nost/detail.php";
    }
    public function delete($id){
        $this->noteModel->delete($id);
        header("location:index.php?page=note-list");
    }
    public function createNote($request){
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $typecontroller=new TypeNoteModel();
            $type_id=$typecontroller->getALl();
            include "App/View/nost/create.php";
        }
        else{
            $data=[
                "title"=>$_REQUEST["title"],
                "content"=>$_REQUEST["content"],
                "type_id"=>$_REQUEST["type_id"]
            ];

            $this->noteModel->createNote($data);
            header("location:index.php?page=note-list");
        }
    }
    public function updateNote(){
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $note=$this->noteModel->detail($_REQUEST["id"]);
            include "App/View/nost/update.php";
        }
        else{
            $data=[
                "title"=>$_REQUEST["title"],
                "content"=>$_REQUEST["content"],
                "type_id"=>$_REQUEST["type_id"]
            ];
            $this->noteModel->updateNote($_REQUEST["id"],$data);
            header("location:index.php?page=note-list");
        }
    }
}