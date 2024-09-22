<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'textarea' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->textarea,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    public function index(Request $request)
    {
        $contacts = Contact::all();
        return view('Admin.contact',compact('contacts'));
    }
    public function destroy(Request $request,$id){

        $contact = Contact::find($id);

        if(empty($contact)){

        $request->session()->flash('error','Contact Not Found');

        return response()->json([
            'status' => false,
            'msg' =>'Contact Not  Found',
        ]);
        }
      
        $contact->delete();

        $request->session()->flash('success','Contact Delete Successfully');
        return response()->json([
            'status' => true,
            'msg' =>'Contact Delete Successfully',
        ]);


    }
}
