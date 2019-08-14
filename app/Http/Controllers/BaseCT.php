<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Title;
use App\Total;
use App\Bottom;


class BaseCT extends Controller
{
    protected $common;
   
    protected function init(){
        $title=Title::where("sh","checked")->first();
        $total=Total::find(1);
        $bottom=Bottom::find(1);
      
        $this->common['title']=$title->title;
        $this->common['titleImg']=$title->file;
        $this->common['total']=$total->total;
        $this->common['bottom']=$bottom->bottom;
    }
}
