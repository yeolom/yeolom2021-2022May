<?php

function insertProduct($sourceId, $conn, $title, $description, $date, $file, $tmpFile, $price){
    $sqlCmd = "
    INSERT INTO `products`(`sourceId`, `title`, `description`, `date`, `file`, `price`) 
    VALUES ($sourceId,'$title','$description','".$date."','$file',$price);";

    echo "<br/>";
    echo $sqlCmd;
    //$sqlStmt = mysqli_stmt_init($conn);
    $main_exec_state = mysqli_query($conn, $sqlCmd);
    echo "<br/>". $main_exec_state;
    if($main_exec_state == TRUE){
        echo "Successfully insert of data INfo";
        return "success";
    }else{
        echo "Unsuccessful insert of Data Info <br/>";
        print_r(mysqli_error($conn));
        return "failed";
    }


}