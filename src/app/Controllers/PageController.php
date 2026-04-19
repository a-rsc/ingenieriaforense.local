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

    public function industrialFiresOriginCause(): void
    {
        $this->view('industrial-fires-origin-cause');
    }

    public function industrialFiresFireDynamics(): void
    {
        $this->view('industrial-fires-fire-dynamics');
    }

    public function industrialFiresPciAudit(): void
    {
        $this->view('industrial-fires-pci-audit');
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

    public function privacyPolicy(): void
    {
        $this->view('privacy-policy');
    }

    public function termsAndConditions(): void
    {
        $this->view('terms-and-conditions');
    }

    public function legalNotice(): void
    {
        $this->view('legal-notice');
    }

    public function notFound(): void
    {
        http_response_code(404);

        $this->view('404');
    }
}