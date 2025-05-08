<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Galleries;
use App\Models\Events;

class galleryController extends Controller
{
    public function index()
    {
        $gallery = Galleries::paginate(10);

        return view('dashboard.dashboardGalleres.index', compact('gallery'));
    }

    public function create()
    {
        $events = Events::all();
        return view('dashboard.dashboardGalleres.create', compact('events'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $gallery = new Galleries;
        $gallery->activity = $request->input('activity');
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
            $file = $request->file('image');
            $destinationPath = public_path('images');
            $viewimage = 'images/';         
            $filename = $viewimage.$file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            $gallery->image = $filename;
            // THIS TO SAVE  Settings UPDATE //
            $gallery->save(); 
        }else{
            $gallery->save();  
        }
        $gallery->save();

        return redirect()->TO('galleries')->with('Success','Gallery created successfully.');
    }

    public function destroy($id)
    {
        // Gallery Delete
        $gallery = Galleries::findOrFail($id);
        File::delete($gallery->image);
        $gallery->delete();
        return redirect()->to('events')->with('Deleted','Gallery Deleted successfully');
    }
}
