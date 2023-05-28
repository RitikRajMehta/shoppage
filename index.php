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

    <title>Shop</title>
</head>
<style>
    body 
    {
        background-image:url('shop2.jpg');
        background-size: cover;
    }
    label
    {
        color:white;
        padding: 10px;
        text-align: center;
        margin: auto;
    }
    h1
    {
        color:white;
        text-align: center;
        font-size: 50px;
        font-weight: bold;
        margin-bottom: 20px;
        padding: 10px;
        font-family: fantasy;
        background-image:url('shop2.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        opacity:100%;
        box-shadow: 5px 5px 2px rgba(131, 8, 8, 0.5);
    }
    .form-control{
        margin-bottom: 20px;
        padding: 10px;
        font-size: 25px;
        font-weight: bold;
        border: 1px solid;
        border-radius: 2px;
    }
</style>
<body>
   <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
          <?php include 'navigation.php';?>     
          </div>
        </div>
        <h1><u>Shopping Store</u></h1>
        <form action="addnewitem.php" method="get">
           <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4"><br/>
                    <label class="form lable"><b>Item Name:</b></label><input type="text" required name="iname" placeholder="Enter Item Name" class="form-control"/>
                    <label class="form label"><b>Measurement Unit:</b></label><input type="text"  required name="munit" placeholder="Enter Unit" class="form-control"/>
                    <label class="form lable"><b>MRP:</b></label><input type="text" required name="mrp" placeholder="Enter Amount" class="form-control"/>
                    <label class="form label"><b>Selling Price:</b></label><input type="text"  required name="sprice" placeholder="Enter Amount" class="form-control"/>
                    <input class="btn btn-danger" type="reset" name="Reset"/>
                    <input class="btn btn-success" type="Submit" name="Submit" value="Submit"/>
                </div>
                <div class="col-sm-4"></div>
          </div>
         </div>
      </form>
    </div>
</body>
</html>