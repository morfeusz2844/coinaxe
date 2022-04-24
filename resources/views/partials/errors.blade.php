@if ($errors->$type->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->$type->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
