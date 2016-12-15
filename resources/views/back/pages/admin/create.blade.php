@extends('back.layouts.master')

@section('title', $title)

@section('buttonHead')
	<a href="{{ route('admin.kelola-admin.index') }}" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Back</a>
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('admin.kelola-admin.create') !!}
@endsection

@section('content')
	<!-- .row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
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