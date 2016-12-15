@extends('back.layouts.master')

@section('title', $title)

@section('buttonHead')
	<a href="{{ route('admin.kelola-admin.create') }}" class="btn btn-primary pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Create New</a>
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('admin.kelola-admin') !!}
@endsection

@section('content')
	<!-- /row -->
	<div class="row el-element-overlay m-b-40" id="card-container">
		@include('back.pages.admin._user-card')
	</div>
	
	<!-- /.row -->
@endsection

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '#delete-user', function(e){
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
							url: "{{ url('admin/kelola-admin') }}"+"/"+id,
							data: {_token: "{{ csrf_token() }}"},
							cache: false,
							success: function(data){
								swal({
									title: "Data Dihapus!",
									type: "success"
								}, function(){
									//window.location.href = '{{ url()->current() }}';
									$('#card-container').html(data);
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