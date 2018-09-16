<?php


namespace App\Http\Controllers\Site;


use App\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends BaseController
{

    public function index(Request $request){
        $id = $request->id;

        $catalog = Catalog::findOrFail($id);


        $productOfCatalog = DB::table('product')
            ->join('catalog', 'catalog.id', '=', 'product.catalogId')
            ->where('product.productStatus', 1)
            ->where('catalog.id', $id)
            ->get(['product.*', 'product.id as productId', 'catalog.*', 'catalog.id as catalogId']);

        return view('site.catalog', ['catalog' => $catalog, 'productOfCatalog' => $productOfCatalog]);
    }
}