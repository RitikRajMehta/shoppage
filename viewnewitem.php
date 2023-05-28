<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>View New Items</title>
</head>
<style>
h1
    {
        color:white;
        text-align: center;
        font-size: 50px;
        font-weight: bold;
        margin-bottom: 20px;
        padding: 10px;
        font-family: fantasy;
        background-size: cover;
        background-repeat: no-repeat;
        opacity:100%;
        box-shadow: 5px 5px 2px rgba(131, 8, 8, 0.5);
    }
    body {
        background:linear-gradient(to left, #ee7724, #d8363a, #dd3675, #b44593); 
       
    }
    tr{
        color:white;
        font-weight: bold;
        font-family:cursive;
    }
     thead{
        background-color: black;
        width: 100%;
     }
    </style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php include "navigation.php";?>
            </div>
        </div>
        <h1>View All Items</h1>
     <?php
        /*Create Connection*/
        $conn=new PDO("mysql:host=localhost;dbname=ritik;","root","");

        /*preapre statement*/
        $stmt=$conn->prepare("select * from shop");
        
        //Execute statement
        $stmt->execute();
    
        //Fetch record
        $shops=$stmt->fetchAll();
     ?>
      <table class="table table-hover" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Items Name</th>
                    <th>Measurement Unit</th>
                    <th>MRP</th>
                    <th>Selling Price</th>
                </tr>    
            </thead>        
            <?php
                foreach( $shops as $shop )
                {
                    echo "<tr><td>".$shop['id']."</td><td>".$shop['iname']."</td><td>".$shop['munit']."</td><td>".$shop['mrp']."</td><td>".$shop['sprice']."</td></tr>.";
                }  
            ?> 
     </table>
    </div>   
</body>
</html>