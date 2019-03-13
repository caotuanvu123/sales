<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(session('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">
                {{ session('alert-' . $msg) }}
            </div>
        @endif
    @endforeach
</div>
