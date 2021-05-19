<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>linea 10 del edit.php</p>
    <?php print_r($meetingEdit) ?>
    <?php echo $meetingEdit[0]->getId() ?>
    <div class="container">    
        <form action='?action=update&id=<?php echo $data["coder"]->getId() ?>' method="post">
            <input type="text" name="coder" required value="<?php echo $meetingCoder?>">
            <input type="text" name="topic" required value="<?php echo $meetingTopic?>">
            <input type="submit" value="Editar cita" >
            <input type="reset" value="Cancelar edición">
        </form>
    </div>
</body>
</html>
