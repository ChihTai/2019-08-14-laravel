<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ad;
use App\Mvim;
use App\Menu;
use App\image;
use App\news;

class MoreCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $this->common['main']="news";
        $ad=Ad::where("sh","checked")->get();
        $image=Image::where("sh","checked")->get();
        $mvim=Mvim::where("sh","checked")->get();
        $news=News::where("sh","checked")->paginate(5);
        $this->common["ad"]=$ad->implode("text","　　");
        $this->common["image"]=$image->pluck("file");
        $this->common["news"]=$news;
        $this->common["mvim"]=$mvim->implode("file",",");
         $menus=Menu::where("sh","checked")->get();
         $mu=[];
         foreach($menus as $k=>$v){
             if($v['parent']==0){
                $mu[$v['id']]=["text"=>$v['text'],"href"=>$v['href']];
             }else{
                if(!empty($mu[$v['parent']])){
                    $mu[$v['parent']]['subs'][]=["text"=>$v['text'],"href"=>$v['href']];
                }
             }
         }

         $this->common["menu"]=$mu;



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
