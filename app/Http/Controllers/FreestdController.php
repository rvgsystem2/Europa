<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freestd;
use Illuminate\Support\Facades\Storage;

class FreestdController extends Controller
{

        public function index()
        {
            $freestds = Freestd::latest()->get();
            return view('Backend.freestd.index', compact('freestds'));
        }

        public function create()
        {
            return view('Backend.freestd.create');
        }

        public function store(Request $request)
        {
            $data = $request->validate([
                'title' => 'required|string|max:255',
                'image' => 'required|image|max:2048',
            ]);

            $data['image'] = $request->file('image')->store('freestds', 'public');

            Freestd::create($data);

            return redirect()->route('freestd.index')->with('success', 'Exam schedule created successfully.');
        }

        public function edit($id)
        {
            $freestds = Freestd::findOrFail($id);
            return view('Backend.freestd.edit', compact('freestds'));
        }

        public function update(Request $request, $id)
        {
            $freestd = Freestd::findOrFail($id);

            $data = $request->validate([
                'title' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            if ($request->hasFile('image')) {
                if ($freestd->image && Storage::disk('public')->exists($freestd->image)) {
                    Storage::disk('public')->delete($freestd->image);
                }

                $data['image'] = $request->file('image')->store('freestds', 'public');
            }

            $freestd->update($data);

            return redirect()->route('freestd.index')->with('success', 'free for students updated successfully.');
        }

        public function destroy(freestd $freestd)
        {
            if ($freestd->image && Storage::disk('public')->exists($freestd->image)) {
                Storage::disk('public')->delete($freestd->image);
            }

            $freestd->delete();

            return redirect()->route('freestd.index')->with('success', 'free for students deleted successfully.');
        }
    }

