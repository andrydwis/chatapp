<div>
    @foreach($messages as $message)
    <div class="card mb-1">
        <div class="card-header">
            {{$message->created_at->diffForHumans()}}
        </div>
        <div class="card-body">
            {{$message->content}}
        </div>
    </div>

    @endforeach
</div>