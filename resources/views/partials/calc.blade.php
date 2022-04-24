@include('partials.errors',['type' => 'calc_request'])
<form action="{{route('calc')}}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-auto">
            <label for="first_number" class="form-label">First number</label>
            <input type="number" class="form-control" name="first_number" id="first_number">
        </div>
        <div class="col-auto">
            <label for="second_number" class="form-label">Second number</label>
            <input type="number" class="form-control" id="second_number" name="second_number">
        </div>
    </div>
    <div class="row g-3 mt-2">
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Sum</button>
        </div>
    </div>
</form>
@if(session()->has('calc_result'))
    <div class="alert alert-primary" role="alert">
        Result: {{session()->get('calc_result')}}
    </div>
@endif
