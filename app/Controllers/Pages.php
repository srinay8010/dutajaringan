<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index($page = 'index')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }

    public function about($page = 'about')
    {
        $data['title'] = ucfirst($page);
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }

    public function services($page = 'services')
    {
        $data['title'] = ucfirst($page);
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }

    public function products($page = 'products')
    {
        $data['title'] = ucfirst($page);
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }

    public function test($page = 'test')
    {
        $data['title'] = ucfirst($page);
        return view('templates/header', $data)
        . view('pages/'. $page)
        . view('templates/footer');
    }
}