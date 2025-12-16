<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index(){
        $event = Event::latest()->paginate(10);
        return view("dashboard-event", compact("event"));
    }
    public function create(){
        return view("input.event");
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('input.event', compact('event'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'desc'  => 'required|string',
            'date'  => 'required|date',
            'photo' => 'required|image|mimes:jpg,jpeg|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('events', 'public');
        }

        Event::create([
            'name'  => $request->name,
            'desc'  => $request->desc,
            'date'  => $request->date,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.event')->with('success', 'Event berhasil ditambahkan!');
    }
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:255',
            'desc'  => 'required|string',
            'date'  => 'required|date',
            'photo' => 'nullable|image|mimes:jpg,jpeg|max:2048',
        ]);

        $photoPath = $event->photo;

        if ($request->hasFile('photo')) {
            if ($event->photo && \Storage::disk('public')->exists($event->photo)) {
                \Storage::disk('public')->delete($event->photo);
            }

            $photoPath = $request->file('photo')->store('events', 'public');
        }

        $event->update([
            'name'  => $request->name,
            'desc'  => $request->desc,
            'date'  => $request->date,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.event')->with('success', 'Event berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->photo && \Storage::disk('public')->exists($event->photo)) {
            \Storage::disk('public')->delete($event->photo);
        }

        $event->delete();

        return redirect()->back()->with('success', 'Event berhasil dihapus!');
    }
}
