<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.products.index', [
            'products' => SpladeTable::for(Product::class)
                ->withGlobalSearch(columns: ['title', 'content'])
                ->selectFilter('category_id', $categories, label: "Категории")
                ->column('title', label: 'Название продукта')
                ->column('action', label: 'Действие')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->input('title');
        $product->content = $request->input('content');
        $product->price = $request->input('price');
        $product->isActive = $request->input('isActive');
        $product->isPopular = $request->input('isPopular');
        $product->isNew = $request->input('isNew');
        $product->category_id = $request->input('category_id');
        $product->image = $request->file('image')->store('public/products');
        $product->save();
        Toast::title('Новый товар успешно добавлен');
        return redirect()->route('products.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
