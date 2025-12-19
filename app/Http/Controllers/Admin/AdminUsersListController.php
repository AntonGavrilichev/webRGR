<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUsersListController extends Controller
{
    function index() {
        $users = User::all();
        return view('admin.adminUsersList', compact('users'));
    }
}
