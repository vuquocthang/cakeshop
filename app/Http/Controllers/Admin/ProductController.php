<?php


namespace App\Http\Controllers\Admin;


use App\Catalog;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');

        $AllCatalog = Catalog::all();

        View::share('AllCatalog', $AllCatalog);
    }

    public function index(){
        $AllProduct =  DB::table('product')
            ->join('catalog', 'catalog.id','=', 'product.catalogId')
            ->orderBy('catalog.id')
            ->get(['product.*', 'product.id as productId', 'catalog.*', 'catalog.id as catalogId']);

        return view('admin.product.index', ['AllProduct' => $AllProduct ]);
    }

    public function showAddForm(){

        return view('admin.product.addForm');
    }

    public function add(Request $request){
        $input = $request->all();

        $image = $request->file('productImageLink');

        $imageName = time(). '.' . $image->getClientOriginalExtension();
        $image->move('upload', $imageName);


        $input['productStatus'] = 1;
        $input['productImageLink'] = $imageName;


        Product::create($input);

        return redirect('admin/product/index');
    }

    public function showEditForm(Request $request){
        $id = $request->id;

        $product = Product::findOrFail($id);

        return view('admin.product.editForm', ['product' => $product]);
    }
    public function edit(Request $request){
        $id = $request->id;

        $product = Product::findOrFail($id);

        $input = $request->all();

        $image = $request->file('productImageLink');

        if ($image != null){
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $image->move('upload', $imageName);

            $input['productImageLink'] = $imageName;
        }


        $product->fill($input)->save();

        return redirect('admin/product/index');
    }

    public function status(Request $request){
        $id = $request->id;

        $product = Product::findOrFail($id);

        $product->productStatus = !$product->productStatus;

        $product->save();

        return redirect('admin/product/index');
    }

}