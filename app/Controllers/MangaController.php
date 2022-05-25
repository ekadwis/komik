<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MangaModel;

class MangaController extends BaseController
{
    public function __construct()
    {
        $this->MangaModel = new MangaModel();
    }

    public function index()
    {
        $textPurple = 'text-purple active';
        $textWhite = 'text-light';

        // $listManga = $this->MangaModel->query('SELECT * FROM manga_filter WHERE id_tipe = "TK01"');
        // $listManga = $query->row();
        // foreach($listManga as $list);

        // dd($list);


        $data = [
            'home' => $textWhite,
            'manga' => $textPurple,
            'manhwa' => $textWhite,
            'manhua' => $textWhite,
            'listManga' => $this->MangaModel->paginate(6, 'komik'),
            'pager' => $this->MangaModel->pager,
        ];

        return view('filters/manga', $data);
    }
}
