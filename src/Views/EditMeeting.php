<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">    
        <form action="?action=update" method="post">
            <input type="text" name="coder" required placeholder="<?php echo $meetingCoder?>">
            <input type="text" name="topic" placeholder="<?php echo $meetingTopic?>">
            <input type="submit" value="Editar cita" >
            <input type="reset" value="Cancelar edición">
        </form>
    </div>
</body>
</html>