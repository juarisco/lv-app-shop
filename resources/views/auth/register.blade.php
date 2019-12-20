@extends('layouts.app')

@section('body-class','signup-page')

@section('content')

    <div class="header header-filter"
         style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="card card-signup">

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="header header-primary text-center">
                                <h4>Registro</h4>
                                <div class="social-line">
                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="text-divider">Completa tus datos</p>
                            <div class="content">

                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
                                    <input id="name" type="text" name="name" class="form-control"
                                           placeholder="Nombre..." value="{{ old('name', $name) }}" required autofocus>
                                </div>

                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">fingerprint</i>
										</span>
                                    <input id="username" type="text" name="username" class="form-control"
                                           placeholder="Username..." value="{{ old('username') }}" required>
                                </div>

                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                                    <input id="email" type="email" class="form-control" name="email"
                                           placeholder="Correo electrónico..." value="{{ old('email', $email) }}"
                                    >
                                </div>

                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">phone</i>
										</span>
                                    <input id="phone" type="phone" name="phone" class="form-control"
                                           placeholder="Télefono..." value="{{ old('phone') }}" required>
                                </div>

                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">class</i>
										</span>
                                    <input id="address" type="text" name="address" class="form-control"
                                           placeholder="Dirección..." value="{{ old('address') }}" required>
                                </div>

                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="Contraseña" required>

                                </div>

                                <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    <input type="password" class="form-control" name="password_confirmation"
                                           placeholder="Confirmar contraseña" required>

                                </div>

                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-simple btn-primary btn-lg">
                                    Confirmar registro
                                </button>
                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>--}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('includes.footer')

    </div>


@endsection



{{-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
     <label for="name" class="col-md-4 control-label">Name</label>

     <div class="col-md-6">

         @if ($errors->has('name'))
             <span class="help-block">
                                     <strong>{{ $errors->first('name') }}</strong>
                                 </span>
         @endif
     </div>
 </div>

 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
     <label for="email" class="col-md-4 control-label">E-Mail Address</label>

     <div class="col-md-6">

         @if ($errors->has('email'))
             <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                 </span>
         @endif
     </div>
 </div>

 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
     <label for="password" class="col-md-4 control-label">Password</label>

     <div class="col-md-6">

         @if ($errors->has('password'))
             <span class="help-block">
                                     <strong>{{ $errors->first('password') }}</strong>
                                 </span>
         @endif
     </div>
 </div>

 <div class="form-group">
     <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

     <div class="col-md-6">
     </div>
 </div>

 <div class="form-group">
     <div class="col-md-6 col-md-offset-4">
         <button type="submit" class="btn btn-primary">
             Register
         </button>
     </div>
 </div>--}}
