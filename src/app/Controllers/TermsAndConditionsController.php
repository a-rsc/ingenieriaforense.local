<?php

namespace App\Controllers;

use App\Core\Controller;

class TermsAndConditionsController extends Controller
{
    public function index(): void
    {
        $data = [
            // 'title' => __('terms_and_conditions_title'),
            // 'description' => __('terms_and_conditions_description'),
            // 'text' => __('terms_and_conditions_text'),
        ];

        $this->view('terms_and_conditions', $data);
    }
}