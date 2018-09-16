<?php

namespace App\Http\Controllers\Admin;

use App\Catalog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index(){
        $AllCatalog =  Catalog::all();

        return view('admin.catalog.index', ['AllCatalog' => $AllCatalog ]);
    }

    public function showAddForm(){

        return view('admin.catalog.addForm');
    }

    public function add(Request $request){
        $input = $request->all();

        $input['catalogStatus'] = 1;

        Catalog::create($input);

        return redirect('admin/catalog/index');
    }

    public function showEditForm(Request $request){
        $id = $request->id;

        $catalog = Catalog::findOrFail($id);

        return view('admin.catalog.editForm', ['catalog' => $catalog]);
    }
    public function edit(Request $request){
        $id = $request->id;

        $catalog = Catalog::findOrFail($id);

        $input = $request->all();

        $catalog->fill($input)->save();

        return redirect('admin/catalog/index');
    }

    public function status(Request $request){
        $id = $request->id;

        $catalog = Catalog::findOrFail($id);

        $catalog->catalogStatus = !$catalog->catalogStatus;

        $catalog->save();

        return redirect('admin/catalog/index');
    }
}