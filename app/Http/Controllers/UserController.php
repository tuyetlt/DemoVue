<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(string $id)
    {
        return User::findOrFail($id);
    }
    public function index()
    {
        $users = User::
            join('department', 'users.department_id', '=', 'department.id')
            ->join('users_status', 'users.status_id', '=', 'users_status.id')
            ->select(
                'users.*', 
                'department.name as departments', 
                'users_status.name as status')
            ->paginate();
        
        return response() ->json($users);
    }
    public function create(){
        try{
            $users_status = \DB::table("users_status")->get();
            $departments = \DB::table("department")->get();
            return response() -> json([
                "users_status" => $users_status,
                "departments"=> $departments
            ]);
        }catch(\Throwable $th){
            dd($th->getMessage());
        }
       
    }
}
