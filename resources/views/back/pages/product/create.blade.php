@extends('back.layouts.master')

@section('css')
	<link href="{{ asset('plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('plugins/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" />
@endsection

@section('title', $title)

@section('buttonHead')
	<a href="{{ route('admin.products.index') }}" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Back</a>
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('admin.products.create') !!}
@endsection

@section('content')
	<!-- /.row -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-wrapper collapse in" aria-expanded="true">
						<div class="panel-body">
							{!! Form::open(['route' => ['admin.products.store'], 'files' => true, 'id' => 'formProduct']) !!}
								<div class="form-body">
									<h3 class="box-title">Data Produk</h3>
									<hr>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('name') ? 'has-error has-feedback' : '' }}">
												<label class="control-label">Nama Produk</label>
												{{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Nama Produk', 'id' => 'name']) }}
												@if($errors->has('name'))
													<span class="help-block"><small>{{ $errors->first('name') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<!--/span-->
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('sub_text') ? 'has-error has-feedback' : '' }}">
												<label class="control-label">Sub text</label>
												{{ Form::text('sub_text', old('sub_text'), ['class' => 'form-control', 'id' => 'sub_text', 'placeholder' => 'Sub Text']) }}
												@if($errors->has('sub_text'))
													<span class="help-block"><small>{{ $errors->first('sub_text') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<!--/span-->
									</div>
									<!--/row-->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('brands_id') ? 'has-error has-feedback' : '' }}">
												<label class="control-label">Brand</label>
												{!! Form::select('brands_id', $brands, null, ['class' => 'form-control select2', 'placeholder' => 'Pilih', 'id' => 'brands_id']) !!}
												@if($errors->has('brands_id'))
													<span class="help-block"><small>{{ $errors->first('brands_id') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('category_id') ? 'has-error has-feedback' : '' }}">
												<label class="control-label">Kategori</label>
												{!! Form::select('category_id', $categories, null, ['class' => 'form-control select2', 'placeholder' => 'Pilih', 'id' => 'category_id']) !!}
												@if($errors->has('category_id'))
													<span class="help-block"><small>{{ $errors->first('category_id') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
									</div>
									<!--/row-->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('original_price') ? 'has-error has-feedback' : '' }}">
												<label>Harga Asli</label>
												<div class="input-group">
													<div class="input-group-addon">Rp.</div>
													{!! Form::text('original_price', old('original_price'), ['class' => 'form-control original_price']) !!}
												</div>
												@if($errors->has('original_price'))
													<span class="help-block"><small>{{ $errors->first('original_price') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<!--/span-->
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('status') ? 'has-error has-feedback' : '' }}">
												<label class="control-label">Status</label>
												<div class="radio-list">
													<label class="radio-inline p-0">
														<div class="radio radio-info">
															{!! Form::radio('status', 'published', false); !!}
															<label for="radio1">Published</label>
														</div>
													</label>
													<label class="radio-inline">
														<div class="radio radio-info">
															{!! Form::radio('status', 'draft', false); !!}
															<label for="radio2">Draft</label>
														</div>
													</label>
												</div>
												@if($errors->has('status'))
													<span class="help-block"><small>{{ $errors->first('status') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<!--/span-->
									</div>
									<!--/row-->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('price') ? 'has-error has-feedback' : '' }}">
												<label>Harga Jual</label>
												<div class="input-group">
													<div class="input-group-addon">Rp.</div>
													{!! Form::text('price', old('price'), ['class' => 'form-control price']) !!}
												</div>
												@if($errors->has('price'))
													<span class="help-block"><small>{{ $errors->first('price') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<!--/span-->
										<div class="col-md-2">
											<div class="form-group {{ $errors->has('discount') ? 'has-error has-feedback' : '' }}">
												<label>Diskon</label>
												<div class="input-group">
													<div class="input-group-addon"><i class="ti-cut"></i></div>
													{!! Form::text('discount', 0, ['class' => 'form-control']) !!}
													<div class="input-group-addon">%</div>
												</div>
												@if($errors->has('discount'))
													<span class="help-block"><small>{{ $errors->first('discount') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<!--/span-->
									</div>
									<h3 class="box-title m-t-40">Product Description</h3>
									<div class="row">
										<div class="col-md-12 ">
											<div class="form-group {{ $errors->has('desc') ? 'has-error has-feedback' : '' }}">
												{!! Form::textarea('desc', old('desc'), ['class' => 'form-control', 'rows' => 4]) !!}
												@if($errors->has('desc'))
													<span class="help-block"><small>{{ $errors->first('desc') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
									</div>
									<!--/row-->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('meta_title') ? 'has-error has-feedback' : '' }}">
												<label>Meta Title</label>
												{!! Form::text('meta_title', old('meta_title'), ['class' => 'form-control']) !!}
												@if($errors->has('meta_title'))
													<span class="help-block"><small>{{ $errors->first('meta_title') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<!--/span-->
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('meta_keyword') ? 'has-error has-feedback' : '' }}">
												<label>Meta Keyword</label>
												{!! Form::text('meta_keyword', old('meta_keyword'), ['class' => 'form-control']) !!}
												@if($errors->has('meta_keyword'))
													<span class="help-block"><small>{{ $errors->first('meta_keyword') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<!--/span-->
										<div class="col-md-12">
											<h3 class="box-title m-t-20">Upload Image</h3>
											<div class="fileupload btn btn-info waves-effect waves-light {{ $errors->has('photo') ? 'has-error has-feedback' : '' }}"><span><i class="ion-upload m-r-5"></i>Upload Another Image</span>
												{!! Form::file('photo', ['class' => 'upload', 'id' => 'photo', 'disabled']) !!}
												@if($errors->has('photo'))
													<span class="help-block"><small>{{ $errors->first('photo') }}</small></span>
													<span class="glyphicon glyphicon-remove form-control-feedback"></span>
												@endif
											</div>
										</div>
										<div id="images-container">
											@include('back.pages.product._listImage')
										</div>
									</div>
									<hr>
									<div class="progress progress-lg" id="progressbar">
										<div class="progress-bar progress-bar-success" role="progressbar" style="width: 0%; role='progressbar'"> 0% </div>
									</div>
								</div>
								<div class="form-actions m-t-40">
									<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
									<button type="button" class="btn btn-default">Cancel</button>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--row -->
@endsection

@section('js')
	<script src="{{ asset('plugins/bower_components/custom-select/custom-select.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/jasny-bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/bower_components/switchery/dist/switchery.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery.mask.min.js') }}"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".select2").select2();

			$('.original_price').mask("#.##0", {reverse: true});
			$('.price').mask("#.##0", {reverse: true});

			// Switchery
			var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
			$('.js-switch').each(function() {
					new Switchery($(this)[0], $(this).data());

			});

			$(document).on('change', '#name', function(){
				if($('#name').val() == '' || $('#brands_id').val() == ''){
					$('#photo').prop('disabled', true);
				}else{
					$('#photo').prop('disabled', false);
				}
			});

			$(document).on('change', '#brands_id', function(){
				if($('#name').val() == '' || $('#brands_id').val() == ''){
					$('#photo').prop('disabled', true);
				}else{
					$('#photo').prop('disabled', false);
				}
			});

			$(document).on('change', '.upload', function(e) {
				e.preventDefault();

				if($('#photo').val() == ""){
					alert('image kosong.');
				}else{
					var form = document.forms.namedItem("formProduct");
					var formdata = new FormData(form);
					$.ajax({
						async: true,
						url: "{{ route('admin.photos-product.store') }}",
						type: 'POST',
						processData: false,
						contentType: false,
						data: formdata,
						cache: false,
						error: function(data){
							var errors = data.responseJSON;
							console.log(errors['photo']);
							// Render the errors with js ...
						},
						success: function(data) {
							$('#images-container').html(data);
							$('#photo').val('');
							$('.js-switch').each(function() {
								new Switchery($(this)[0], $(this).data());
							});
						}
					});
				}
			});

			$(document).on('click', '#delete-photo', function(){
				e.preventDefault();
				var id = $(this).attr('data-id');
				swal({
					title: "Anda yakin?",      
					type: "warning",   
					showCancelButton: true,   
					confirmButtonColor: "#DD6B55",   
					confirmButtonText: "Ya, Hapus",   
					cancelButtonText: "Tidak, Batalkan",   
					closeOnConfirm: false,   
					closeOnCancel: false }, 
					function(isConfirm){   
					if (isConfirm) {     
						$.ajax({
							type: "DELETE",
							url: "{{ url('admin/photos-product/delete-create') }}"+"/"+id,
							data: {_token: "{{ csrf_token() }}"},
							cache: false,
							success: function(data){
								swal({
									title: "Data Dihapus!",
									type: "success"
								}, function(){
									//window.location.href = '{{ url()->current() }}';
									$('#images-container').html(data);
									$('.js-switch').each(function() {
										new Switchery($(this)[0], $(this).data());
									});
								});
							}
						});
					} else {
						swal("Batal", "Hapus data dibatalkan", "error");   
					} 
				});
			});

		});
	</script>
@endsection