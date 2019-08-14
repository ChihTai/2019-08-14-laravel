<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ad;
use App\Mvim;
use App\Menu;
use App\image;
use App\news;

class IndexCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $this->common['main']="index";
        $ad=Ad::where("sh","checked")->get();
        $image=Image::where("sh","checked")->get();
        $mvim=Mvim::where("sh","checked")->get();
        $news=News::where("sh","checked")->get();
        $this->common["ad"]=$ad->implode("text","&nbsp;&nbsp;&nbsp;");
        $this->common["image"]=$image->pluck("file");
        $this->common["news"]=$news->pluck("text");
        $this->common["mvim"]=$mvim->implode("file",",");
        return view('index',$this->common);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
