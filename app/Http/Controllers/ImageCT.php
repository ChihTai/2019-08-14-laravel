<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;

class ImageCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $rows=Image::all();
        $this->common["main"]="image";
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
       return view("admin.add.image");
    }


    public function updateImg($id)
    {
        return view("admin.update.image",["cid"=>$id]);
    }

    public function storeImg(Request $request,$id){
        
        $row=Image::find($id);
        if($request->hasFile("file")){
            if($request->file("file")->isValid()){
                $filename=$request->file("file")->getClientOriginalName();
                $request->file("file")->storeAs("img",$filename,"public");
                $row['file']=$filename;
            }
        }
           $row->save();
           //Image::update($row)
        return redirect("/admin/image");
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
                $input['sh']="checked";
            }
        }
           Image::create($input);
        return redirect("/admin/image");
        

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
                Image::destroy($id);
            }else{
                $row=Image::find($id);
                $row->sh=(in_array($id,$input['sh']))?"checked":"";
                $row->save();
            }
        }

        return redirect("/admin/image");

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
