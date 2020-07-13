
<div class="row mt-4 mb-5">
    <div class="col-lg-4">
        <img class="phone-register" src="{{ asset('images/phone3.1.jpg') }}" alt="Phone">
    </div>
    <div class="col-lg-4 ml-center">
        <form action="{{ route('register.store') }}" method="post" class="mx-center" novalidate>
            @csrf()
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control {{ $errors->has('login') ? 'is-invalid': '   ' }}" id="login" value="{{ old('login') }}" placeholder="your login">
                @if($errors->has('login'))
                    <apan class="invalid-feedback">{{ $errors->first('login') }}</apan>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid': ''}}" id="email" value="{{ old('email') }}" placeholder="your email">
                @if($errors->has('email'))
                    <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid': '' }}" id="password" placeholder="min 6 symbols">
                <div class="invalid-feedback">
                    @if($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password Confirmation</label>
                <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="min 6 symbols">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

    </div>
</div>
