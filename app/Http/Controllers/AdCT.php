<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ad;

class AdCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $rows=Ad::all();
        $this->common["main"]="ad";
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
      return view("admin.add.ad");
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
      $input['sh']="checked";

      Ad::create($input);
      return redirect("/admin/ad");
      
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
              Ad::destroy($id);
          }else{
              $row=Ad::find($id);
              $row->text=$input['text'][$key];
              $row->sh=(in_array($id,$input['sh']))?"checked":"";
              $row->save();
          }
      }

      return redirect("/admin/ad");
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
