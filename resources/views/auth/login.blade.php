<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body>

<div class="card bg-dark text-white">
  <img class="card-img" src="{{asset('img/fondo3.png')}}" alt="Card image">
  <div class="card-img-overlay">


<div class="container">

<br><br><br>

<div class="row">
<div class="col-sm-3"></div>

    <div class="col-md-6">

            <h2><p class="text-center">LOGIN</p></h2>

            <!-- inicio de form-->
             <div class="text-center">

                <form class="form-horizontal" method="POST" action="{{route('login')}}">
                    {{ csrf_field() }}


                    <!-- input de email -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col">
                         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <!-- input de pasword -->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- boton de login-->
                    <div class="form-group">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Login
                            </button>
                        </div>
                    </div>

                </form> <!-- fin del form-->
            </div><!-- centrar texto-->
    </div><!-- cierre de la columna -->
    <div class="col-sm-3"></div>
</div><!-- cierre del row -->

</div><!-- cierre del container-->

  </div>
</div>
