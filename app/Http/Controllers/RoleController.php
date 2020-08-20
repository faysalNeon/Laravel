<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('role.index');
    }
    public function create()
    {
        return view('role.create');
        //
    }
    public function store(Request $req)
    {
        Role::new_data($req);
        return view('role.store');
    }

    public function show($id)
    {
        //
    }



    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function notun(){

    }
}
