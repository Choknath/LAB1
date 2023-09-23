<?php
namespace App\Models;
use CodeIgniter\Model;


class ProductModel extends Model
{
    protected $table ='tblproducts';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'ProductName',
        'ProductDescription',
        'ProductCategory',
        'Price',       
       'Quantity'
    ];
}
?>