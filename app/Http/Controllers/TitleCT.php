<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Title;

class TitleCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $rows=Title::all();
        $this->common["main"]="title";
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
       return view("admin.add.title");
    }


    public function updateImg($id)
    {
        return view("admin.update.title",["cid"=>$id]);
    }

    public function storeImg(Request $request,$id){
        
        $row=Title::find($id);
        if($request->hasFile("file")){
            if($request->file("file")->isValid()){
                $filename=$request->file("file")->getClientOriginalName();
                $request->file("file")->storeAs("img",$filename,"public");
                $row['file']=$filename;
            }
        }
           $row->save();
           //Title::update($row)
        return redirect("/admin/title");
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
        $input=$request->all();
        if($request->hasFile("file")){
            if($request->file("file")->isValid()){
                $filename=$request->file("file")->getClientOriginalName();
                $request->file("file")->storeAs("img",$filename,"public");
                $input['file']=$filename;
                $input['sh']="";
            }
        }
           Title::create($input);
        return redirect("/admin/title");
        

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
        //
        $input=$request->all();
        foreach($input['id'] as $key=>$id){
            if(!empty($input['del']) && in_array($id,$input['del'])){
                Title::destroy($id);
            }else{
                $row=Title::find($id);
                $row->title=$input['title'][$key];
                $row->sh=($input['sh']==$id)?"checked":"";
                $row->save();
            }
        }

        return redirect("/admin/title");

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
