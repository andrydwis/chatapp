<div>
    @foreach($messages as $message)
    <div class="card">
        <div class="card-body">
            {{$message->content}}
        </div>
    </div>

    @endforeach
</div>