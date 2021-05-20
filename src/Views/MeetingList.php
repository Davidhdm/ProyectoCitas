<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="src/Css/meetingListStyle.css">
    <title>Meeting Lista</title>
</head>
<body>
<h1>MeetingList</h1>
<div class="container">
    <table>
        <thead class="thHead">
            <th>ID</th>
            <th>Coder</th>
            <th>Topic</th>
            <th>Created at</th>
            <th></th>
        </thead>
        <tbody>
        <?php
        
        foreach ($result as $data){
            echo "
            
                <tr>
                    <td>{$data->getId()}</td>
                    <td>{$data->getCoder()}</td>
                    <td>{$data->getTopic()}</td>
                    <td class='myTyme'>{$data->getTimeDate()}</td>
                    <td>
                        <a href='?action=edit&id={$data->getId()}'>Edit</a>
                        <a href='?action=delete&id={$data->getId()}'>Delete</a>
                    </td>
                </tr>";  
        }
        ?>
        </tbody>
    </table>
    </div>

        <div class="btn">
            <a class="create" href="?action=create" > Nueva Cita </button></a>
            
        </div>
    
    

</body>
</html>