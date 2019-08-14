<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Total;

class TotalCT extends BaseCT
{

    public function index()
    {
        parent::init();
        $this->common["main"]="total";
        return view('admin',$this->common);
    }

    public function update(Request $request)
    {
      $input=$request->all();
      $row=Total::first();
      $row->total=$input['total'];
      $row->save();

      return redirect("/admin/total");
    }


}
