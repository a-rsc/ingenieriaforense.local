<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index(): void
    {
        $data = [
            // 'title' => __('about_title'),
            // 'description' => __('about_description'),
            // 'text' => __('about_text'),
        ];

        $this->view('about', $data);
    }
}