<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Meeting Lista</title>
</head>
<body>

<div style="display:block">
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Coder</th>
            <th>Topic</th>
            <th>Created at</th>
        </thead>
        <tbody>
        <?php
        
        foreach ($result as $data){
            echo "<tr>
                    <td>{$data->getId()}</td>
                    <td>{$data->getCoder()}</td>
                    <td>{$data->getTopic()}</td>
                    <td>{$data->getTimeDate()}</td>
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

    <a href="?action=create"><button type="button"> Nueva Cita </button></a>
</body>
</html>