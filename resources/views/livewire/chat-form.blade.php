<div>
    <div class="card">
        <div class="card-header">
            <h4>Chat Room</h4>
        </div>
        <div class="card-body p-3" style="height:250px; overflow-y:scroll">
            @livewire('chat-list')
        </div>
        <div class="card-footer">
            <form wire:submit.prevent="send">
                <div class="row">
                    <div class="col-lg-10 mt-3">
                        <input type="text" class="form-control @error('message') is-invalid @enderror" wire:model.lazy="message">
                        @error('message')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-2 mt-3">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>