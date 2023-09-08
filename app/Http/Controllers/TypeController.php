<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FileService;
use App\Models\ProductType;
use App\Models\ProductTypeImg;
use Termwind\Components\Dd;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(protected FileService $fileService)
    {
    }

    public function index()
    {
        // 看關聯
        // $types = ProductType::with('productTypeImg')->first();
        // dd($types);
        // 看關聯
        // $typesImg = ProductTypeImg::with('productType')->first();
        // dd($typesImg);
        $types = ProductType::get();
        // $typesImg = ProductTypeImg::get();
        // return view('product_type.typeList', compact('types', 'typesImg'));
        return view('product_type.typeList', compact('types'));
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
        // dd($request->all());
        $type = ProductType::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        foreach ($request->image ?? [] as $value) {
            ProductTypeImg::create([
                'img_path' => $this->fileService->imgUpload($value, 'type-image'),
                'product_type_id' => $type->id,
            ]);
        }

        return redirect(route('type.index'));
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
        // dd($id);
        $type = ProductType::find($id);
        return view('product_type.typeList_edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->hasFile('image'));
        $type = ProductType::find($id);
        $type->update([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        if ($request->hasfile('image')) {
            foreach ($type->productTypeImg ?? [] as $value) {
                // dump($value);
                // 先刪圖片路徑 在刪資料
                $this->fileService->deleteUpload($value->img_path);
                $value->delete();
            }
            // dd(123);
            foreach ($request->image ?? [] as $value) {
                ProductTypeImg::create([
                    'img_path' => $this->fileService->imgUpload($value, 'type-image'),
                    'product_type_id' => $id,
                ]);
            }
        }

        return redirect(route('type.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    // params $id : 產品類別的id
    // return 'success' : 'fail' => 表示成功或失敗

    public function destroy(string $id)
    {
        $type = ProductType::find($id);
        //     if ($type) {
        // 附表資料刪除
        foreach ($type->productTypeImg ?? [] as $value) {
            // dd($value);
            $this->fileService->deleteUpload($value->img_path);
            $value->delete();
        }
        // 主表資料刪除
        $type->delete();

        //     } else {
        //         $result = 'fail';
        // }

        //     return $result;
        return redirect(route('type.index'));
        // }
    }
}
