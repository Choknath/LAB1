<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Categories</title>
    <style>
       
        h1 {
            text-align: center;
        }

       
        ul {
            text-align: center;
            list-style-type: none;
            padding: 0;
        }

        */
        li {
            text-align: center;
            margin: 10px 0;
        }

       
        a {
            text-align: center;
            text-decoration: none;
            color: #007BFF; 
        }

        */
        a:hover {
            text-align: center;
            color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Product Categories</h1>

    <ul>
        <?php foreach ($table_prod as $product): ?>
            <li><a href="/homes"><?= $product['ProductCategory'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
