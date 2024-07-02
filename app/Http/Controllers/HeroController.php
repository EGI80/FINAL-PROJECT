<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\hero;
use Illuminate\Http\Request;

class heroController extends Controller
{
    //
    public function index()
    {
        return view('admin.hero.index', [
            'heros' => hero::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.hero.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'subjudul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',

        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'subjudul.required' => 'SubJudul wajib diisi!',
            'image.required' => 'Image wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);
        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/hero', $fileName);
        # Artikel
        $storage = "storage/content-hero";
        $dom = new \DOMDocument();
        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        // //desc awale
        // $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();



        hero::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'subjudul' => $request->subjudul,
        ]);

        return redirect(route('hero'))->with('Success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $hero = hero::find($id);
        return view('admin.hero.edit', [
            'hero' => $hero
        ]);
    }


    public function update(Request $request, $id)
    {
        $hero = hero::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'subjudul' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
            'subjudul.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/hero/' . $hero->image)) {
                \File::delete('storage/hero/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/hero', $fileName);
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
        $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
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

        $hero->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'subjudul' => $request->subjudul,
        ]);

        return redirect(route('hero'))->with('success', 'data berhasil di update');
    }

    public function destroy($id)
    {
        $hero = hero::find($id);
        if (\File::exists('storage/hero/' . $hero->image)) {
            \File::delete('storage/hero/' . $hero->image);
        }

        $hero->delete();

        return redirect(route('hero'))->with('success', 'Data berhasil dihapus');
    }
}
