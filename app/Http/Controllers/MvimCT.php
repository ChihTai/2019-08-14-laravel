<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mvim;

class MvimCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $rows=Mvim::all();
        $this->common["main"]="mvim";
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
       return view("admin.add.mvim");
    }


    public function updateImg($id)
    {
        return view("admin.update.mvim",["cid"=>$id]);
    }

    public function storeImg(Request $request,$id){
        
        $row=Mvim::find($id);
        if($request->hasFile("file")){
            if($request->file("file")->isValid()){
                $filename=$request->file("file")->getClientOriginalName();
                $request->file("file")->storeAs("img",$filename,"public");
                $row['file']=$filename;
            }
        }
           $row->save();
           //Mvim::update($row)
        return redirect("/admin/mvim");
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
           Mvim::create($input);
        return redirect("/admin/mvim");
        

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
                Mvim::destroy($id);
            }else{
                $row=Mvim::find($id);
                $row->sh=(in_array($id,$input['sh']))?"checked":"";
                $row->save();
            }
        }

        return redirect("/admin/mvim");

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
