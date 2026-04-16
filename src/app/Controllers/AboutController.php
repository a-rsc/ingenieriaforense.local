<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index(): void
    {
        $data = [
            'title' => __('about_title'),
            'message' => __('about_text'),
        ];

        $this->view('about', $data);
    }
}
?>