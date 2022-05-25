<?php

namespace App\Controllers;

use App\Models\ListModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ListModel = new ListModel();
    }

    public function index()
    {
        // $sumber = 'https://masak-apa.tomorisakura.vercel.app/api/recipes';
        // $konten = file_get_contents($sumber);
        // $dataApi = json_decode($konten, true);

        $textPurple = 'text-purple active';
        $textWhite = 'text-light';

    //    d($this->request->getVar('keyword'));

        $keyword = $this->request->getVar('keyword');

        if($keyword) {
            $komik = $this->ListModel->search($keyword);
            // $komik = $this->ListModel->query('SELECT * FROM list_komik WHERE judul_komik LIKE "%beginning%"');
            // $this->ListModel->query('SELECT search($keyword)')->paginate(8, 'komik');
        } else {
            $komik = $this->ListModel;
        }

        $data = [
            'home' => $textPurple,
            'manga' => $textWhite,
            'manhwa' => $textWhite,
            'manhua' => $textWhite,
            'listKomik' => $komik->paginate(6, 'komik'),
            'pager' => $this->ListModel->pager,
            // 'dataApi' => $dataApi,
        ];

        return view('homepage', $data);
    }
}
