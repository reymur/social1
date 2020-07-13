@extends('template.default')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-md-10 col-lg-8 ">
            <h1>Welcome {{ Auth::user()->login ?? '' }} {{ env('APP_NAME') }}</h1>
            <p class="ml-2"><cite>stay in touch with friends...</cite></p>

            <div class="justify-content-center col-sm-12 col-lg-4">
                <img class="phone" src="{{ asset('/images/phone3.1.jpg') }}" alt="Phone">
            </div>
        </div>
    </div>
@endsection
