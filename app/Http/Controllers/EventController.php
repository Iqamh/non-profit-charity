<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Events;
use File;

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
        if ($request->file('image')){  
            $file = $request->file('image');
            $destinationPath = public_path('images');
            $viewimage = 'images/';         
            $filename = $viewimage.$file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            $event->image = $filename;
            // THIS TO SAVE  Settings UPDATE //
            $event->save(); 
          }else{
            $event->save();  
          }
        
        $event->save();

        return redirect()->to('events')->with('Success','event created successfully.');
    }

    public function edit($id)
    {
        //To Get All Event 
        $event = Events::findOrFail($id);
        return view('dashboard.dashboardEvents.edit',compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Events::findOrFail($id);
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $event->Title = $request->input('Title');
        $event->Address = $request->input('Address');
        $event->Description = $request->input('Description');
        $event->Start = $request->input('Start');
        $event->End = $request->input('End');

        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
            File::delete($event->image);
            $file = $request->file('image');
            $destinationPath = public_path('images');
            $viewimage = 'images/';         
            $filename = $viewimage.$file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            $event->image = $filename;
            
            // THIS TO SAVE  Settings UPDATE //
            $event->save(); 
        }else{
            $event->save();  
        }
        $event->save();
        return redirect()->to('events')->with('Success','Event edited successfully.');
    }

    public function destroy($id)
    {
        // Event Delete
        $event = Events::findOrFail($id);
        File::delete($event->image);
        $event->delete();
        return back()->with('Delete','Event Deleted successfully');
    }
}
