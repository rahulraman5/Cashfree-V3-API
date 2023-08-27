<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> <!--/* https://cdnjs.com/libraries/font-awesome */-->

    <title>V3 API</title>
</head>

<body style="background-color: #FFFFFF; color:black !important;">
    <?php 

   $orderid = $_REQUEST['order_id'];
   $url = "https://sandbox.cashfree.com/pg/orders/$orderid/payments";

   $ch = curl_init();

   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, "$url");
   curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2000);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   curl_setopt(
    $ch,
    CURLOPT_HTTPHEADER,
    array(
        'Accept: application/json',
        'x-api-version: 2022-09-01',
        'Content-Type: application/json',
        'x-client-id: 5709a0de3cc1ab6452f8d0309075',
        'x-client-secret:a45d1caef2943ae5bc7b4597ccc58aa103163781'
    )
   );

   $results = curl_exec($ch);
   $returnCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
   curl_close($ch);
   $resps= json_decode($results, true);
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <table class=" table table-bordered ">
            <tr>
                <th >Order ID</th>
                <th>Payment Status</th>
                <th>Payment Id </th>
            </tr>
            <tr>
                <td><?php echo $orderid; ?></td>
                <td><?php echo $resps[0]['payment_status']; ?></td>
                <td><?php echo $resps[0]['cf_payment_id']; ?></td>
            </tr>
        </table>
        </div>
    </div>
</div>


<?php if ($resps[0]['payment_status'] != 'SUCCESS') { ?>
    <div class="alert" role="alert">
        <h3 style='text-align:center !important;margin-top:50px;'><i class="fa-sharp fa-solid fa-circle-xmark fa-bounce fa-xl" style="color: #f22b07;"></i>Payment Failed</h3>
    </div>
<?php } else { ?>
    <div class="alert" role="alert">
        <h3 style='text-align:center !important;margin-top:50px;'><i class="fa-sharp fa-solid fa-check fa-bounce fa-xl" style="color: #11ff00;"></i></i>Payment Successful</h3>
    </div>
<?php } ?>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>