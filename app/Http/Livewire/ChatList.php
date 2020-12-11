<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class ChatList extends Component
{

    public $messages;

    protected $listeners = ['echo:chat,NewMessage' => 'fetch'];

    public function mount()
    {
        $this->messages = Message::all();
    }

    public function render()
    {
        return view('livewire.chat-list');
    }

    public function fetch()
    {
        $this->messages = Message::all();
    }
}
