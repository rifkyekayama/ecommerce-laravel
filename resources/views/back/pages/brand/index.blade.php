@extends('back.layouts.master')

@section('css')
	<link href="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('title', $title)

@section('buttonHead')
	<a href="{{ route('admin.brands.create') }}" class="btn btn-primary pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Create New</a>
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('admin.brands') !!}
@endsection

@section('content')
	<!-- /.row -->
		<div class="row">
				<div class="white-box">
						<div class="table-responsive" id="table-container">
								@include('back.pages.brand._table')
						</div>
				</div>
		</div>
	<!--row -->
@endsection

@section('js')
	<script src="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '#delete', function(e){
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
							url: "{{ url('admin/brands') }}"+"/"+id,
							data: {_token: "{{ csrf_token() }}"},
							cache: false,
							success: function(data){
								swal({
									title: "Data Dihapus!",
									type: "success"
								}, function(){
									//window.location.href = '{{ url()->current() }}';
									$('#table-container').html(data);
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