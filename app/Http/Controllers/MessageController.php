<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller

{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('Backend.Message.index', compact('messages'));
    }

    public function create()
    {
        return view('Backend.Message.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'message_text' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $data['image'] = $request->file('image')->store('messages', 'public');

        Message::create($data); // This line must include all required fields

        return redirect()->route('message.index')->with('success', 'Message created successfully.');
    }


    public function edit($id)
    {
        // dd($banner);
        $messages = Message::findOrFail($id);
        if (!$messages) {
            return redirect()->route('message.index')->with('error', 'Message not found.');
        }
        // dd($banners);
        return view('Backend.Message.edit', compact('messages'));
    }

    public function update(Request $request, Message $id)
    {
        // dd(request()->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'message_text' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($id->image && Storage::disk('public')->exists($id->image)) {
                Storage::disk('public')->delete($id->image);
            }

            $imagePath = $request->file('image')->store('$ids', 'public');
            $id->update(['image' => $imagePath]);
        }

        return redirect()->route('message.index')->with('success', 'Message updated successfully.');
    }

    public function destroy(Message $message)
    {
        if ($message->image && Storage::disk('public')->exists($message->image)) {
            Storage::disk('public')->delete($message->image);
        }

        $message->delete();

        return redirect()->route('message.index')->with('success', 'Message deleted successfully.');
    }
}


