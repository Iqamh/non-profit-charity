<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Volunteer;

class UserEventController extends Controller
{
    public function index()
    {
        //To Get All Event active OUT SIDE IN HOME VIEW
        $events = Events::paginate(4);
        
        return view('wPage.Events.index', compact('events'));
    }

    public function show($id)
    {
        //To Get Event 
        $events = Events::findOrFail($id);
        return view('wPage.Events.show', compact('events'));
    }

    public function reg($id)
    {
        $events = Events::findOrFail($id);
        return view('wPage.Events.regv', compact('events'));
    }

    public function store(Request $request)
    {
        // Validate
        $this->validate($request, [
            'file' => 'required|mimes:pdf',
        ]);
        
        $volunteer = new Volunteer;
        $volunteer->u_nama = Auth::user()->name;
        $volunteer->title = $request->input('title');
        $volunteer->nama = $request->input('name');
        $volunteer->email = $request->input('email');
        $volunteer->phone = $request->input('phone');
        $volunteer->address = $request->input('address');
        $volunteer->reason = $request->input('Content');

        // Saving File
        if ($request->file('file')){  
            $file = $request->file('file');
            $destinationPath = public_path('file');
            $viewfile = 'file/';         
            $filename = $viewfile.$file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            $volunteer->file = $filename;
            // THIS TO SAVE  Settings UPDATE //
            $volunteer->save(); 
          }else{
            $volunteer->save();  
          }
        
        $volunteer->save();

        return redirect()->back()->with('Messagge', 'Message');
    }
}
