$(document).ready(function(){
    // Function to calculate total value
    function calculateTotal(quantity, price) {
        return quantity * price; // Calculate total value by multiplying quantity and price
    }

    // Function to update table
    function updateTable() {
        $.ajax({
            url: 'data.json', // Path to the JSON file containing product data
            dataType: 'json', // Specify data type as JSON
            success: function(data) {
                $('#productTableBody').empty(); // Clear the table body
                var totalValue = 0; // Initialize total value variable
                // Loop through each item in the JSON data
                $.each(data, function(index, item) {
                    // Calculate total value for each item
                    var total = calculateTotal(item.quantity, item.price);
                    // Add current total value to overall total
                    totalValue += total;
                    // Append a new row to the table with product details
                    $('#productTableBody').append('<tr><td>' + item.productName + '</td><td>' + item.quantity + '</td><td>' + item.price + '</td><td>' + item.dateTime + '</td><td>' + total + '</td><td><button class="btn btn-info btn-sm editBtn" data-id="' + index + '">Edit</button></td></tr>');
                });
                // Display total value below the table
                $('#totalValue').text('Total Value: ' + totalValue);
            }
        });
    }

    // Update table on page load
    updateTable();

    // Form submission via Ajax
    $('#productForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        var formData = $(this).serializeArray(); // Serialize form data
        // Send form data to PHP file for processing via Ajax
        $.ajax({
            url: 'submit.php', // PHP file to handle form submission
            type: 'POST', // HTTP request method
            data: formData, // Form data to be sent
            success: function(response) {
                updateTable(); // Update table with new data
                $('#productForm')[0].reset(); // Reset form fields
            }
        });
    });
});
