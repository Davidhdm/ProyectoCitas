<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/Css/createStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="container">    
        <form action="?action=store" method="post">
            <h1>Insert Your Date Here</h1>
            <div class="inputData">
            <div class="insertData">
                <input type="text" name="coder" required placeholder="Name">
                <input type="text" name="topic" required placeholder="Topic">
                
            </div> 
            <div class="btnData">
                <input  type="submit" value="Create New Meeting" >
                <input  type="reset"  value="Reset">
                <button><a href="?action=index">Cancel Meeting</a></button>
            </div>
            
            </div>
            
            

        </form>
    </div>
</body>
</html>