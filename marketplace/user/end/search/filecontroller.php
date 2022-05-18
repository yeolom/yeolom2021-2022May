<?php

include "../../../model/model.php";
include "../../../db/header.php";
session_start();






if(isset($_POST['paySubmit']))
{
    $title = $_SESSION['productName'];
    If($_SESSION['productPrice'] == 0){
    mysqli_close($conn);
    header("Location:process.php");
    exit();
    }else{
    $amount = $_SESSION['productPrice'] + 150;
    //echo $amount;
    }
    $name = "Unknown";
    //echo $name;
    

    //* Prepare our rave request
    $request = [
        'tx_ref' => time(),
        'amount' => $amount,
        'currency' => 'NGN',
        'payment_options' => 'card',
        'redirect_url' => 'https://yeolom.com/marketplace/user/end/search/process.php',
        'customer' => [
            'email' => 'unknown@yeolom.com',
            'name' => $name
        ],
        'meta' => [
            'price' => $amount
        ],
        'customizations' => [
            'title' => 'Paying for '.$title,
            'description' => "Product from Yeolom's MarketPlace."
        ]
    ];

    //* Ca;; f;iterwave emdpoint
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($request),
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer FLWSECK-a3892371beb6a43122ceeb30db3288b2-X',
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    
    $res = json_decode($response);
    print_r($res);
    if($res->status == 'success')
    {
        $link = $res->data->link;
        mysqli_close($conn);
        header('Location: '.$link);
    }
    else
    {
        echo 'We can not process your payment';
    }
}