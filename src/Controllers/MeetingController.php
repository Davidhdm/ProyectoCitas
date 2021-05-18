<?php

namespace App\Controllers;

use App\Models\Meeting;
use App\Connection;

class MeetingController
{
    public function __construct()
    {
        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }
        
        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {
            $this->delete($_GET["id"]);
            return;
        }

        $this->index();
    }



    public function index()
    {
        $meeting = new Meeting();
        $meetingList = $meeting->getList();
        $result = $meetingList;
        require_once 'src/Views/MeetingList.php';

    }

<<<<<<< HEAD
   
//anadir Item???Save new Item in story
=======


>>>>>>> a459e9b098ed24a1f6874772e99f2c061a3fe570
    public function store(array $request): void
    {
        $newMeeting = new Meeting($request['coder'],$request['topic'] );
        $newMeeting->insertItem();
        $this->index();
        // $newMeeting = new Meeting($request['coder']);
        // $newMeeting->insertItem();
        
        // echo "ajj";
    }

    // public function delete(array $id)
    // {
    //     $meetHelper = new Meeting($id['coder'], $id['topic']);
    //     $newMeeting = $meetHelper->findById($id);
    //     $newMeeting->delete();

    //     $this->index();
    // }

    public function create()
    {
        require_once 'src/Views/CreateMeeting.php';
    }

    public function edit()
    {
    
    }

    public function update()
    {
        
    }

    public function delete($id)
    {
<<<<<<< HEAD
   
=======
        $findMeeting = new Meeting();
        $deleteMeeting = $findMeeting-> findById($id);
        $deleteMeeting-> delete();
        $this->index();
>>>>>>> a459e9b098ed24a1f6874772e99f2c061a3fe570
    }
}




