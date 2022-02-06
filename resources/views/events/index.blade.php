
    @extends("layouts.app")

    @section("content")
        <div class="container">

            @if (session('info'))
                <div class="alert alert-info">
                    {{ session('info') }}
                </div>
            @endif

            {{ $events->links() }}

            @foreach($events as $event)
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $event->title }}
                        </h5>
                        <div class="card-subtitle mb-2 text-muted small">
                            {{ $event->created_at->diffForHumans() }}
                        </div>
                        <p class="card-text">
                            {{ $event->body }}
                        </p>
                        <a href="{{ url("/events/detail/$event->id") }}"
                            class="card-link">View Detail &laquo;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
