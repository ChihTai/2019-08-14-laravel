<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

class MenuCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $rows=Menu::where("parent",0)->get();
        $this->common["main"]="menu";
        $this->common['rows']=$rows;

        return view('admin',$this->common);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("admin.add.menu");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input=$request->all();
      Menu::create($input);
      return redirect("/admin/menu");
      
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
    public function update(Request $request)
    {
      $input=$request->all();
      foreach($input['id'] as $key=>$id){
          if(!empty($input['del']) && in_array($id,$input['del'])){
              Menu::destroy($id);
          }else{
              $row=Menu::find($id);
              $row->text=$input['text'][$key];
              $row->href=$input['href'][$key];
              $row->sh=(in_array($id,$input['sh']))?"checked":"";
              $row->save();
          }
      }

      return redirect("/admin/menu");
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
