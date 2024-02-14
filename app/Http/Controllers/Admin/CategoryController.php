<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => SpladeTable::for(Category::class)
                ->withGlobalSearch(columns: ['title', 'description'])
                ->column('title', label: "Название услуги", sortable: true)
                ->column('text', label: "Описание услуги")
                ->column('action', label: "Действие", canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Category();
        $service->title = $request->input('title');
        $service->text = $request->input('text');
        $service->isNew = $request->input('isNew');
        $service->isPopular = $request->input('isPopular');
        $service->isActive = $request->input('isActive');
        $service->image = $request->file('image')->store('public/services');
        $service->save();
        Toast::title('Категория добавлена!');
        return redirect()->route('categories.index');
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
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category = new Category();
        $category->title = $request->input('title');
        $category->text = $request->input('text');
        $category->isNew = $request->input('isNew');
        $category->isPopular = $request->input('isPopular');
        $category->isActive = $request->input('isActive');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public/services', $filename);
            $category->image = $filename;
        }
        $category->save();
        Toast::title('Категория добавлена!');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
