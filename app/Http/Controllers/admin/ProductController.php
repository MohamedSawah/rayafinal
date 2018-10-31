<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Image;
use App\Product;
use App\Feature;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $x = 1;
        $products = product::latest()->paginate(30);
        return view('admin.products.index ', compact('products', 'x'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::where('parent_id','!=',0)->get();
        $features=Feature::all();
        return view('admin.products.create', compact('categories','features'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   'code', 'name_en', 'name_ar', 'info_en', 'info_ar', 'description_en',
        //  'description_ar', 'price','price_after', 'otherData', 'quantity',
        //  'img_main', 'slug', 'order', 'status', 'category_id',
        request()->validate([
            'code' => 'required',
            'name_en' => 'nullable',
            'name_ar' => 'required',
            'info_en' => 'nullable',
            'info_ar' => 'required',
            'description_en' => 'nullable',
            'description_ar' => 'nullable',
            'price' => 'nullable',
            'price_after' => 'nullable',
            'otherData' => 'nullable',
            'quantity' => 'required',
            'img_main' => 'required',
            'order' => 'nullable',
            'status' => 'required',
            'category_id' => 'required',

        ]);

        $product = $request->all();
        $product = new Product;
        $product->name_en = $request->name_en;
        $product->name_ar = $request->name_ar;
        $product->info_en = $request->info_en;
        $product->info_ar = $request->info_ar;
        $product->description_en = $request->description_en;
        $product->description_ar = $request->description_ar;
        $product->price = $request->price;
        $product->price_after = $request->price_after;
        $product->otherData = $request->otherData;
        $product->quantity = $request->quantity;
        $product->img_main = $request->img_main;
        $product->slug = str_slug($request->name_ar);
        $product->order = $request->order;
        $product->code = $request->code;
        $product->category_id = $request->category_id;
        $product->status = $request->status;
        $product->save();
        $product->features()->sync($request->features);
        $id = $product->id;
        if ($main_image = $request->file('img_main')) {
            $extension = $main_image->getClientOriginalExtension();
            $image_name = $id . '_product' . '.' . $extension;
            $main_image->move(public_path('/upload/product'), $image_name);
            Product::where('id', $id)->update(['img_main' => $image_name]);

        }
        //`product_id`, `img_name`
        if ($main_image = $request->file('image')) {
            $i = 0;
            foreach ($request->image as $photo) {
                $extension = $photo->getClientOriginalExtension();
                $image_names = $id . '_product' . $i++ . '.' . $extension;
                // $image_names =$id+(++$i).'_product'.'.'.$extension;
                $photo->move(public_path('/upload/product/other'), $image_names);
                Image::create([
                    'product_id' => $product->id,
                    'img_name' => $image_names,
                ]);
            }
        }

        return redirect()->route('products.index')
            ->with('success', 'product Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $features=Feature::all();
        $product = Product::find($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::where('parent_id','!=',0)->get();
        $features=Feature::all();
        // ::where('active', 1)
        $images = Image::where('product_id', $product->id)->get();
        //$images=Image::where('product_id', 1)->count();
        //dd($images);
        return view('admin.products.edit', compact('product', 'categories', 'images','features'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //

        $product->update([
            'code' => $request->input('code'),
            'name_en' => $request->input('name_en'),
            'name_ar' => $request->input('name_ar'),
            'info_en' => $request->input('info_en'),
            'info_ar' => $request->input('info_ar'),
            'description_en' => $request->input('description_en'),
            'description_ar' => $request->input('description_ar'),
            'price' => $request->input('price'),
            'price_after' => $request->input('price_after'),
            'otherData' => $request->input('otherData'),
            'quantity' => $request->input('quantity'),
            // 'img_main' => $request->input('img_main'),
            'slug' => str_slug($request->input('slug')),
            'order' => $request->input('order'),
            'status' => $request->input('status'),
            'category_id' => $request->input('category_id'),

        ]);
        $product->features()->sync($request->features);
        $id = $product->id;
        if ($main_image = $request->file('img_main')) {
            $extension = $main_image->getClientOriginalExtension();
            $image_name = $id . '_product' . '.' . $extension;
            $main_image->move(public_path('/upload/product'), $image_name);
            Product::where('id', $id)->update(['img_main' => $image_name]);

        }

        if ($extra_image = $request->file('image')) {
            $i = 0;
            foreach ($request->image as $photo) {
                $extension = $photo->getClientOriginalExtension();
                $image_names = $id . '_product' . $i++ . '.' . $extension;
                $photo->move(public_path('/upload/product/other'), $image_names);
                Image::where('product_id', $id)->updateOrCreate([
                    'product_id' => $product->id,
                    'img_name' => $image_names,
                ]);
            }
        }
        return redirect()->route('products.index')
            ->with('success', 'product Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $images = Image::all()->where('product_id', '=', $product->id);
        foreach ($images as $image) {
            $image_path = public_path() . '/upload/product/other/' . $image->img_name;
            unlink($image_path);
            $image->delete();
        }
        if ($product->img_main != null) {
            $image_path = public_path() . '/upload/product/' . $product->img_main;
            unlink($image_path);
        }
        
    
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'product deleted successfully');

    }
}
