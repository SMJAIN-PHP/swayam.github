<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin.manage_category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data= new category;

      $data->name = $request->name;
      $data->discription = $request->discription;

    if ($request->hasFile('image')) {
    $image = $request->file('image');
    $filename = time().'_img.'.$image->getClientOriginalExtension();
    $image->move(public_path('upload/category'), $filename);
    $data->image = $filename;
    }
      $data->save();

       Alert::success('Congrats', ' Category Added Successfully');

      return redirect('/manage_category');

    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        $data=category::all();
      return view('admin.manage_category',["category"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category,$id)
    {
        $data = category::find($id);
          return view('admin.edit_category',["category" => $data ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category,$id)
    {
        $data=category::find($id);

      $data->name = $request->name;
      $data->discription = $request->discription;


       if($request->hasFile('image'))
        {
            unlink('upload/category/'.$data->image);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_img.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/category'), $filename);
            $data->image = $filename;
        }
    }



      $data->update();

      Alert::success('Congrats', ' Category Updated Successfully');

      return redirect('/manage_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category,$id)
    {
       $data=category::find($id); // find se get single data
        $dlt_category=$data->name;
        $data->delete();

        Alert::warning('Warning Title', 'category deleted');
        return back()->with('delete', $dlt_category);
    }
}
