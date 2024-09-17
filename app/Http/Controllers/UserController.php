<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // add new contact
    public function addUser(Request $request){
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'number_phone' => 'required|string|regex:/^\+212/',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        DB::table('users')->insert([
            'name' => $validation['name'],
            'number_phone' => $validation['number_phone'],
            'email' => $validation['email'],
        ]);

        return redirect('get-all-contact');
    }
    // select all contacts
    public function getUsers(){
        $allContacts = DB::select('SELECT * FROM users');
        return view('GetContacts',compact('allContacts'));

    }
    // get edit form 
    public function editUser($id){

        $user = DB::select("SELECT * FROM users WHERE `id`=$id ");

        return view("EditContact", compact('user'));
    }

    // update contact
    public function updateUser(Request $request, $id){

        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|regex:/^\+212\d{9,}$/',
            'email' => 'required|string|email|max:255|',
        ]);

        DB::update("UPDATE users SET `name`='$request->name', `number_phone`='$request->phone_number', `email`='$request->email' 
                    WHERE `id`= $id ;");

        

        return redirect('/get-all-contact');

    }


    // delete contact
    public function deleteUser($id){
        DB::delete("DELETE FROM users WHERE `id` = $id");
        return redirect('get-all-contact');
    }

    
}
