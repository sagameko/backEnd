<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function getAllAccount()
    {
        $Account = Account::all();
        return response()->json($Account);
    }
}
