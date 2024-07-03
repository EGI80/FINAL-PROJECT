<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\teams;
use Illuminate\Http\Request;

class teamController extends Controller
    {
        //
        public function index()
        {
            return view('admin.team.index', [
                'teams' => team::orderBy('id', 'desc')->get()
            ]);
        }




        public function create()
        {
            return view('admin.teams.create');
        }

        public function store(Request $request)
        {
            $rules = [
                'judul' => 'required',
                'subjudul' => 'required',




            ];

            $messages = [
                'judul.required' => 'Judul wajib diisi!',

                'subjudul.required' => 'subJudul wajib diisi!',



            ];

            $this->validate($request, $rules, $messages);

            # Artikel
            $storage = "storage/content-teams";
            $dom = new \DOMDocument();
            # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
            libxml_use_internal_errors(true);
            // //desc awale
            // $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            # Menghapus buffer kesalahan libxml
            libxml_clear_errors();



            teams::create([
                'judul' => $request->judul,
                'subjudul' => $request->subjudul,



            ]);

            return redirect(route('teams'))->with('Success', 'data berhasil di simpan');
        }

        public function edit($id)
        {
            $teams = teams::find($id);
            return view('admin.teams.edit', compact('teams'));
        }



        public function update(Request $request, $id)
{
    $teams = teams::find($id);

    $rules = [
        'judul' => 'required',
        'subjudul' => 'required',
    ];

    $messages = [
        'judul.required' => 'Judul wajib diisi!',
        'subjudul.required' => 'Subjudul wajib diisi!',
    ];

    $this->validate($request, $rules, $messages);

    // Proses gambar jika ada yang diunggah
    if ($request->hasFile('image')) {
        // Validasi dan penyimpanan gambar baru
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Hapus gambar lama jika ada
        if (\File::exists('storage/teams/' . $teams->image)) {
            \File::delete('storage/teams/' . $teams->image);
        }

        // Simpan gambar baru
        $imagePath = $request->file('image')->store('public/teams');
        $fileName = basename($imagePath);

        // Update data tim dengan informasi gambar baru
        $teams->update([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'image' => $fileName, // Simpan nama file gambar baru ke dalam database
        ]);
    } else {
        // Jika tidak ada gambar yang diunggah, update data tanpa mengubah gambar
        $teams->update([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
        ]);
    }

    return redirect(route('teams'))->with('success', 'Data berhasil diupdate');
}


        public function destroy($id)
        {
            $teams = teams::find($id);
            if (\File::exists('storage/teams/' . $teams->image)) {
                \File::delete('storage/teams/' . $teams->image);
            }

            $teams->delete();

            return redirect(route('teams'))->with('success', 'Data berhasil dihapus');
        }
    }
