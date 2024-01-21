<?php

namespace App\Livewire\AdminPanel\Messages;

use App\Models\Message;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout("AdminPanel.index")]
#[Title("Message Management")]

class MessageList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $id, $name, $email, $subject, $fullMessage;

    public function details_message($id)
    {
        $message = Message::find($id);
        $this->id = $message->id;
        $this->name = $message->name;
        $this->email = $message->email;
        $this->subject = $message->subject;
        $this->fullMessage = $message->message;

        if ($message->status == 0) {
            $message->status = '1';
            $message->update();

            $this->dispatch(
                "alert",
                type: "success",
                title: "Message is Readed."
            );
        }
    }

    public function status($id)
    {
        $message = Message::find($id);
        if (!is_null($message)) {
            $status = ($message->status == 0) ? 1 : 0;
            $message->status = "$status";
            $message->update();

            $this->dispatch(
                "alert",
                type: ($status == 1) ? "success" : "error",
                title: ($status == 1) ? "Message is Readed." : "Message is not Readed."
            );
        }
    }

    public function open_delete_modal($id)
    {
        $this->id = $id;
    }

    public function delete_message($id)
    {
        $message = Message::find($id);
        if (!is_null($message)) {
            $message->delete();
        }

        $this->reset("id");

        $this->dispatch(
            "alert",
            type: "success",
            title: "Message Deleted."
        );
    }

    public function render()
    {
        $messages = Message::orderBy("status", "asc")->paginate(5);
        return view('livewire.admin-panel.messages.message-list')->with(compact("messages"));
    }
}
