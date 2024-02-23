<?php

namespace App\Controllers;

use App\Models\Level_model;
use CodeIgniter\Format\JSONFormatter;

class Home extends BaseController
{
    private $Level_model;
    private $data;
    public function __construct()
    {
        $this->Level_model = new \App\Models\Level_model();
    }
    public function index()
    {
        return view('home');
    }

    public function home(){
        //$data['levels'] = $this->Level_model->getLevels();
        //$levels = $this->Level_model->getLevels();
        //$this->data1['levelsView'] = view('levels',$data);
        //echo var_dump($this->data1['levelsView']);
        //return view('levels', $data);
        $this->data['content'] = view('home2');

        return view('navfoot', $this->data);

    }

    public function commission(){
        $this->data['content'] = view('commission');
        return view('navfoot', $this->data);
    }

    public function levels(){
        //var_dump(json_encode($this->Level_model->getLevels()));
        //var_dump($this->Level_model->getLevels());
        $data['CISlevels'] = $this->Level_model->getCISLevels();
        $data['NONCISlevels'] = $this->Level_model->getNONCISLevels();
        //$levels = $this->Level_model->getLevels();
        $this->data1['content'] = view('levels',$data);
        //return view('levels', $data);
        return view('navfoot', $this->data1);
    }
    public function details_CIS(){
        
        $key = $this->request->getVar('key');
        $CISlevels = $this->Level_model->getCISLevels();
        $data1['level'] = $CISlevels[$key];
        $data1['key'] = $key;
        
        $data['content'] = view('details', $data1);
        return view('navfoot', $data);

    }
    public function details_NONCIS(){

        $key = $this->request->getVar('key');
        $NONCISlevels = $this->Level_model->getNONCISLevels();
        $data1['level'] = $NONCISlevels[$key];
        $data1['key'] = $key;

        $data['content'] = view('details', $data1);
        return view('navfoot', $data);

    }
    
}
