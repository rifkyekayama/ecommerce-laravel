@extends('back.layouts.master')

@section('title', $title)

@section('buttonHead')
	<a href="{{ route('admin.categories.index') }}" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Back</a>
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('admin.categories.edit', $category) !!}
@endsection

@section('content')
	<!-- .row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
				{!! Form::model($category, ['route' => ['admin.categories.update', encrypt($category->id)], 'class' => 'form-horizontal', 'method' => 'put']) !!}

					<div class="form-group {{ $errors->has('name') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Nama Kategori</label>
						<div class="col-md-12">
							{!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nama Kategori']) !!}
							@if($errors->has('name'))
								<span class="help-block"><small>{{ $errors->first('name') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('icon') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Icon</label>
						<div class="col-md-12">
							{!! Form::text('icon', $category->icon, ['class' => 'form-control', 'placeholder' => 'Icon']) !!}
							@if($errors->has('icon'))
								<span class="help-block"><small>{{ $errors->first('icon') }}</small></span>
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