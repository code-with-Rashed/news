<?php

namespace App\Livewire\VisitorPanel;

use App\Models\Message;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('VisitorPanel.index')]
#[Title('Contact Us')]

class Contact extends Component
{
    public $name, $email, $subject, $message;

    public function contact_us()
    {
        $this->validate([
            "name" => "required|max:40",
            "email" => "required|email|max:50",
            "subject" => "required|max:150",
            "message" => "required|max:250",
        ]);

        $message = new Message();
        $message->name = $this->name;
        $message->email = $this->email;
        $message->subject = $this->subject;
        $message->message = $this->message;
        $message->save();

        $this->reset(['name', 'email', 'subject', 'message']);

        $this->dispatch(
            "alert",
            type: "success",
            title: "Your message successfully send."
        );
    }
    
    public function render()
    {
        return view('livewire.visitor-panel.contact');
    }
}
