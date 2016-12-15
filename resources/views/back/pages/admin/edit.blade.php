@extends('back.layouts.master')

@section('title', $title)

@section('buttonHead')
	<a href="{{ route('admin.kelola-admin.index') }}" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Back</a>
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('admin.kelola-admin.edit', $user) !!}
@endsection

@section('content')
	<!-- .row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
				<h3 class="box-title m-b-0">Default Basic Forms</h3>
				<p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
				{!! Form::model($user, ['route' => ['admin.kelola-admin.update', encrypt($user->id)], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}
					<div class="form-group {{ $errors->has('name') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Name</label>
						<div class="col-md-12">
							{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
							@if($errors->has('name'))
								<span class="help-block"><small>{{ $errors->first('name') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Email</label>
						<div class="col-md-12">
							{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'email']) !!}
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
                	<button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
	<!-- /.row -->
@endsection