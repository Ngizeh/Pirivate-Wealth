   <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
    @csrf
    <div class="form-group">
        <label for="email">
        {{ __('E-Mail Address') }}
         </label>
           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </div>
    <!--user name-->

    <div class="form-group">
        <label for="password">
            {{ __('Password') }}
        </label>
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
    </div>
    <!--password-->
        <label>
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
    </label>

    <div class="button-wrap">
        <input type="submit" class="btn btn-sucess btn-lg" value="Login">
        <a href="#" class="btn btn-link btn-lg forget-btn"> Forgot Password</a>
    </div>
</form>
