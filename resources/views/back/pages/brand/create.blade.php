@extends('back.layouts.master')

@section('title', $title)

@section('css')
	<link href="{{ asset('plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('buttonHead')
	<a href="{{ route('admin.brands.index') }}" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Back</a>
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('admin.brands.create') !!}
@endsection

@section('content')
	<!-- .row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
				{!! Form::open(['route' => ['admin.brands.store'], 'class' => 'form-horizontal', 'files' => true]) !!}
					<div class="form-group {{ $errors->has('photo') ? 'has-error has-feedback' : '' }}">
						<label class="col-sm-12">Foto Brand</label>
						<div class="col-sm-12">
							<div class="fileinput fileinput-{{ isset($photo) && old($photo) ? 'exists' : 'new' }}" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
									<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA" alt="aaa">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
									<img src="{{ isset($photo) && old($photo) ? asset('photo') : '' }}">
								</div>
								<div>
									<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{{ Form::file('photo', ['id' => 'photo']) }}</span>
									<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
							@if($errors->has('photo'))
								<span class="help-block"><small>{{ $errors->first('photo') }}</small></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('name') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Nama Brand</label>
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

					<div class="form-group {{ $errors->has('contact_name') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Nama Kontak</label>
						<div class="col-md-12">
							{!! Form::text('contact_name', old('contact_name'), ['class' => 'form-control', 'placeholder' => 'Nama Kontak']) !!}
							@if($errors->has('contact_name'))
								<span class="help-block"><small>{{ $errors->first('contact_name') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('phone') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Telepon</label>
						<div class="col-md-12">
							{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telepon']) !!}
							@if($errors->has('phone'))
								<span class="help-block"><small>{{ $errors->first('phone') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('province_id') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Provinsi</label>
						<div class="col-md-12">
							<div id="province-container">
								{!! Form::select('province_id', $provinces, null, ['placeholder' => 'Pilih', 'class' => 'form-control select2', 'id' => 'province_id']) !!}
							</div>
							@if($errors->has('province_id'))
								<span class="help-block"><small>{{ $errors->first('province_id') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('city_id') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Kota/Kabupaten</label>
						<div class="col-md-12">
							<div id="city-container">
								{!! Form::select('city_id', [], null, ['placeholder' => 'Pilih', 'class' => 'form-control select2', 'id' => 'city_id']) !!}
							</div>
							@if($errors->has('city_id'))
								<span class="help-block"><small>{{ $errors->first('city_id') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('subdistrict_id') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Kecamatan</label>
						<div class="col-md-12">
							<div id="subdistrict-container">
								{!! Form::select('subdistrict_id', [], null, ['placeholder' => 'Pilih', 'class' => 'form-control select2', 'id' => 'subdistrict_id']) !!}
							</div>
							@if($errors->has('subdistrict_id'))
								<span class="help-block"><small>{{ $errors->first('subdistrict_id') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('address') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Alamat</label>
						<div class="col-md-12">
							{!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
							@if($errors->has('address'))
								<span class="help-block"><small>{{ $errors->first('address') }}</small></span>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							@endif
						</div>
					</div>

					<div class="form-group {{ $errors->has('postal_code') ? 'has-error has-feedback' : '' }}">
						<label class="col-md-12">Kode Pos</label>
						<div class="col-md-12">
							{!! Form::text('postal_code', null, ['class' => 'form-control', 'placeholder' => 'Kode Pos']) !!}
							@if($errors->has('postal_code'))
								<span class="help-block"><small>{{ $errors->first('postal_code') }}</small></span>
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

@section('js')
	<script src="{{ asset('plugins/bower_components/custom-select/custom-select.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/jasny-bootstrap.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".select2").select2();

			$(document).on('change', '#province_id', function(){
				$.ajax({
					type: "GET",
					url: "{{ url('admin/brands/city') }}"+"/"+"city_id"+"/"+$('#province_id').val(),
					success: function(data){
						$('#city-container').html(data);
						$("#city_id").select2();
					}
				});
			});

			$(document).on('change', '#city_id', function(){
				$.ajax({
					type: "GET",
					url: "{{ url('admin/brands/subdistrict') }}"+"/"+"subdistrict_id"+"/"+$('#province_id').val()+"/"+$('#city_id').val(),
					success: function(data){
						$('#subdistrict-container').html(data);
						$("#subdistrict_id").select2();
					}
				});
			});
		});
	</script>
@endsection