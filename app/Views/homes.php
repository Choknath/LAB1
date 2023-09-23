<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Table_Products </h1>
    <?php if($table_prod):?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ProductName</th>
                    <th>ProductDescription</th>
                    <th>ProductCategory</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
           
                <?php foreach ($table_prod as $product):?>
                    <tr>
                        <td><?=$product['ProductName']?></td>
                        <td><?=$product ['ProductDescription']?>
                        </td>
                        <td><?=$product
                        ['ProductCategory']?></td>
                        <td><?=$product['Price']?></td>
                        <td><?=$product['Quantity']?></td>
                        <td>
                            <a href="/edit/<?=$product['id']?>" class="btn btn-primary">Edit</a>
                            <a href="/delete/<?=$product['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                        
                    </tr>
                  
                <?php endforeach;?>
                
            </tbody>
            <a href="/Insert" class="btn btn-info">Add Another Product</a>
        </table>
        
    <?php endif ?>

    <!-- Add Bootstrap JS (optional, for certain features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>