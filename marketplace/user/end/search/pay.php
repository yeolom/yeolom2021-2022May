<?php
include "../../../model/model.php";
include "../../../db/header.php";
session_start();
if(isset($_GET['id'])){

    $id = $_GET['id'];

    $fileInfo = getfile($id,$conn);
    $_SESSION['pid'] = $id;

   // print_r($fileInfo);
}else{
    mysqli_close($conn);
           
    header("Location:index.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.1.0-dist\css\bootstrap.min.css"/>

    <title>MARKETPLACE PAY</title>
</head>
    <body>
        
    
    <br/>

    
     <!--FORM-->

     <?php
        //Variables:
        $title = $fileInfo[0]["title"];
        $disc = $fileInfo[0]["description"];
        $price = $fileInfo[0]["price"];
        //echo(gettype($price));
        //echo $price;
        $_SESSION['productPrice'] = $price;
        $_SESSION['productName'] = $title;

        echo "<div class=\"alert alert-success\" role=\"alert\"><span><strong>We add 150NGN per transactions. Service Charge, Payment Gateway adds Thiers.</strong></span></div>";
           
?>
    
     <div class="container">
        <form action="filecontroller.php" method="post">
            <div class="form-group">
                    <label>Title:</label>
                    <p name = "title"><?php echo $title; ?><p>
                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with abyone else.</small>--->
                    
            </div>
            <div class="form-group">
                <label>Description:</label>
                <p name = "disc"><?php echo $disc; ?><p>
                
            </div>
            
            <div class="form-group">
                <label>Price:</label>
                <p name = "price"><?php 
                //echo $price;
            
                if($price != 0.00){
                    $price = $price + 150;
                }  
                echo $price; ?><p>
            </div>
            
<br/>
<?php 
if($price != 0){ 
    echo "<input type = \"submit\" name = \"paySubmit\" class=\"btn btn-primary\"  value = \"NEXT STEP\"/>";
}else{
    echo "<input type = \"submit\" name = \"paySubmit\" class=\"btn btn-primary\"  value = \"DOWNLOAD NOW!!\"/>";
} 
mysqli_close($conn);
           
?>

<!--<button type="submit" name="addStudentSubmit" class="btn btn-primary">ADD STUDENT</button>-->
</form>

</div>

</body>