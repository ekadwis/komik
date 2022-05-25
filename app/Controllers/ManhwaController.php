<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ManhwaModel;

class ManhwaController extends BaseController
{

    public function __construct()
    {
        $this->ManhwaModel = new ManhwaModel();
    }

    public function index()
    {
        $textPurple = 'text-purple active';
        $textWhite = 'text-light';

        $data = [
            'home' => $textWhite,
            'manga' => $textWhite,
            'manhwa' => $textPurple,
            'manhua' => $textWhite,
            'listManhwa' => $this->ManhwaModel->paginate(6, 'komik'),
            'pager' => $this->ManhwaModel->pager,
        ];

        return view('filters/manhwa', $data);
    }
}
