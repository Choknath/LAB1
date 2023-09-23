<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Your Product Information</h1>
    <form action="/Update<?=$product['id'];?>"method = "post">
    <input type="hidden" name="_method" value = "PUT">
    <label>ProductName</label>
    <input type="hidden" name="id">
    <input type="text" name ="ProductName" placeholder = "ProductName" value="<?=$product['ProductName'];?>">
    <br>
    <br>
    <label>ProductDescription</label>
    <input type="hidden" name="id"></input>
    <input type="text" name="ProductDescription"
    placeholder="ProductDescription:" value ="<?=$product["ProductDescription"];?>">
    <br>
    <br>
    <label>ProductCategory</label>
    <input type="select" name ="ProductCategory" placeholder = "ProductCategory" value="<?=$product['ProductCategory'];?>">
    <br>
    <br>
    <label>Price</label>
    <input type="number" name ="Price" placeholder = "Price" value="<?=$product['Price'];?>">
    <br>
    <br>
    <label>	Quantity</label>
    <input type="number" name ="Quantity" placeholder = "Quantity" value="<?=$product['Quantity'];?>">
    <br>
    <br>
    <input type="submit" name="submit" Value="Update">
    </form>
  
    
</body>
</html>