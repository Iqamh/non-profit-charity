<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Causes;
use App\Models\Donates;

class UserCausesController extends Controller
{
    public function index()
    {
        //To Get All Event active OUT SIDE IN HOME VIEW
        $causes = Causes::paginate(9);
        
        return view('wPage.Causes.index', compact('causes'));
    }

    public function show($id)
    {
        //To Get Event 
        $causes = Causes::findOrFail($id);
        return view('wPage.Causes.show', compact('causes'));
    }

    public function store(Request $request, $id)
    {
        // Menambahkan nilai donasi baru ke total donasi pada Tabel Causes
        $causes = Causes::findOrFail($id);
        $newDonationAmount = $causes->donation + $request->amount;
        $causes->donation = $newDonationAmount;
        $causes->save();

        // Simpan data donasi ke dalam Tabel Donates
        $donate = new Donates;
        $donate->u_nama = Auth::user()->name;
        $donate->title = $causes->title;
        $donate->donation_amount = $request->amount;
        $donate->save();

        return redirect()->back()->with('Messagge', 'Message');
    }
}
