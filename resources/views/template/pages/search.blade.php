@extends('template.default')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 ">
            <h2> Search results: "{{ $result ?? 'Not results!' }}" </h2>

            <div class="mt-5">
                @include('template.users.block')
            </div>
        </div>
    </div>
@endsection
