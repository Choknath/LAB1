<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Input Your Product Information</h1>
    <form action="/actioninsert" method = "post">
    <label>ProductName</label>
    <input type="text" name ="ProductName" placeholder = "ProductName">
    <br>
    <br>
    <label>ProductDescription</label>
    <input type="text" name="ProductDescription" placeholder="ProductDescription">
    <br>
    <br>
    <label>ProductCategory</label>
    <input type="Selection" name ="ProductCategory" placeholder = "ProductCategory">
    <br>
    <br>
    <label>Price</label>
    <input type="text" name ="Price" placeholder = "Price">
    <br>
    <br>
    <label>	Quantity</label>
    <input type="number" name ="Quantity" placeholder = "Quantity">
    <br>
    <br>
    <input type="submit" name="submit" Value="Add Product">
    </form>
    
    
</body>
</html>