<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bottom;

class BottomCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $this->common["main"]="bottom";
        return view('admin',$this->common);
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
      $row=Bottom::first();
      $row->bottom=$input['bottom'];
      $row->save();
      

      return redirect("/admin/bottom");
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
