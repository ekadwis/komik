<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ManhuaModel;

class ManhuaController extends BaseController
{

    public function __construct()
    {
        $this->ManhuaModel = new ManhuaModel();
    }

    public function index()
    {
        $textPurple = 'text-purple active';
        $textWhite = 'text-light';

        $data = [
            'home' => $textWhite,
            'manga' => $textWhite,
            'manhwa' => $textWhite,
            'manhua' => $textPurple,
            'listManhua' => $this->ManhuaModel->paginate(6, 'komik'),
            'pager' => $this->ManhuaModel->pager,
        ];

        return view('filters/manhua', $data);
    }
}
