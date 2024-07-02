<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function index()
    {
        return view('admin.service.index', [
            'services' => services::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.service.create');
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
        $storage = "storage/content-services";
        $dom = new \DOMDocument();
        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        // //desc awale
        // $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();



        services::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,



        ]);

        return redirect(route('services'))->with('Success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $services = services::find($id);
        return view('admin.service.edit', [
            'services' => $services
        ]);
    }


    public function update(Request $request, $id)
    {
        $services = services::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'subjudul' => 'required',


        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'subjudul.required' => 'subJudul wajib diisi!',


        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/services/' . $services->image)) {
                \File::delete('storage/services/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/services', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);

        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $services->update([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,


        ]);

        return redirect(route('services'))->with('success', 'data berhasil di update');
    }

    public function destroy($id)
    {
        $services = Services::find($id);
        if (\File::exists('storage/services/' . $services->image)) {
            \File::delete('storage/services/' . $services->image);
        }

        $services->delete();

        return redirect(route('services'))->with('success', 'Data berhasil dihapus');
    }
}
