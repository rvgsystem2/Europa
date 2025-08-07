<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AboutController extends Controller
{

        public function index()
        {
            $abouts = About::latest()->get();
            return view('Backend.About.index', compact('abouts'));
        }

        public function create()
        {
            return view('Backend.About.create');
        }

        public function store(Request $request)
        {
            $data = $request->validate([
                'title' => 'required|string|max:255',
                'about_text' => 'required|string',
                'description' => 'required|string',
                'image' => 'required|image|max:2048',
            ]);

            $data['image'] = $request->file('image')->store('abouts', 'public');

            About::create($data); // This line must include all required fields

            return redirect()->route('about.index')->with('success', 'About created successfully.');
        }


        public function edit($id)
        {
            // dd($banner);
            $abouts = About::findOrFail($id);
            if (!$abouts) {
                return redirect()->route('about.index')->with('error', 'About not found.');
            }
            // dd($banners);
            return view('Backend.About.edit', compact('abouts'));
        }

        public function update(Request $request, About $id)
        {
            // dd(request()->all());
            $request->validate([
                'title' => 'required|string|max:255',
                'about_text' => 'required|string',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
            ]);
// dd($request->all());

$updateData = $request->only(['title', 'about_text', 'description']);


            if ($request->hasFile('image')) {
                if ($id->image && Storage::disk('public')->exists($id->image)) {
                    Storage::disk('public')->delete($id->image);
                }

                $imagePath = $request->file('image')->store('$ids', 'public');
                $id->update(['image' => $imagePath]);
            }
            // $id->update($request->all); // Update other fields

            return redirect()->route('about.index')->with('success', 'About updated successfully.');
        }

        public function destroy(About $about)
        {
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }

            $about->delete();

            return redirect()->route('about.index')->with('success', 'About deleted successfully.');
        }


 }
