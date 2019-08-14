<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Total;

class TotalCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $this->common["main"]="total";
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
      $row=Total::first();
      $row->total=$input['total'];
      $row->save();
      

      return redirect("/admin/total");
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
