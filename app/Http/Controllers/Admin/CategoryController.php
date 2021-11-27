<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCategoryRequest;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all();

        $data = [
            'title'     => 'Kategori',
        ];

        return view('admin.categories.index', $data, compact('categories'));
    }

    public function create()
    {
        abort_if(Gate::denies('category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $request->validate([
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $icon = null;

        if ($request->hasFile('icon')) {
            $imgName = time() . '-' . $request->file('icon')->getClientOriginalName();
            $icon = $request->file('icon')->storeAs('assets/icons', $imgName);
        }


        Category::create([
            'id' => $request->id,
            'type' => $request->type,
            'icon' => $icon,
        ]);

        return redirect()->route('admin.categories.index')
            ->with('success', 'You have successfully upload image.');
    }

    public function edit(Category $category)
    {
        abort_if(Gate::denies('category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $request->validate([
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $icon = $category->icon;

        if ($request->hasFile('icon')) {
            Storage::delete($category->icon);
            $imgName = time() . '-' . $request->icon->getClientOriginalName();
            $icon = $request->file('icon')->storeAs('assets/icons', $imgName);
        }

        $category->update([
            'id' => $request->id,
            'type' => $request->type,
            'icon' => $icon,
        ]);

        return redirect()->route('admin.categories.index')
            ->with('success', 'You have successfully upload image.');
    }

    public function show(Category $category)
    {
        abort_if(Gate::denies('category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.categories.show', compact('category'));
    }

    public function destroy(Category $category)
    {
        abort_if(Gate::denies('category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $category->delete();

        return back();
    }

    public function massDestroy(MassDestroyCategoryRequest $request)
    {
        Category::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
