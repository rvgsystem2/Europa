<?php

namespace App\Http\Controllers;

use App\Models\Exam_schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Exam_scheduleController extends Controller
{
    public function index()
    {
        $exam_schedules = Exam_schedule::latest()->get();
        return view('Backend.Exam_schedule.index', compact('exam_schedules'));
    }

    public function create()
    {
        return view('Backend.Exam_schedule.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'exam_name' => 'required|string|max:255',
            'exam_date' => 'required|date',
            'image' => 'required|image|max:2048',
        ]);

        $data['image'] = $request->file('image')->store('exam_schedules', 'public');

        Exam_schedule::create($data);

        return redirect()->route('exam_schedule.index')->with('success', 'Exam schedule created successfully.');
    }

    public function edit($id)
    {
        $exam_schedules = Exam_schedule::findOrFail($id);
        return view('Backend.Exam_schedule.edit', compact('exam_schedules'));
    }

    public function update(Request $request, $id)
    {
        $exam_schedule = Exam_schedule::findOrFail($id);

        $data = $request->validate([
            'exam_name' => 'required|string|max:255',
            'exam_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($exam_schedule->image && Storage::disk('public')->exists($exam_schedule->image)) {
                Storage::disk('public')->delete($exam_schedule->image);
            }

            $data['image'] = $request->file('image')->store('exam_schedules', 'public');
        }

        $exam_schedule->update($data);

        return redirect()->route('exam_schedule.index')->with('success', 'Exam schedule updated successfully.');
    }

    public function destroy(Exam_schedule $exam_schedule)
    {
        if ($exam_schedule->image && Storage::disk('public')->exists($exam_schedule->image)) {
            Storage::disk('public')->delete($exam_schedule->image);
        }

        $exam_schedule->delete();

        return redirect()->route('exam_schedule.index')->with('success', 'Exam schedule deleted successfully.');
    }
}
