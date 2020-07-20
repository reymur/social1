@extends('template.default')

@section('content')
    <div class="mb-5">
        <h3>Profile.</h3>
    </div>

    <div class="row">
        <div class="row ml-2 col-lg-5">
            @include('template._crumbs._user_profile')
        </div>

        <div class="col-lg-4 col-lg-offset-3">
            <h4>Friends:</h4>
            <h6>You have <strong>{{ $user->first()->friends()->count() }}</strong> friend.</h6>

            <hr>

            @if($user->first()->friends()->count())
                @foreach($user->first()->friends() as $user)
                    @include('template._crumbs._friends_block')
                @endforeach
            @endif
        </div>
    </div>
@endsection

