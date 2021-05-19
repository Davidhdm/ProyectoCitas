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

    public function store(array $request): void
    {
        $newMeeting = new Meeting($request['coder'],$request['topic'] );
        $newMeeting->insertItem();
        
        $this->index();
        header('location: index.php');
    }

    public function create()
    {
        require_once 'src/Views/CreateMeeting.php';
    }

    public function edit($id)
    {
        $meeting = new Meeting();
        $meetingEdit = $meeting->findById($id);
        require_once 'src/Views/EditMeeting.php';
    }

    public function update(array $request, $id)
    {
        $updateMeeting = new Meeting();
        $findMeeting = $updateMeeting-> findById($id);
        $findMeeting->rename($request["coder"], $request["topic"]);
        $findMeeting-> update();

        $this->index();
    }

    public function delete($id)
    {
        $findMeeting = new Meeting();
        $deleteMeeting = $findMeeting-> findById($id);
        $deleteMeeting-> delete();

        $this->index();
        header('location: index.php');
    }
}




