
@if(Session::has('info'))
    <div class="alert alert-primary" role="alert">
        {{ session()->get('info') }}
    </div>
@endif



