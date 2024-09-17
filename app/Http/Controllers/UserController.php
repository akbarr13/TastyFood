<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        $page = "Users";

        Alert::confirmDelete("Delete User", "Are you sure want to delete this user?");

        return view("dashboard.pages.user", compact("page", "users"));
    }

    public function add(Request $request)
    {
        $user = new User();
        $user->name = $request->nama;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();

        toast('The user successfully added!', 'success');

        return redirect("/dashboard/users");
    }

    public function showUser($id)
    {
        $user = User::find($id);
        $type = 'edit';
        $page = 'Edit User';
        return view("dashboard.action.user", compact("user", "type", "page"));
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->nama;
        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->filled("password")) {
            $user->password = bcrypt($request->password);
        }
        $user->role = $request->role;
        $user->save();

        toast('The user successfully edited!', 'success');

        return redirect("/dashboard/users");
    }

    public function delete ($id){
        $user = User::find($id);
        $user->delete();

        toast("The user successfully deleted!","success");

        return redirect()->back();
    }
}
