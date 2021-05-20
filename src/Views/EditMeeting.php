<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <div class="container">    
        <form action='?action=update&id=<?php echo "{$meetingEdit->getId()}" ?>' method="post">
            <input type="text" name="coder" required value="<?php echo "{$meetingEdit->getCoder()}"?>">
            <input type="text" name="topic" required value="<?php echo "{$meetingEdit->getTopic()}"?>">
            
            <input class="btn btn-success" type="submit" value="Edit Meeting">
            <input class="btn btn-warning" type="reset" value= "Reset">
            <a class="btn btn-danger" href="?action=index">Cancel Editing</a>
        </form>
    </div>
</body>
</html>
