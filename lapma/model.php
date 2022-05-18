<?php


function getLatestTitles($conn){
    $sql_stmt = mysqli_stmt_init($conn);

    $sql_to_check_availability = "SELECT * FROM `titles` ORDER BY `date` desc;";

    if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
      //Use the echo to check for variable content, or for debugging.
        
        //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
        mysqli_stmt_execute($sql_stmt);
        //The below is for checking if there was error.
        //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

        $result = mysqli_stmt_get_result($sql_stmt);
        
        //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

        if(mysqli_num_rows($result) == 0){
            return "no title";
        }else{
            $returnData = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $returnData;
        }
    }else{
        echo "The SQL command to get latest title doesn't work.";
    }
}


function getTitle($conn, $titleID){
    $sql_stmt = mysqli_stmt_init($conn);

    $sql_to_check_availability = "SELECT * FROM `titles` WHERE (`titleId` = $titleID);";

    if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
      //Use the echo to check for variable content, or for debugging.
        
        //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
        mysqli_stmt_execute($sql_stmt);
        //The below is for checking if there was error.
        //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

        $result = mysqli_stmt_get_result($sql_stmt);
        
        //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

        if(mysqli_num_rows($result) == 0){
            return "no title";
        }else{
            $returnData = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $returnData;
        }
    }else{
        echo "The SQL command to get latest title doesn't work.";
    }
}


function getTitleImgs($conn, $titleID){
    $sql_stmt = mysqli_stmt_init($conn);

    $sql_to_check_availability = "SELECT * FROM `titleimg` WHERE (`titleId` = $titleID);";

    if(mysqli_stmt_prepare($sql_stmt, $sql_to_check_availability)){
      //Use the echo to check for variable content, or for debugging.
        
        //echo("<br/>The returned number for checking DB is..".mysqli_stmt_execute($sql_stmt)."<br/>");
        mysqli_stmt_execute($sql_stmt);
        //The below is for checking if there was error.
        //echo "<br/>The error for cheking the data was...".mysqli_stmt_error($sql_stmt)."<br/>";

        $result = mysqli_stmt_get_result($sql_stmt);
        
        //echo " The number of rows are ..".mysqli_num_rows($result)."<br/>";

        if(mysqli_num_rows($result) == 0){
            return "no img for title";
        }else{
            $returnData = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $returnData;
        }
    }else{
        echo "The SQL command to get latest title doesn't work.";
    }
}


?>