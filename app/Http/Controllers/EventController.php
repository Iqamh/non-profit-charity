<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Volunteer;

class eventController extends Controller
{
    public function index()
    {
        $events = Events::paginate(10);

        return view('dashboard.dashboardEvents.index', compact('events'));
    }

    public function create()
    {
        return view('dashboard.dashboardevents.create');
    }

    public function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);
        $event = new Events;
        $event->Title = $request->input('Title');
        $event->Address = $request->input('Address');
        $event->Description = $request->input('Description');
        $event->Start = $request->input('Start');
        $event->End = $request->input('End');

        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')) {
            $file = $request->file('image');
            $destinationPath = public_path('images');
            $viewimage = 'images/';
            $filename = $viewimage . $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $event->image = $filename;
            // THIS TO SAVE  Settings UPDATE //
            $event->save();
        } else {
            $event->save();
        }

        $event->save();

        return redirect()->to('events')->with('Success', 'event created successfully.');
    }

    public function edit($id)
    {
        //To Get All Event 
        $event = Events::findOrFail($id);
        return view('dashboard.dashboardEvents.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Events::findOrFail($id);
        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);
        $event->Title = $request->input('Title');
        $event->Address = $request->input('Address');
        $event->Description = $request->input('Description');
        $event->Start = $request->input('Start');
        $event->End = $request->input('End');

        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')) {
            File::delete($event->image);
            $file = $request->file('image');
            $destinationPath = public_path('images');
            $viewimage = 'images/';
            $filename = $viewimage . $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $event->image = $filename;
        }

        $event->save();
        return redirect()->to('events')->with('Success', 'Event edited successfully.');
    }

    public function destroy($id)
    {
        $event = Events::findOrFail($id);
        File::delete($event->image);
        $event->delete();

        return redirect()->to('events')->with('Delete', 'Event Deleted successfully');
    }

    public function show($id)
    {
        $event = Events::findOrFail($id);
        $vols = Volunteer::where('title', $event->title)->paginate(10);

        return view('dashboard.dashboardEvents.show', compact('event', 'vols'));
    }

    public function upStatus(Request $request, $id)
    {
        $volunteer = Volunteer::findOrFail($id);

        $request->validate([
            'activity' => 'required|in:0,1,2',
        ]);

        $volunteer->status = $request->activity;
        $volunteer->save();

        return redirect()->back();
    }

    public function downloadPdf($filename)
    {
        // Hilangkan karakter "/" dari nama file
        $filename = str_replace('/', '', $filename);

        // Gabungkan alamat file dari database dengan direktori penyimpanan yang benar
        $file = public_path('file/' . $filename);

        // Periksa apakah file PDF ada
        if (file_exists($file)) {
            // Jika ada, kirimkan file PDF sebagai respon
            return response()->download($file);
        } else {
            // Jika tidak ada, kirimkan respon error 404
            abort(404);
        }
    }

    public function destroy2($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        File::delete($volunteer->file);
        $volunteer->delete();

        return redirect()->back()->with('Delete', 'Event Deleted successfully');
    }
}