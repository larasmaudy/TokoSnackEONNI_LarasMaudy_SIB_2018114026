<?php

namespace App\Http\Controllers;
use App\models\Produks;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $produks = Produks::orderBy('id', 'desc')->paginate(10);

        return view('produks.index', compact('produks'));
    }

    public function create()
    {
        return view('produks.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'gambar' => 'required|unique:produks|max:225',
            'nama' => 'required',
            'ket' => 'required',
            'harga' => 'required', 
        ]);

        $presences = new produks;

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $gambar->getClientOriginalName();
            $image->move('images/post', $name);
            $post->image = $name;
        }
        $produks->nama = $request->nama;
        $produks->ket = $request->ket;
        $produks->harga= $request->harga;
        $produks->save();
    }
    public function show($id)
    {
        $produks = produks::where('id', $id)->first();
        return view('produks.show', ['produks' => $produk]);
    }
    public function edit($id)
    {
        $produks = produks::where('id', $id)->first();
        return view('produks.edit', ['produks' => $produks]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required|unique:produks|max:225',
            'nama' => 'required',
            'ket' => 'required',
            'harga' => 'required',   
        ]);

        Produks::find($id)->update([
            'gambar' => $request->gambar,
            'nama' => $request->nama,
            'ket' => $request->ket,
            'harga' => $request->harga,
        ]);

        return redirect ('/');
    }
    public function destory($id)
    {
        Produks::find($id)->delete();
        return redirect ('/produks'); 
    }
}
