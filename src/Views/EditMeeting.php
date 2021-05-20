<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/Css/editStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="container">    
        <form action='?action=update&id=<?php echo "{$meetingEdit->getId()}" ?>' method="post">
            <input type="text" name="coder" required value="<?php echo "{$meetingEdit->getCoder()}"?>">
            <input type="text" name="topic" required value="<?php echo "{$meetingEdit->getTopic()}"?>">
            
            <input class="button btn_1" type="submit" value="Edit Meeting">
            <input class="button btn_2" type="reset" value= "Reset">
            <a href="?action=index">Cancel Editing</a>
        </form>
    </div>
</body>
</html>
