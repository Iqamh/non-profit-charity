<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Causes;
use File;

class CausesController extends Controller
{
    public function index()
    {
        $causes = Causes::paginate(10);

        return view('dashboard.dashboardCauses.index',compact('causes'));
    }

    public function create()
    {
        return view('dashboard.dashboardCauses.create');
    }

    public function store(Request $request)
    {
         //validate
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);
        $causes = new Causes;
        $causes->Title = $request->input('Title');
        $causes->goals = $request->input('Goals');
        $causes->Description = $request->input('Description');
        $causes->Start = $request->input('Start');
        $causes->End = $request->input('End');

        // Get the current user's usertype
        $usertype = Auth::user()->usertype;

        // Check if the user is an admin (usertype 1) and set the creator accordingly
        if ($usertype == 1) {
            $causes->creator = 'Admin'; // You can set the admin's name here or any specific identifier.
        } else {
            // For regular users, set the creator as the user's name
            $causes->creator = Auth::user()->name;
        }

        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
            $file = $request->file('image');
            $destinationPath = public_path('images');
            $viewimage = 'images/';         
            $filename = $viewimage.$file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            $causes->image = $filename;
            // THIS TO SAVE  Settings UPDATE //
            $causes->save(); 
          }else{
            $causes->save();  
          }
        
        $causes->save();

        return redirect()->to('causes')->with('Success','Causes created successfully.');
    }

    public function edit($id)
    {
        //To Get All Causes 
        $causes = Causes::findOrFail($id);
        return view('dashboard.dashboardCauses.edit',compact('causes'));
    }

    public function update(Request $request, $id)
    {
        $causes = Causes::findOrFail($id);
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $causes->Title = $request->input('Title');
        $causes->goals = $request->input('Goals');
        $causes->Description = $request->input('Description');
        $causes->Start = $request->input('Start');
        $causes->End = $request->input('End');

        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
            $file = $request->file('image');
            $destinationPath = public_path('images');
            $viewimage = 'images/';         
            $filename = $viewimage.$file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            $causes->image = $filename;
            // THIS TO SAVE  Settings UPDATE //
            $causes->save(); 
          }else{
            $causes->save();  
          }
        
        $causes->save();

        return redirect()->to('causes')->with('Success','Causes edited successfully.');
    }

    public function destroy($id)
    {
        // Causes Delete
        $causes = Causes::findOrFail($id);
        File::delete($causes->image);
        $causes->delete();
        return back()->with('Delete','Causes Deleted successfully');
    }
}
