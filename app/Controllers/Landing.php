<?php namespace App\Controllers;

use App\Models\LokerModel;

class Landing extends BaseController{

    protected $lokerModel;

    public function __construct(){

        $this->lokerModel = new LokerModel();
    }

// view function
    public function index(){

        $data['loker'] = $this->lokerModel->getAllLoker();
        echo view('Home', $data);
    }
}