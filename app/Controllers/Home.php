<?php

namespace App\Controllers;

use App\Models\LokerModel;

class Home extends BaseController
{

    protected $lokerModel;

    public function __construct(){

        $this->lokerModel = new LokerModel();
    }

    public function index()
    {
        $data['loker'] = $this->lokerModel->get6Loker();
        return view('Home', $data);
    }
}
