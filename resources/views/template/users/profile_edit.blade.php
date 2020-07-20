@extends('template.default')

@section('content')
    <div class="">
        <div class="">
            <h3>Profile edit.</h3>
        </div>

        <div class="">
            @include('template.partials.forms.user_profile_form')
        </div>
    </div>
@endsection

