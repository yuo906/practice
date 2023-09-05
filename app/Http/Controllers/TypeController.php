<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Dd;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $types = ProductType::get();,compact('types', 'typesImg')
        return view('product_type.typeList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_type.typeList_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        // $type = ProductType::create([
        //     'name'=>$request->name,
        //     'desc'=>$request->desc,
        // ]);

        // foreach($request->image ?? [] as $value){
        //     ProductTypeImg::create([
        //         'img_path' => $this -> fileService -> imgUpload($value -> 'type-image'),
        //         'product_type_id' => $type -> id,
        //     ]);
        // }

        // return redirect(route('type.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $type = ProductType::find($id);
        // return view('product_type.typeList_edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $type = ProductType::find($id);
        // $type->update([
        //     'name'=>$request -> name,
        //     'desc'=>$request -> desc,
        // ]);

        // if($request->hasfile('image')){
        //     foreach($type->productTypeImg ?? [] as $value) {
        //         $this -> fileService ->deleteUpload($value->img_path);
        //         $value -> delete();
        //     }
        //     foreach($request->image ??[] as $value){
        //         ProductTypeImg::create([
        //             'img_path' => $this -> fileService -> imgUpload($value,'type-image'),
        //             'product_type_id' => $id,
        //         ]);
        //     }
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $type = ProductType::find($id);
        // foreach($type->productTypeImg ?? [] as key => $value){
        //     dd($value);
        //     $this -> fileService ->deleteUpload($value ->img_path);
        //     $value->delete();
        // }

        // $type -> delete();

    }
}
