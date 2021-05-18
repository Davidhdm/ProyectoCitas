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
       
       <?php
        
        foreach ($result as $data){
            echo $data->getCoder();

        }

?>


    </table>
    </div>

    <a href="?action=create"><button type="button"> Nueva Cita </button></a>
<<<<<<< HEAD
    <a href="?action=delete"><button type="button"> Borrar Cita </button></a>
     
=======
>>>>>>> a459e9b098ed24a1f6874772e99f2c061a3fe570
    
</body>
</html>