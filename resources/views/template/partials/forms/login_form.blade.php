<h3 class="mx-auto">Registration</h3>

<div class="row mt-4 mb-5">
    <div class="col-lg-4">
        <img class="phone-register" src="{{ asset('images/phone3.1.jpg') }}" alt="Phone">
    </div>

    <div class="col-lg-4 ml-center">

        <form action="{{ route('login.store') }}" method="post" class="mx-center" novalidate>
            @csrf()

            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control {{ $errors->has('login') ? 'is-invalid': '   ' }}" id="login" value="{{ old('login') }}" placeholder="your login...">

                @if($errors->has('login'))
                    <apan class="invalid-feedback">{{ $errors->first('login') }}</apan>
                @endif
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid': ''}}" id="email" placeholder="your password...">

                @if($errors->has('password'))
                    <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="col-auto my-1 mb-3">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox"  name="remember" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>

    </div>
</div>
