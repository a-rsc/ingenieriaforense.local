<?php

namespace App\Controllers;

use App\Core\Controller;

class LegalNoticeController extends Controller
{
    public function index(): void
    {
        $data = [
            // 'title' => __('legal_notice_title'),
            // 'description' => __('legal_notice_description'),
            // 'text' => __('legal_notice_text'),
        ];

        $this->view('legal_notice', $data);
    }
}