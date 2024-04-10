<?php
// Read the JSON file content
$jsonData = file_get_contents('data.json');
// Decode the JSON data into an array
$dataArray = json_decode($jsonData, true);

// Loop through each item in the array to display them in table rows
foreach ($dataArray as $index => $item) { // Initialize $index variable here
    // Output table row with product details
    echo '<tr>';
    echo '<td>' . $item['productName'] . '</td>'; // Product Name column
    echo '<td>' . $item['quantity'] . '</td>'; // Quantity column
    echo '<td>' . $item['price'] . '</td>'; // Price column
    echo '<td>' . $item['dateTime'] . '</td>'; // Date Time Submitted column
    // Calculate and display total value column
    echo '<td>' . ($item['quantity'] * $item['price']) . '</td>';
    echo '<td><button class="btn btn-info btn-sm editBtn" data-id="' . $index . '">Edit</button></td>'; // Action column
    echo '</tr>';
}
?>
