
<!DOCTYPE html>  
<html lang="en">

<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-ecommerce/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 01:30:56 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Elite Admin - is a responsive admin template</title>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- color CSS -->
<link href="{{ asset('css/colors/default.css') }}" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
	<div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
	@if($errors->has('email'))
		{{ $errors->first('email') }}
	@endif
	<div class="login-box">
		<div class="white-box">
			{!! Form::open(['url' => 'admin/password/reset', 'id' => 'loginform', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
			<input type="hidden" name="token" value="{{ $token }}">
				<h3 class="box-title m-b-20">Recover Password</h3>
				<div class="form-group ">
					<div class="col-xs-12">
						@if (session('status'))
							<div class="alert alert-danger"> {{ session('status') }} </div>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
					<div class="col-xs-12">
						{!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email']) !!}
						@if($errors->has('email'))
							<span class="help-block"><small>{{ $errors->first('email') }}</small></span>
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
					<div class="col-xs-12">
						{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
						@if($errors->has('password'))
							<span class="help-block"><small>{{ $errors->first('password') }}</small></span>
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error has-feedback' : '' }}">
					<div class="col-xs-12">
						{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
						@if($errors->has('password_confirmation'))
							<span class="help-block"><small>{{ $errors->first('password_confirmation') }}</small></span>
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						@endif
					</div>
				</div>
				<div class="form-group text-center m-t-20">
					<div class="col-xs-12">
						<button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</section>
<!-- jQuery -->
<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>

<!--slimscroll JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/custom.min.js') }}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
<!--Style Switcher -->
<script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>

<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-ecommerce/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 01:30:56 GMT -->
</html>
