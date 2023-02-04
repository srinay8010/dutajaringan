<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Pages extends BaseController {
    public function index() {
        if (! is_file(APPPATH . 'Views/pages/index.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $products = new ProductModel();
        $data = [
            'title' => 'Home',
            'produk' => $products->dataProducts()
        ]; // Capitalize the first letter
        return view('pages/index', $data);
    }

    public function about() {
        $data = ['title' => 'About'];
        return view('pages/about', $data);
    }

    public function services($page = 'services') {
        $data['title'] = ucfirst($page);
        return view('pages/' . $page);
    }

    public function test($page = 'test') {
        $data['title'] = ucfirst($page);
        return view('pages/'. $page);
    }
}