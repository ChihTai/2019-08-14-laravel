<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class NewsCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $rows=News::all();
        $this->common["main"]="news";
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
      return view("admin.add.news");
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

      News::create($input);
      return redirect("/admin/news");
      
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
              News::destroy($id);
          }else{
              $row=News::find($id);
              $row->text=$input['text'][$key];
              $row->sh=(in_array($id,$input['sh']))?"checked":"";
              $row->save();
          }
      }

      return redirect("/admin/news");
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
