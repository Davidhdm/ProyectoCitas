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
        <tr>
            <th>Coder</th>
            <th>Topic</th>
            <th>Mytime</th>
        </tr>
        
        <?php
        
        echo $result [0]->getCoder();
        foreach($result as $coder){



        echo "


        <tr> 
            <td>
            { $coder->getCoder()}
            </td>
            
            <td>
        
            </td>
        
            <td> 
        
            </td>

            <td> 
            
                
            </td>


        </tr>
        ";
        
        }
        ?>


    </table>

    <a href="?action=create"><button type="button"> Nueva Cita </button></a>
    
</body>
</html>