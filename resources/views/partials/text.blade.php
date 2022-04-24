@include('partials.errors',['type' => 'text_request'])
<form action="{{route('text-store')}}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-auto">
            <label for="text-area" class="form-label">Text input</label>
            <textarea name="text-area" id="text-area" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>
    <div class="row g-3 mt-2">
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Store</button>
        </div>
    </div>
</form>
@if(!empty($vc_text_array))
    <div class="alert alert-primary">
        <ul>
            @foreach($vc_text_array as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
@endif
