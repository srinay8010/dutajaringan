<?php 

namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController {
  protected $products;
  
  public function __construct() {
    $this->products = new ProductModel();
  }
  
  public function products() {
    $data = [
      'title' => 'Products',
      'products' => $this->products->dataProducts()
    ];
    return view('pages/products', $data);
  }
  
  public function productDetail($id) {
    $data = [
      'product' => $this->products->itemProduct($id)
    ];
    return view('pages/detail-product', $data);
  }
}