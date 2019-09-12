<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Account; // For database queries, so you don't have to type \App\Account::all();

class SenjuController extends Controller
{
    public function index() {
        $accounts = Account::all();
        return view('login', compact('accounts')); 
        // return view('login');
    }

    public function sample() {
        return view('SamplePage2');
    }

    public function webreports() {
        return view('WebReports');
    }

    public function webreportspost() {
        
        $accounts = Account::all()->where('username', request('username'))->where('password', request('password'));
        // return ($accounts); -- Used to show page with raw json
        return view('/webreports', compact('accounts'));
    }

    public function edituser() {
        $accounts = Account::all();
        return view('EditUser', compact('accounts'));
    }

    public function edituserpost() {
        $user = request('selectUser');
        $account = Account::all()->where('username', $user);
        return view('EditUserValues', compact('account'));
    }

    public function editusercomplete() {
        $user = request('userBeingChanged');
        $account = Account::where('username', $user)->first();
        $account->update([
            'username' => request('username'), 
            'password' => request('password'),
            'active' => request('active')
        ]);
        return redirect('/');
    }

    public function createAcc() {
        return view('createacc');
    }

    public function storeAcc() {
        $account = new Account();

        $account->username = request('username');
        $account->password = request('password');
        $account->active = request('active');
        $account->save();

        return redirect('/');
    }
}
