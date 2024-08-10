<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalogue;
use App\Models\Catelogue;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.products.';

    const  PATH_UPLOAD = 'products';
    public function index()
    {
        $data = Product::query()->with('catalogues')->latest('id')->paginate(5);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Catalogue::all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('image');


        if ($request->hasFile('image'))
        {
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }


        Product::query()->create($data);

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Product::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__,compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Product::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__,compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Product::query()->findOrFail($id);

        $data = request()->except('image');


        if ($request->hasFile('image')){
            $data['cover'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }
        $currentImage = $model->image;
        $model->update($data);

        if  ($request->hasFile('image') && $currentImage && Storage::exists($currentImage)){
            Storage::delete($currentImage);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Product::query()->findOrFail($id);
        $model->delete();

        if ($model->image && Storage::exists($model->image)){
            Storage::delete($model->image);
        }
        return back();
    }
}
