<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function homes($ProductCategory = null) {
        // Load the ProductModel
        $product = new ProductModel();
    
        // Check if a ProductCategory is specified and apply a condition
        if ($ProductCategory !== null) {
            $data['table_prod'] = $product->where('ProductCategory', $ProductCategory)->findAll();
        } else {
            // If no specific category is provided, fetch all products
            $data['table_prod'] = $product->findAll();
        }
        // Load the view and pass the data
        return view('homes', $data);
    }
    public function home()
    {
        $product = new ProductModel;
        $data = [
            'table_prod' =>$product->findAll(),
        ];
        return view ('/home',$data);
    }
    public function catego(){
   
        $product = new ProductModel;
        $ProductCategory = $product ->distinct()->select('ProductCategory')->findAll();
        $data = [
            'table_prod' =>$ProductCategory,
        ];
        return view ('/catego',$data);
    }

    
    public function delete($id = nUll){
        $product = new ProductModel();
        $product-> delete(['id' =>$id]);
        return redirect()->to('/homes');
    }

    public function edit($id =null){
        $product = new ProductModel();
        $data ['product'] = $product ->find($id);
        return view ('edit', $data);
       
    }
    public function update($id=null){
        $product = new ProductModel ();
         $data = [
        'ProductName' => $this->request->getVar('ProductName'),
        'ProductDescription' =>$this->request ->getVar('ProductDescription'),
        'ProductCategory'=> $this->request->getPost('ProductCategory'),
        'Price'=> $this->request->getPost('Price'),
        'Quantity' => $this->request->getPost('Quantity')
         ];
         $product ->update($id,$data);
         return redirect()-> to ('/homes');
        }

    public function Insert()
    {
        return view ('Insert');
    }
    public function actioninsert()
    {

        $ProductName = $this->request->getVar('ProductName');
        $ProductDescription = $this->request->getVar('ProductDescription');
        $ProductCategory = $this->request->getVar('ProductCategory'); // Use the correct field name
        $Price = $this->request->getVar('Price');
        $Quantity = $this->request->getVar('Quantity');
        $product = new ProductModel();
        $data = [
            'ProductName' => $ProductName,
            'ProductDescription' => $ProductDescription,
            'ProductCategory' => $ProductCategory, // Use the correct field name
            'Price' => $Price,
            'Quantity' => $Quantity
        ];
        // Insert the product data into the tblproducts table
        $inserted = $product->insert($data);
        return redirect()->to('/catego');
        // -------------------------------------------------------------------------------------------------------

        // $ProductName = $this->request->getVar('ProductName');
        // $ProductDescription = $this->request->getVar('ProductDescription');
        // $ProductCategory = $this->request->getVar('ProductCategory');
        // $Price = $this->request->getVar('Price');
        // $Quantity = $this->request->getVar('Quantity');

        // // Check if the specified category exists in the table_category table
        // $categoryModel = new CategoryModel();
        // $category = $categoryModel->where('ProductCategory', $ProductCategory)->first();

        // if (!$category) {
        //     // Handle the case where the category doesn't exist
        //     $data = ['ProductCategory' => $ProductCategory];
        //     return redirect()->to('/catego')->with('error', 'Invalid category');
        // } else {
        //     // The category exists, so you can proceed to insert the product
        //     $product = new ProductModel();
        //     $data = [
        //         'ProductName' => $ProductName,
        //         'ProductDescription' => $ProductDescription,
        //         'ProductCategory' => $category['ProductCategory'], // Use the retrieved category name
        //         'Price' => $Price,
        //         'Quantity' => $Quantity
        //     ];

        //     // Insert the product data into the tblproducts table
        //     $inserted = $product->insert($data);
        //     return redirect()->to('/catego');
       // }

    }
   

}