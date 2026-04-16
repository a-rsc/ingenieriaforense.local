<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $data = [
            'title' => __('home_title'),
            'message' => __('home_text'),
        ];

        $this->view('home', $data);
    }
}
?>