<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
    function create(Request $request){
        //validate Inputs
        $request->validate([

            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|numeric',
            'role' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //Insert Admin in table
        $user = new User();
          $user->name = $request->name;
          $user->last_name = $request->last_name;
          $user->email = $request->email;
          $user->phone_number = $request->phone_number;
          $user->role = $request->role; 
          $user->password = Hash::make($request->password);
          
          $save = $user->save();

          if( $save ){
            Toastr::success('Registered Successfully','Success');
              return redirect()->route('user-tab');
            //   return redirect()->route('admin.admin-tab')->with('success','New admin has been registered successfully');
          }else{
            Toastr::error('Something went wrong, failed to register', 'Error');
              return redirect()->back();
            //   return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    function index(){
      $users = User::all();
      return view('admin.user-management.index',compact('users'));
  }

  //Destroy Data
    function destroy($id){
      $users = User::find($id);
      $delete = $users -> delete();

      if( $delete ){
          Toastr::success('Account has been deleted successfully','Success');
          return redirect()->back();
          // return redirect()->route('admin.admin-tab')->with('success','Account has been deleted successfully');
      }else{
          Toastr::error('Something went wrong, failed to delete', 'Error');
          return redirect()->back();
          // return redirect()->back()->with('fail','Something went wrong, failed to delete');
      }
      
    }

    function edit($id){
      $user = User::find($id);
      return view('admin.user-management.edit',compact('user'));
  }

  function update(Request $request, $id){
    //validate Inputs
    $request->validate([

        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => "required|string|email|max:255|unique:users, $id",
        'phone_number' => 'required|numeric',
        'role' => 'required',
        'password' => 'required|string|min:8|confirmed',
    ]);

    //Insert Admin in table
    $user =  User::find($id);
      $user->name = $request->name;
      $user->last_name = $request->last_name;
      $user->email = $request->email;
      $user->phone_number = $request->phone_number;
      $user->role = $request->role; 
      $user->password = Hash::make($request->password);
      
      $save = $user->save();

      if( $save ){
        Toastr::success('Update Successfully','Success');
          return redirect()->route('user-tab');
        //   return redirect()->route('admin.admin-tab')->with('success','New admin has been registered successfully');
      }else{
        Toastr::error('Something went wrong, failed to register', 'Error');
          return redirect()->back();
        //   return redirect()->back()->with('fail','Something went wrong, failed to register');
    }
}

}
