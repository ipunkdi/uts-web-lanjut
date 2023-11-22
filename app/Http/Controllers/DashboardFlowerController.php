<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardFlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.flowers.index', [
            'flowers' => Flower::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.flowers.create', [
            'flowers' => Flower::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh formulir
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Jika Anda mengizinkan jenis file gambar tertentu
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/flowers');
            $imageName = basename($imagePath);
        } else {
            $imageName = null; // Atau beri nilai default jika tidak ada gambar yang diunggah
        }

        // Simpan data produk ke database
        $flower = Flower::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'price' => $request->input('price'),
            'image' => $imageName,
        ]);

        // Redirect atau lakukan tindakan lain setelah penyimpanan berhasil
        return redirect()->route('flowers.show', $flower->id)
            ->with('success', 'Product has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Mendapatkan data produk florist berdasarkan ID
        $flower = Flower::find($id);

        // Periksa apakah produk ditemukan
        if (!$flower) {
            abort(404); // Atau tindakan lain sesuai kebutuhan
        }

        // Menampilkan view show dengan data produk florist
        return view('dashboard.flowers.show', ['flower' => $flower]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        return view('dashboard.flowers.edit', [
            'flower' => $flower
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        $rules = [
            'title' => 'required|max:255',
            'content' => 'required',
            'price' => 'required',
            'image' => 'image|png|max:1024'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('flower-images');
        }

        Flower::where('id', $flower->id)
            ->update($validatedData);

        return redirect('/dashboard/flowers')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        if ($flower->image) {
            Storage::delete($flower->image);
        }

        Flower::destroy($flower->id);
        return redirect('/dashboard/flowers')->with('success', 'Product has been deleted!');
    }
}
