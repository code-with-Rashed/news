<?php

namespace App\Livewire\VisitorPanel;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterLogin extends Component
{
    public $name, $email, $password, $password_confirmation;

    // login here
    public function login()
    {
        $this->validate([
            "email" => "required|max:60|email",
            "password" => "required|min:5|max:50"
        ]);

        $this->dispatch(
            "bs-modal-hide",
            name: "loginModal"
        );

        $user = User::where('email', $this->email)->where('status', 1)->first();
        if (!is_null($user)) {
            if (Hash::check($this->password, $user->password)) {
                session(["user" => [
                    "id" => $user->id,
                    "name" => $user->name,
                    "photo" => $user->photo
                ]]);
                $this->dispatch(
                    "alert",
                    type: "success",
                    title: "Hi " . $user->name . " Login Successfull ."
                );
            }
        } else {
            $this->dispatch(
                "alert",
                type: "error",
                title: "Authentication Failure !!"
            );
        }

        $this->resetProperties();

        return redirect()->route('user.dashboard');
    }

    // register here
    public function register()
    {
        $this->validate([
            "name" => "required|max:50",
            "email" => "required|max:60|email|unique:users,email",
            "password" => "required|min:5|max:50|confirmed",
            "password_confirmation" => "required|min:5|max:50"
        ]);

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();

        session(["user" => [
            "id" => $user->id,
            "name" => $this->name,
            "photo" => 'user.jpg'
        ]]);

        $this->dispatch(
            "bs-modal-hide",
            name: "registerModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "Registration Successfull ."
        );

        $this->resetProperties();

        return redirect()->route('user.dashboard');
    }

    // reset public properties
    public function resetProperties()
    {
        $this->reset(['name', 'email', 'password', 'password_confirmation']);
    }

    public function render()
    {
        return view('livewire.visitor-panel.register-login');
    }
}
