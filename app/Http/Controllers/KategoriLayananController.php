<?php

namespace App\Http\Controllers;

use App\Models\KategoriLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = KategoriLayanan::all();
        return view('admin.category.index', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'category' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            $validate['icon'] = $request->file('icon')->storeAs('category-icon', $request->file('icon')->getClientOriginalName());
        }

        KategoriLayanan::create([
            'kategori' => $request->category,
            'slug' => str()->slug($request->category),
            'icon' => $validate['icon'],
        ]);

        return redirect()->route('category-service')->with('success', 'Kategori layanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriLayanan $kategoriLayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriLayanan $kategoriLayanan, $id)
    {
        $categories = KategoriLayanan::find($id);
        return view('admin.category.update', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriLayanan $kategoriLayanan)
    {
        $data = KategoriLayanan::find($request->id);

        $validate = $request->validate([
            'category' => 'required',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            $validate['icon'] = $request->file('icon')->storeAs('category-icon', $request->file('icon')->getClientOriginalName());
        }

        $data->update([
            'kategori' => $request->category,
            'slug' => str()->slug($request->category),
            'icon' => $validate['icon'],
        ]);

        return redirect()->route('category-service')->with('success', 'Kategori layanan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriLayanan $kategoriLayanan)
    {
        if ($kategoriLayanan->icon) {
            Storage::delete($kategoriLayanan->icon);
        }

        KategoriLayanan::destroy($kategoriLayanan->id);
        return redirect()->route('category-service')->with('success', 'Kategori layanan berhasil dihapus');
    }
}
