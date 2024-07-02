<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image; // Pastikan ini diimpor jika Anda menggunakan library Image

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.project.index', [
            'projects' => Project::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.project.create');
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
        $request->file('image')->storeAs('public/project', $fileName);

        Project::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'subjudul' => $request->subjudul,
        ]);

        return redirect(route('project'))->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.project.edit', [
            'project' => $project
        ]);
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);

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
            'image.required' => 'Image wajib diisi!',
            'subjudul.required' => 'Subjudul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        if ($request->hasFile('image')) {
            if (\File::exists('storage/project/' . $project->image)) {
                \File::delete('storage/project/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/project', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        $project->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'subjudul' => $request->subjudul,
        ]);

        return redirect(route('project'))->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        if (\File::exists('storage/project/' . $project->image)) {
            \File::delete('storage/project/' . $project->image);
        }

        $project->delete();

        return redirect(route('project'))->with('success', 'Data berhasil dihapus');
    }
}
