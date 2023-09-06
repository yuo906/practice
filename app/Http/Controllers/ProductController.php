<?php

namespace App\Http\Controllers;

use App\Services\FileService;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\CallLike;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    // protected $FileService;
    // //           兩個底線 解構
    // public function __construct(FileService $FileService)
    // {
    //     $this->FileService = $FileService;
    // }

    public function __construct(protected FileService $fileService)
    {
    }

    public function index()
    {
        return view('product.website');
    }

    public function cart(Request $request)
    {
        // get()完不能再寫 where 所以改query
        $products = Product::query();

        $keyword = $request->keyword ?? '';
        // dd($keyword);
        if ($request->filled('keyword')) {
            $products->where('name', 'LIKE', '%' . $keyword . '%')->orWhere('desc', 'LIKE', '%' . $keyword . '%');
        }

        $products = $products->paginate(5);
        // 須放在paginate後使用
        // 方法一
        // $products -> withPath('/cart?keyword=' . $keyword);
        // 方法二
        $products->appends(compact('keyword'));


        return view('product.orderList', ['products' => $products, 'keyword' => $keyword]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.orderList_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 第一種寫法
        // $path = Storage::putFile('public/upload', $request->file('image'));
        // 第二種寫法
        // 路徑       FileService檔案   imgUpload($file, $dir)            $dir創建資料夾
        $path = $this->fileService->imgUpload($request->file('image'), 'ProductImage');

        // dd($request->all());
        Product::create([
            'name' => $request->name,
            // 'img_path' => str_replace('public','storage', $path),
            'img_path' => $path,
            'price' => $request->price,
            'status' => $request->status,
            'desc' => $request->desc,

        ]);
        return redirect(route('product.cart'));
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
    public function edit($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('product.orderList_edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 驗證
        $product = Product::find($id);

        // 如果有上傳圖片 先刪除才能更新
        // if ($request->file('image')) {
        //     $path = Storage::putFile('public/upload', $request->file('image'));

        //     Storage::delete(str_replace('storage','public',$product->img_path));
        //     $product -> update([
        //         'name'=>$request->name,
        //         'price'=>$request->price,
        //         'status'=>$request->status,
        //         'desc'=>$request->desc,
        //         'img_path'=>str_replace('public','storage', $path),
        //     ]);
        // }else {
        //     $product -> update([
        //         'name'=>$request->name,
        //         'price'=>$request->price,
        //         'status'=>$request->status,
        //         'desc'=>$request->desc,
        //     ]);
        // }
        // dd($request->all());

        if ($request->file('image')) {
            $path = $this->fileService->imgUpload($request->file('image'), 'ProductImage');
            $this->fileService->deleteUpload($product->img_path);
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
                'desc' => $request->desc,
                'img_path' => $path,
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
                'desc' => $request->desc,
            ]);
        }
        return redirect(route('product.cart'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $product = Product::find($id);
        // 刪圖片
        $this->fileService->deleteUpload($product->img_path);
        $product->delete();
        return redirect(route('product.cart'));
    }
}
