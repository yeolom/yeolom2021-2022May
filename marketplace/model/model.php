<?php

function logOut(){
    session_destroy();
}

function getRelatedProducts($conn,$searched){
    //this class method is for signing up the user.
    $sql_stmt = mysqli_stmt_init($conn);

    $sql_to_check_availability = "SELECT * FROM `products` WHERE `title` REGEXP(\"$searched\");";

    if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){        
        //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
        mysqli_stmt_execute($sql_stmt);
        //The below is for checking if there was error.
        //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

        $result = mysqli_stmt_get_result($sql_stmt);
        $resultReturned  = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";
        
        if(mysqli_num_rows($result) == 0){
            return "no product";
        }else{
            return $resultReturned;
        }
    }else{
        echo "The SQL command to get total users didn't work.";
    }
}


function getTotalUsers($conn){
    //this class method is for signing up the user.
    $sql_stmt = mysqli_stmt_init($conn);
   
    $sql_to_check_availability = "SELECT `firstName` FROM `users` WHERE 
    (typeUser = 'end');";

    if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
            
        
        //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
        mysqli_stmt_execute($sql_stmt);
        //The below is for checking if there was error.
        //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

        $result = mysqli_stmt_get_result($sql_stmt);
        $resultReturned  = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";
        return mysqli_num_rows($result);
    }else{
        echo "The SQL command to get total users didn't work.";
    }
}


function addProduct($sourceId, $title, $desc, $date, $price, $actualFileName, $conn){
    $sql_cmd = "INSERT INTO `products`(`sourceId`, `title`, `description`, `date`, `price`,`actualFileName`) 
    VALUES (?,?,?,?,?,?);";

    $sql_stmt =  mysqli_stmt_init($conn);

    //
    if(mysqli_stmt_prepare($sql_stmt, $sql_cmd)){
        mysqli_stmt_bind_param($sql_stmt,"ssssss",$sourceId, $title, $desc, $date, $price, $actualFileName);

        mysqli_stmt_execute($sql_stmt);
       //echo("The returned for inserting is..".mysqli_stmt_execute($sql_stmt)."<br/>");//The error is here.
       if(mysqli_stmt_error($sql_stmt) != NULL){
           echo("The error for inserting is..".mysqli_stmt_error($sql_stmt));//The error is here.    
  //      return "failed";
       } else{
//           return "success";
       }
       //echo("The error for inserting is..".mysqli_stmt_error($sql_stmt));//The error is here.
       
    }else{
        //echo("The error for inserting is..".mysqli_stmt_error($sql_stmt));//The error is here.    
  
        echo "The SQL command to Add data didn't work.";
        echo "<br/>";
        
    }
}



function getAuthor($id, $conn){
    //this class method is for signing up the user.
    $sql_stmt = mysqli_stmt_init($conn);
   
    $sql_to_check_availability = "SELECT `firstName`, `lastName` FROM `users` WHERE 
    (userId = ?);";

    if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
        mysqli_stmt_bind_param($sql_stmt,"s",$id);
            
        //Use the echo to check for variable content, or for debugging.
        
        //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
        mysqli_stmt_execute($sql_stmt);
        //The below is for checking if there was error.
        //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

        $result = mysqli_stmt_get_result($sql_stmt);
        $resultReturned  = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

        if(mysqli_num_rows($result) == 0){
            return "No author";
        }else{
            //print_r($resultReturned);
            $firstName = $resultReturned[0]["firstName"];
            $lastName = $resultReturned[0]["lastName"];
            $author = "$firstName  $lastName";
            return $author;
        }
    }else{
        echo "The SQL command to check if user exist doesn't work.";
    }
}

function getfile($id, $conn){
        //this class method is for signing up the user.
        $sql_stmt = mysqli_stmt_init($conn);
    
        $sql_to_check_availability = "SELECT * FROM `products` WHERE 
        (productid = ?);";

        if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
            mysqli_stmt_bind_param($sql_stmt,"s",$id);
                
            //Use the echo to check for variable content, or for debugging.
            
            //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
            mysqli_stmt_execute($sql_stmt);
            //The below is for checking if there was error.
            //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

            $result = mysqli_stmt_get_result($sql_stmt);
            
            //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

            if(mysqli_num_rows($result) == 0){
                return "no file";
            }else{
                $returnData = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $returnData;
            }
        }else{
            echo "The SQL command to check get file data exist doesn't work.";
        }
    }



function checkIfUserExist($email, $phoneNumber, $conn){
        //this class method is for signing up the user.
        $sql_stmt = mysqli_stmt_init($conn);
       
        $sql_to_check_availability = "SELECT * FROM `users` WHERE 
        (phoneNumber = ?) OR (email = ?);";

        if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
            mysqli_stmt_bind_param($sql_stmt,"ss",$phoneNumber,$email);
                
            //Use the echo to check for variable content, or for debugging.
            
            //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
            mysqli_stmt_execute($sql_stmt);
            //The below is for checking if there was error.
            //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

            $result = mysqli_stmt_get_result($sql_stmt);
            
            //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

            if(mysqli_num_rows($result) == 0){
                return "available";
            }else{
                return "exist";
            }
        }else{
            echo "The SQL command to check if user exist doesn't work.";
        }
    }

function checkIfUserExistUsingEmail($email, $conn){
        //this class method is for signing up the user.
        $sql_stmt = mysqli_stmt_init($conn);
       
        $sql_to_check_availability = "SELECT * FROM `users` WHERE 
        (email = ?);";

        if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
            mysqli_stmt_bind_param($sql_stmt,"s",$email);
                
            //Use the echo to check for variable content, or for debugging.
            
            //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
            mysqli_stmt_execute($sql_stmt);
            //The below is for checking if there was error.
            //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

            $result = mysqli_stmt_get_result($sql_stmt);
            
            //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

            if(mysqli_num_rows($result) == 0){
                return "none";
            }else{
                return "exist";
            }
        }else{
            echo "The SQL command to check if data exist doesn't work.";
        }
    }

function addUser($firstName, $lastName, $typeUser, $phoneNumber, $email, $password, $conn){
        $sql_cmd = "INSERT INTO `users`(`firstName`, `lastName`, `typeUser`, `phoneNumber`, `email`, `password`) 
        VALUES (?,?,?,?,?,?);";

        $sql_stmt =  mysqli_stmt_init($conn);

        //
        if(mysqli_stmt_prepare($sql_stmt, $sql_cmd)){
            mysqli_stmt_bind_param($sql_stmt,"ssssss",$firstName, $lastName, $typeUser, $phoneNumber, $email, $password);

            mysqli_stmt_execute($sql_stmt);
           //echo("The returned for inserting is..".mysqli_stmt_execute($sql_stmt)."<br/>");//The error is here.
            //echo("The error for inserting is..".mysqli_stmt_error($sql_stmt));//The error is here.
           
        }else{
            echo "The SQL command to check if data exist doesn't work.";
            
        }
    }

function getUserLoginDetails($email, $conn){
        //this class method is for signing up the user.
        $sql_stmt = mysqli_stmt_init($conn);
    
        $sql_to_check_availability = "SELECT * FROM `users` WHERE 
        (email = ?);";

        if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
            mysqli_stmt_bind_param($sql_stmt,"s",$email);
                
            //Use the echo to check for variable content, or for debugging.
            
            //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
            mysqli_stmt_execute($sql_stmt);
            //The below is for checking if there was error.
            //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

            $result = mysqli_stmt_get_result($sql_stmt);
            
            //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

            if(mysqli_num_rows($result) == 0){
                return "no user";
            }else{
                $returnData = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $returnData;
            }
        }else{
            echo "The SQL command to check if data exist doesn't work.";
        }
    }

function getLatestUpload($conn){
        $sql_stmt = mysqli_stmt_init($conn);
    
        $sql_to_check_availability = "SELECT * FROM `products` ORDER BY `date` desc;";

        if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
          //Use the echo to check for variable content, or for debugging.
            
            //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
            mysqli_stmt_execute($sql_stmt);
            //The below is for checking if there was error.
            //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

            $result = mysqli_stmt_get_result($sql_stmt);
            
            //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

            if(mysqli_num_rows($result) == 0){
                return "no user";
            }else{
                $returnData = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $returnData;
            }
        }else{
            echo "The SQL command to get latest data exist doesn't work.";
        }
    }

    // function getfileDetails($id,$conn){
    //     $sql_stmt = mysqli_stmt_init($conn);
    
    //     $sql_to_check_availability = "SELECT `title`, `description`, `price` FROM `products` 
    //     WHERE (`productid` = $id);";

    //     if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
    //       //Use the echo to check for variable content, or for debugging.
            
    //         //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
    //         mysqli_stmt_execute($sql_stmt);
    //         //The below is for checking if there was error.
    //         //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

    //         $result = mysqli_stmt_get_result($sql_stmt);
            
    //         //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

    //         if(mysqli_num_rows($result) == 0){
    //             return "no file.";
    //         }else{
    //             $returnData = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //             return $returnData;
    //         }
    //     }else{
    //         echo "The SQL command to getfile details exist doesn't work.";
    //     }
    // }
?>