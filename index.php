<script src="https://sdk.cashfree.com/js/ui/2.0.0/cashfree.sandbox.js"></script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];

    // Prepare order data for API request
    $order_data = array(
        "order_id" => "order_" . time(),
        "order_amount" => $product_price,
        "order_currency" => "INR",
        "order_note" => "Additional order info",
        "customer_details" => array(
            "customer_id" => "12345",
            "customer_name" => "name",
            "customer_email" => "care@cashfree.com",
            "customer_phone" => "9816512345"
        ),
        'order_meta'=> array(
            'return_url' => 'http://localhost:7882/Project1/success.php?order_id={order_id}',
            'notify_url' => 'https://eodw0819y97f3bz.m.pipedream.net',
            'payment_methods' =>'' 
        )
    );

    // Make cURL POST request to the API
    $ch = curl_init("https://sandbox.cashfree.com/pg/orders");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($order_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "x-api-version: 2022-09-01",
        "x-client-id: 5709a0de3cc1ab6452f8d0309075",
        "x-client-secret: a45d1caef2943ae5bc7b4597ccc58aa103163781"
    ));

    $response = curl_exec($ch); // Capture the response here
    curl_close($ch);

    // Handle the API response as needed
    echo $response; // You can optionally echo this response, but you're not using it in this script

    // Decode the response after capturing it
    $response_data = json_decode($response, true);
    $payment_session_id = $response_data['payment_session_id'];
}
?>

<script>
const paymentSessionId = "<?php echo $payment_session_id; ?>"; // PHP variable with payment session ID
const cf = new Cashfree(paymentSessionId);

// Function to redirect to checkout
function redirectToCheckout() {
    cf.redirect();
}

// Call the function to initiate redirection
redirectToCheckout();
</script>
