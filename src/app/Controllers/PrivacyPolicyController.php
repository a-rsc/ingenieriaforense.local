<?php

namespace App\Controllers;

use App\Core\Controller;

class PrivacyPolicyController extends Controller
{
    public function index(): void
    {
        $data = [
            // 'title' => __('privacy_policy_title'),
            // 'description' => __('privacy_policy_description'),
            // 'text' => __('privacy_policy_text'),
        ];

        $this->view('privacy_policy', $data);
    }
}