<?php

namespace App\Livewire\AdminPanel\Address;

use App\Models\Address as ModelsAddress;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Address Management")]

class Address extends Component
{
    public $address, $contact, $email, $facebook, $twitter, $linkedin, $map;

    public function update_address()
    {
        $this->validate([
            "address" => "required|max:255",
            "contact" => "required|max:15",
            "email" => "required|max:255|email",
            "facebook" => "required|max:255|url:https",
            "twitter" => "required|max:255|url:https",
            "linkedin" => "required|max:255|url:https",
            "map" => "required|url:https",
        ]);

        $address = ModelsAddress::first();
        if (!is_null($address)) {
            $address->address = $this->address;
            $address->contact = $this->contact;
            $address->email = $this->email;
            $address->facebook = $this->facebook;
            $address->twitter = $this->twitter;
            $address->linkedin = $this->linkedin;
            $address->map = $this->map;
            $address->update();
        }

        $this->reset(['address', 'contact', 'email', 'facebook', 'twitter', 'linkedin', 'map']);

        $this->dispatch(
            "bs-modal-hide",
            name: "addressModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "Address Information Updated."
        );
    }
    public function render()
    {
        $address = ModelsAddress::first();
        if (!is_null($address)) {
            $this->address = $address->address;
            $this->contact = $address->contact;
            $this->email = $address->email;
            $this->facebook = $address->facebook;
            $this->twitter = $address->twitter;
            $this->linkedin = $address->linkedin;
            $this->map = $address->map;
        }
        return view('livewire.admin-panel.address.addresses');
    }
}
