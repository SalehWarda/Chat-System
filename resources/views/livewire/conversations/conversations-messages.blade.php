<div>


@foreach($messages as $message)

    @if($message->isOwn())

        <!-- Reciever Message-->

            <livewire:conversations.conversations-message-own :message="$message" :key="$message->id"/>

    @else

        <!-- Sender Message-->

            <livewire:conversations.conversations-message :message="$message" :key="$message->id"/>

        @endif


    @endforeach

</div>













