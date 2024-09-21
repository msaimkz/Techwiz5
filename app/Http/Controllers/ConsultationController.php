<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::all(); 
        return view('Designer.consultation.index', compact('consultations')); 
    }
    public function create()
    {
        return view('Designer.consultation.create');
    }

   public function store(Request $request)
   {
       $validatedData = $request->validate([
           'available_days' => 'required|array',
           'available_days.*' => 'string',
           'available_time_slots' => 'required|array',
           'available_time_slots.*' => 'date_format:H:i'
       ]);

       $consultation = new Consultation();
       $consultation->user_id = auth()->id(); 
       $consultation->days = implode(', ', $validatedData['available_days']);
       $consultation->time = json_encode($validatedData['available_time_slots']); 
       $consultation->save();

       return redirect()->route('consultations.create')->with('success', 'Consultation created successfully!');
   }

}
