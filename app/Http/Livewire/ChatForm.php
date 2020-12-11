<?php

namespace App\Http\Livewire;

use App\Events\NewMessage;
use App\Models\Message;
use Livewire\Component;

class ChatForm extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.chat-form');
    }

    public function send()
    {
        $this->validate([
            'message' => 'required'
        ]);

        $message = new Message();
        $message->user_id = auth()->user()->id;
        $message->content = $this->message;
        $message->save();

        event(new NewMessage($message));

        $this->reset('message');
    }
}
