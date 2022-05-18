<?php
//Include Statements
  include("../../../session.php");
  include("../../../db/header.php");
  include("../../../model/model.php");

if(isset($_POST["uploadpdfSubmit"])){
//Get data from global variables.

    $userId = $_SESSION["uid"];

    $title = $_POST["title"];
    $price = $_POST["price"];
    $desc = strval($_POST["description"]);
    //$file = $_FILES["file"];
    
    $today_date = date("Y-m-d");
    $today_date = strval($today_date);
    echo "The file stuff is: ";
    echo "<br/>";
    print_r($_FILES["fileToUpload"]);
    echo "<br/>";
    //echo $title;
    //echo $desc;
    echo "<br/>";

//Get target directory.
    // $dirTonow = dirname( dirname(__FILE__) );
    // $directories = explode("\\", $dirTonow);
    // //print_r($directories);
    // $targetDir = "$directories[0]\\pdf\\$userId";
    
    //Since it is a linux system, no need for the above.
    $targetDir = "/home/yeolomco/pdf/$userId";
    echo $targetDir;
    echo "<br/>";

//Check if file is too big.
    if($_FILES["fileToUpload"]["size"]>2000000){
        mysqli_close($conn);
           
        header("Location:index.php?returned=too");
        exit();
    }

//Get file extension.
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $fileNameExploded = explode(".", $fileName);
    $fileExt = $fileNameExploded[1];
    //$allowedExt = array("pdf","jpg");
    $allowedExt = array("pdf");

//Check if file exist.
    if(file_exists($targetDir.$fileName)){
        mysqli_close($conn);
           
        header("Location:index.php?returned=alreadyexist");
        exit();
    }else if(!(file_exists($targetDir))){
        echo "does not exist.";
        echo "<br/>";
        mkdir($targetDir);
    }

//Check if the file ext is in the array.
    if(in_array($fileExt,$allowedExt)){
            
//Move the file to the target directory.
        //$targetDir = $targetDir.$fileName;
                
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"$targetDir/$fileName")){
            echo "Upload Successfully.";
            addProduct($userId, $title, $desc, $today_date, $price, $fileName,$conn);
            mysqli_close($conn);
           
            header("Location:index.php?returned=success");
            exit();
            
        } else if ($_FILES["fileToUpload"]["error"] = 4){
          
        echo "Failed to upload file.";
        echo "<br/>";
        
        echo "Error = ".$_FILES["fileToUpload"]["error"];
        }else{
            //echo "Error = ".$_FILES["fileToUpload"]["error"];
            mysqli_close($conn);
           
            header("Location:index.php?returned=failed");
            exit();
        }


    }else{
        mysqli_close($conn);
           
        header("Location:index.php?returned=notpdf");
        exit();
    }

}else{
    mysqli_close($conn);
           
    header("Location:index.php");
    exit();
}


        
        


        
        

             
        
            

        // $fileToUpload = $targetDir . basename($_FILES["fileToUpload"]["name"]);
        // $fileType = strtolower(pathinfo($fileToUpload,PATHINFO_EXTENSION));


        // if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetDir."$fileNewName.csv")){
        //     header("Location:index.php?status=success");
        //     exit();   
        // }else if ($_FILES["fileToUpload"]["error"] = 4){
        //     header("Location:index.php?status=nofile");
        // }else{
        //     //echo "Error = ".$_FILES["fileToUpload"]["error"];
        //     header("Location:index.php?status=failed");
        // }

    
   
?>