<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use App\Models\Message;
use Livewire\Component;
use Ramsey\Collection\Collection;

class ConversationsMessageOwn extends Component
{

    public $message;

    public function mount(Message $message){

         $this->message = $message;
    }


    public function render()
    {
        return view('livewire.conversations.conversations-message-own');
    }
}
