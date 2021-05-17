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
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {
            $this->delete($_GET["id"]);
        }

        $this->index();
    }

    public function index()
    {
        $meeting = new Meeting();
        $meetingList = $meeting->getList();
        $result = $meetingList;
        require_once 'src/views/MeetingList.php';
    }

   

    public function store()
    {
        $newMeeting = new Meeting($request);
        $newMeeting ->insertItem();
        $this ->index();
    }

    public function edit()
    {
    
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}




