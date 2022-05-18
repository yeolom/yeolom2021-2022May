<?php 

include "../../../model/model.php";
include "../../../db/header.php";
session_start();


function download($sourceId, $actualName){
    //Get target directory.
    //  $dirTonow = dirname( dirname(__FILE__) );
    //  $directories = explode("/", $dirTonow);
    //print_r($directories);
    // $targetDir = "$directories[0]\\pdf\\$sourceId\\$actualName";
    
    
    $targetDir = "/home/yeolomco/pdf/$sourceId/$actualName";
    echo $targetDir;
    echo "<br/>";


    if(file_exists($targetDir)){
        header("Content-Description: File Transfer");
        header("Content-Type: application/pdf");
        header("Content-Disposition: attachment; filename = ".basename($targetDir));
        header("Content-Transfer-Encoding: binary");
        header("Expires: 0");
        header("Content-Length:".filesize($targetDir));
        ob_clean();
        flush();
        readfile($targetDir);

        mysqli_close($conn);
           
        exit;

    }
}

//Get data from Session.

$title = $_SESSION['productName'];
$amount = $_SESSION['productPrice'];
$email = $_SESSION["email"];
$name = $_SESSION["firstname"];
$id = $_SESSION['pid'];

$fileInfo = getfile($id,$conn);


$price = $fileInfo[0]["price"];
$actualName = $fileInfo[0]["actualFileName"];

$sourceId = $fileInfo[0]["sourceId"];


if($price == 0){

    download($sourceId, $actualName);
    echo "Download Successful";
    echo "<script>setTimeout(\"location.href = 'https://yeolom.com/marketplace/user/end/search/';\",1500);</script>";
    exit();
}



    
       
        
    if(isset($_GET['status']))
    {
        //* check payment status
        if($_GET['status'] == 'cancelled')
        {
             echo 'You cancel the payment';
            mysqli_close($conn);
               
            echo "<script>setTimeout(\"location.href = 'https://yeolom.com/marketplace/user/end/search/';\",1500);</script>";
            //header('Location: index.php');
        }
        elseif($_GET['status'] == 'successful')
        {
            $txid = $_GET['transaction_id'];

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Content-Type: application/json",
                  "Authorization: Bearer FLWSECK-a3892371beb6a43122ceeb30db3288b2-X"
                ),
              ));
              
              $response = curl_exec($curl);
              
              curl_close($curl);
              
              $res = json_decode($response);
              if($res->status)
              {
                $amountPaid = $res->data->charged_amount;
                $amountToPay = $res->data->meta->price;
                if($amountPaid >= $amountToPay)
                {
                    echo 'Payment successful';
                    
                    download($sourceId, $actualName);
                    mysqli_close($conn);
           

                    echo "<script>setTimeout(\"location.href = 'https://yeolom.com/marketplace/user/end/search/';\",1500);</script>";

                    //* Continue to give item to the user
                }
                else
                {
                    mysqli_close($conn);
           
                    echo 'Fraud transaction detected';
                }
              }
              else
              {
                  mysqli_close($conn);
           
                  echo 'Can not process payment';
              }
        }
    }else{
        mysqli_close($conn);
           
        logOut();
    }