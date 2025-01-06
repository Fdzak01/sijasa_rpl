<?php

namespace App\Http\Controllers;

use App\Models\KategoriLayanan;
use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pelayanan::all();
        return view('admin.pelayanan.index', compact('data'));
    }

    public function service()
    {
        $data = Pelayanan::all();
        return view('layanan', compact('data'));
    }


    public function detail($id)
    {
        $data = Pelayanan::find($id);
        return view('detaillayanan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = KategoriLayanan::all();
        return view('admin.pelayanan.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'price' => 'required',
            'estimate' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $validate['thumbnail'] = $request->file('thumbnail')->storeAs('service-image', $request->file('thumbnail')->getClientOriginalName());
        }

        Pelayanan::create([
            'service' => $request->name,
            'slug' => str()->slug($request->name),
            'thumbnail' => $validate['thumbnail'],
            'description' => $request->description,
            'price' => $request->price,
            'estimate' => $request->estimate,
            'kategori_layanans_id' => $request->category,
        ]);

        return redirect()->route('service')->with('success', 'Pelayanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelayanan $pelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelayanan $pelayanan, $id)
    {
        $service = Pelayanan::find($id);
        $category = KategoriLayanan::all();
        return view('admin.pelayanan.update', compact('service', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelayanan $pelayanan)
    {
        $data = Pelayanan::find($request->id);

        $validate = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'price' => 'required',
            'estimate' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $validate['thumbnail'] = $request->file('thumbnail')->storeAs('service-image', $request->file('thumbnail')->getClientOriginalName());
        }

        $data->update([
            'service' => $request->name,
            'slug' => str()->slug($request->name),
            'thumbnail' => $validate['thumbnail'],
            'description' => $request->description,
            'price' => $request->price,
            'estimate' => $request->estimate,
            'kategori_layanans_id' => $request->category,
        ]);

        return redirect()->route('service')->with('success', 'Pelayanan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelayanan $pelayanan, $id)
    {
        $data = Pelayanan::find($id);

        if ($data->thumbnail) {
            Storage::delete($data->thumbnail);
        }

        Pelayanan::destroy($id);
        return redirect()->route('service')->with('success', 'Pelayanan berhasil dihapus');
    }
}
