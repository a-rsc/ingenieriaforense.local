<?php

namespace App\Controllers;

use App\Core\Controller;

class PageController extends Controller
{
    public function index(): void
    {
        $data = [
            // 'title' => __('home_title'),
            // 'description' => __('home_description'),
            // 'text' => __('home_text'),
        ];

        $this->view('home', $data);
    }

    public function industrialFires(): void
    {
        $this->view('industrial-fires');
    }

    public function industrialAccidents(): void
    {
        $this->view('industrial-accidents');
    }

    public function standard(): void
    {
        $this->view('standard');
    }

    public function about(): void
    {
        $this->view('about');
    }

    public function contact(): void
    {
        $this->view('contact');
    }

    public function legalContent(): void
    {
        $this->view('legal-content');
    }

    public function notFound(): void
    {
        http_response_code(404);

        $this->view('404');
    }
}