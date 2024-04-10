<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Construct an array containing submitted data
    $data = array(
        'productName' => $_POST['productName'], // Retrieve product name from form submission
        'quantity' => $_POST['quantity'], // Retrieve quantity from form submission
        'price' => $_POST['price'], // Retrieve price from form submission
        'dateTime' => date('Y-m-d H:i:s') // Add current date and time
    );

    // Read existing JSON data from file
    $jsonData = file_get_contents('data.json');
    // Decode JSON data into PHP array
    $jsonArray = json_decode($jsonData, true);
    // Add new data to the array
    $jsonArray[] = $data;
    // Encode the updated array back to JSON format
    $jsonData = json_encode($jsonArray);
    // Write the JSON data back to the file
    file_put_contents('data.json', $jsonData);
}
?>
