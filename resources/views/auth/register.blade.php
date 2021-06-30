<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VATZAPP| Registration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('backend/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
 
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-group mb-3"><!--client name-->
           <input id="client_name" type="text" placeholder="client name" class="form-control @error('client_name') is-invalid @enderror" name="client_name" value="{{ old('client_name') }}" required autocomplete="client_name" autofocus>
                @error('client_name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--client name-->
        <div class="input-group mb-3"><!--trn details-->
           <input id="trn_details" type="text" placeholder="trn details" class="form-control @error('trn_details') is-invalid @enderror" name="trn_details" value="{{ old('trn_details') }}" required autocomplete="trn_details" autofocus>
                @error('trn_details')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--trn details-->
        <div class="input-group mb-3"><!--address-->
           <input id="address" type="address" placeholder=" Address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                @error('address')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--address-->
        <div class="input-group mb-3"><!--Mobile number-->
           <input id="mobile" type="mobile" placeholder="Mobile " class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
                @error('mobile')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--Mobile Number-->
        <div class="input-group mb-3"><!--whatsaap number-->
           <input id="whatsaap_no" type="mobile" placeholder="whatsaap Number" class="form-control @error('whatsaap_no') is-invalid @enderror" name="whatsaap_no" value="{{ old('whatsaap_no') }}" required autocomplete="whatsaap_no" autofocus>
               <!--  @error('whatsaap_no')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror -->
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--whatsaap Number-->
        <div class="input-group mb-3"><!--email-->
          <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div><!--email-->
        <div class="input-group mb-3"><!--emirate-->
          <input id="emirate" type="text" placeholder="emirate" class="form-control @error('emirate') is-invalid @enderror" name="emirate" value="{{ old('emirate') }}" required autocomplete="emirate">
                @error('emirate')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div><!--emirate-->
         <div class="input-group mb-3"><!--country-->
           <input id="country" type="text" placeholder=" Country" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
                @error('country')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--country-->
         <div class="input-group mb-3"><!--Trade Liscense-->
           <input id="trade_license" type="text" placeholder=" trade_license" class="form-control @error('trade_license') is-invalid @enderror" name="trade_license" value="{{ old('trade_license') }}" required autocomplete="trade_license" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--Trade License-->
         <div class="input-group mb-3"><!--Vat Period-->
           <input id="vat_period" type="text" placeholder=" Vat Period" class="form-control @error('vat_period') is-invalid @enderror" name="vat_period" value="{{ old('vat_period') }}" required autocomplete="vat_period" autofocus>
                @error('vat_period')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--vat period-->
         <div class="input-group mb-3"><!--Vat percentage-->
           <input id="vat_percentage" type="text" placeholder="Vat percentage" class="form-control @error('vat_percentage') is-invalid @enderror" name="vat_percentage" value="{{ old('vat_percentage') }}" required autocomplete="vat_percentage" autofocus>
                @error('vat_percentage')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--vat percentage-->
        <div class="input-group mb-3"><!--FTA login-->
           <input id="fta_login" type="text" placeholder="fta login" class="form-control @error('fta_login') is-invalid @enderror" name="fta_login" value="{{ old('fta_login') }}" required autocomplete="fta_login" autofocus>
                @error('fta_login')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--FTA login-->
        <div class="input-group mb-3"><!--username-->
           <input id="username" type="text" placeholder="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                @error('username')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><!--Username-->


        <div class="input-group mb-3"><!--password-->
            <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><!--password-->
        <div class="input-group mb-3"><!--password confrm-->
          <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><!--password confrm-->
        <div class="input-group mb-3"><!--label-->
           <select name="label" class="form-control  @error('label') is-invalid @enderror">
            <option value="Null">Select Label</option>
            <option value="0">Checker</option>
            <option value="1">validator</option>
            <option value="2">Admin</option>
            <option value="3">Super Admin</option>
          </select>
              @error('label')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
         <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
            {{ __('Register') }}</button>
          </div>
        </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{url('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('backend/dist/js/adminlte.min.js')}}"></script>
</body>
</html>