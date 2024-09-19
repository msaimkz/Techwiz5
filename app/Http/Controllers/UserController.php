<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\Alpha;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create'); // User creation form
    }

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(),[
            'name' => [ 'required','min:3', new Alpha],
            'email' => 'required',
            'contact' => 'required|numeric|digits:11',
            'password' => 'required|min:8|confirm',
            'password_confirmation' => 'required|min:8'
    
           ]);

           if($validator->passes()){
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'password' => bcrypt($request->password),
            ]);
           }
           else{
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);

           }

       

       
    }

    public function edit(User $user)
    {
        return view('Admin.users.edit', compact('user')); // User edit form
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update([    
        'name' => $request->name,
        'email' => $request->email,
        'contact' => $request->contact,
        'password' => bcrypt($request->password),]);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    
    public function destroy(Request $request,$id){

        $user = User::find($id);

        if(empty($user)){

        $request->session()->flash('error','User Not Found');

        return response()->json([
            'status' => false,
            'msg' =>'User Not  Found',
        ]);
        }

        $user->delete();

        $request->session()->flash('success','User Delete Successfully');
        return response()->json([
            'status' => true,
            'msg' =>'User Delete Successfully',
        ]);


    }
}