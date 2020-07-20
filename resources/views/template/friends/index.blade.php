@extends('template.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-4">
                <h3>My friends</h3>
            </div>

            @if($friends)
                @if(!$friends->count())
                    <h6>You have not friends</h6>
                @else
                    @foreach($friends as $user)
                        @include('template._crumbs._friends_block')
                    @endforeach
                @endif
            @endif
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <h4>Friend requests</h4>
            </div>

            @if($requests)
                @if(!$requests->count())
                    <p>requests <strong>0</strong></p>
                @else
                    @foreach($requests as $user)
                        @include('template._crumbs._friends_block')
                    @endforeach
                @endif
            @endif

        </div>
    </div>
@endsection








