<?php

namespace App\Http\Livewire\Login;

use Livewire\Component;

class Login extends Component
{
    // public $username;
    // public $password;

    // public function mount()
    // {
    //     if (session('stsLogin') == 1) {
    //         return redirect()->back();
    //     }
    // }

    public function render()
    {
        return view('dashboard.dash');
        // return view('livewire.login.login')->extends('layout.start')->section('main');
    }

    // public function loginUser()
    // {
    //     if ($this->username == 'user' && $this->password == 'pass') {
    //         session()->put('stsLogin', 1);
    //         session()->put('namaUser', $this->username);
    //         return redirect()->intended('admin/dashboard');
    //     } else {
    //         return redirect()->to('/');
    //     }
    // }

    // public function dashboard()
    // {
    //     return view('dashboard.dash');
    // }
}

