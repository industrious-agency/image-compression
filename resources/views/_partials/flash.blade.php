<div class="flash-message">
    @foreach (['success', 'danger', 'warning', 'info'] as $message)
        @if(session()->has($message))

        <p class="alert alert-{{ $message }}">
            {{ session()->get($message) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </p>
        @endif
    @endforeach
</div>