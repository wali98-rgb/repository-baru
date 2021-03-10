<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        return "ini dari controller dengan method index";
    }
    public function edit(){
        return "ini methode edit";
    }
    public function edit2(){
        return "Hasil pembimbingan selama 4 tahun terakhir";
    }
    public function edit3(){
        return "Kinerja hasil kerja keras selama 2 bulan terakhir";
    }
    public function edit4(){
        return "ini adalah bagian dari dashboard page";
    }
}


