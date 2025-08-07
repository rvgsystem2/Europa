<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('Backend.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('Backend.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imagePath = $request->file('image')->store('banners', 'public');

        Banner::create([
            'image' => $imagePath
        ]);

        return redirect()->route('banner.index')->with('success', 'Banner uploaded successfully.');
    }

    public function edit($id)
    {
        // dd($banner);
        $banners = Banner::findOrFail($id);
        if (!$banners) {
            return redirect()->route('banner.index')->with('error', 'Banner not found.');
        }
        // dd($banners);
        return view('Backend.banner.edit', compact('banners'));
    }

    public function update(Request $request, Banner $id)
    {
        // dd(request()->all());
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($id->image && Storage::disk('public')->exists($id->image)) {
                Storage::disk('public')->delete($id->image);
            }

            $imagePath = $request->file('image')->store('$ids', 'public');
            $id->update(['image' => $imagePath]);
        }

        return redirect()->route('banner.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image && Storage::disk('public')->exists($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully.');
    }
}


