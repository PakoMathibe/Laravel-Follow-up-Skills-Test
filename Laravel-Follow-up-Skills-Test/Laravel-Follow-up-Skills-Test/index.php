<!DOCTYPE html> <!-- Defines the document type -->
<html lang="en"> <!-- Specifies the language of the document -->
<head>
    <meta charset="UTF-8"> <!-- Sets the character encoding for the document to UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configures the viewport settings for better mobile responsiveness -->
    <title>Product Management</title> <!-- Sets the title of the page -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Links to Bootstrap CSS -->
</head>
<body>
    <div class="container"> <!-- Creates a Bootstrap container -->
        <h1>Product Management</h1> <!-- Heading for the page -->
        <form id="productForm"> <!-- Form for inputting product data -->
            <div class="form-group"> <!-- Group for product name input -->
                <label for="productName">Product Name</label> <!-- Label for product name input -->
                <input type="text" class="form-control" id="productName" name="productName"> <!-- Text input for product name -->
            </div>
            <div class="form-group"> <!-- Group for quantity input -->
                <label for="quantity">Quantity in Stock</label> <!-- Label for quantity input -->
                <input type="number" class="form-control" id="quantity" name="quantity"> <!-- Number input for quantity -->
            </div>
            <div class="form-group"> <!-- Group for price input -->
                <label for="price">Price per Item</label> <!-- Label for price input -->
                <input type="number" class="form-control" id="price" name="price"> <!-- Number input for price -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> <!-- Submit button for the form -->
        </form>
        <br>
        <table class="table"> <!-- Table to display product data -->
            <thead>
                <tr>
                    <th>Product Name</th> <!-- Table header for product name -->
                    <th>Quantity</th> <!-- Table header for quantity -->
                    <th>Price per Item</th> <!-- Table header for price -->
                    <th>Date Time Submitted</th> <!-- Table header for submission date and time -->
                    <th>Total Value</th> <!-- Table header for total value -->
                    <th>Action</th> <!-- Table header for action (e.g., edit) -->
                </tr>
            </thead>
            <tbody id="productTableBody">
                <?php include 'display.php'; ?> <!-- Including PHP script to display data -->
            </tbody>
        </table>
        <div id="totalValue"></div> <!-- Placeholder for displaying total value -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Include jQuery library -->
    <script src="script.js"></script> <!-- Include custom JavaScript file -->
</body>
</html>
