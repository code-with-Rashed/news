<?php

namespace App\Livewire\AdminPanel\Login;

use App\Models\Writer;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("AdminPanel.login")]

class Login extends Component
{
    public $email, $password;
    public function login()
    {
        $this->validate([
            "email" => "required|email|max:100",
            "password" => "required|max:100"
        ]);

        $writer = Writer::where("email", $this->email)->where("status", '1')->first();

        if (!is_null($writer)) {
            if (Hash::check($this->password, $writer->password)) {
                session(["admin" => [
                    "id" => $writer->id,
                    "name" => $writer->name,
                    "photo" => $writer->photo,
                    "role" => $writer->role,
                ]]);
                return redirect()->route("admin.dashboard");
            }
        }
        $this->dispatch(
            "alert",
            type: "error",
            title: "Authentication Failure !!"
        );
    }
    public function render()
    {
        return view('livewire.admin-panel.login.login');
    }
}
