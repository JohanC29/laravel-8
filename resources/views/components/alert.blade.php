<div class="alert alert-{{$tipo}} alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">TutoBlog!</h4>
    <p>
        @if (is_object($mensaje))
    <ul>
        @foreach ($mensaje->all() as $error )
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @else
    {{$mensaje}}
    @endif
    </p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

