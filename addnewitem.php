<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>Add New Items</title>
</head>
<style>
h1
    {
        color:white;
        text-align: center;
        font-size: 50px;
        font-weight: bold;
        margin-bottom: 100px;
        padding: 20%;
        font-family: fantasy;
        background-image:url('marvel.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        opacity:100%;
        box-shadow: 5px 5px 2px rgba(131, 8, 8, 0.5);
    }
    body {
        background:linear-gradient(to left, #ee7724, #d8363a, #dd3675, #b44593); 
       
    }
    </style>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "navigation.php";?>
        </div>
    </div>
    <?php
        /* Create Connections */
        try
        {
            $conn = new PDO("mysql:host=localhost;dbname=ritik", "root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /* Prepare Connections */
            $stmt=$conn->prepare("insert into shop(iname,munit,mrp,sprice) values(:iname,:munit,:mrp,:sprice)");

        /* Bind Values to Statements */
            $stmt->bindValue(':iname', $_GET['iname']);
            $stmt->bindValue(':munit', $_GET['munit']);
            $stmt->bindValue(':mrp', $_GET['mrp']);
            $stmt->bindValue(':sprice', $_GET['sprice']);
            
        /* Execute statement */
            $stmt->execute();

           
            echo '<h1 class="animate__animated animate__lightSpeedInRight animate__infinte">Items Added Successfully.</h1>';
                
        }
        catch(Exception $ex)
        {
            echo "<h1>". $ex->getMessage()."</h1>";

        }
    ?>    
</body>
</html>