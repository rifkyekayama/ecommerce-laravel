@extends('back.layouts.master')

@section('content')
	<div class="row bg-title">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Data Table</h4>
		</div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
			<ol class="breadcrumb">
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Table</a></li>
				<li class="active">Data Table</li>
			</ol>
		</div>
		<!-- /.col-lg-12 -->
	</div>

	<!-- .row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
				<h3 class="box-title m-b-0">Default Basic Forms</h3>
				<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
				{!! Form::open(['route' => ['admin.kelola-admin.store'], 'class' => 'form-horizontal']) !!}
					<div class="form-group {{ $errors->has('name') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Name</label>
						<div class="col-md-12">
							{!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Name']) !!}
							@if($errors->has('name'))
								<span class="help-block"><small>{{ $errors->first('name') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Email</label>
						<div class="col-md-12">
							{!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'email']) !!}
							@if($errors->has('email'))
								<span class="help-block"><small>{{ $errors->first('email') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Password</label>
						<div class="col-md-12">
							{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
							@if($errors->has('password'))
								<span class="help-block"><small>{{ $errors->first('password') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Confirm Password</label>
						<div class="col-md-12">
							{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
							@if($errors->has('password_confirmation'))
								<span class="help-block"><small>{{ $errors->first('password_confirmation') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>
					<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                	<a href="{{ route('admin.kelola-admin.index') }}" class="btn btn-inverse waves-effect waves-light">Cancel</a>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
	<!-- /.row -->
@endsection