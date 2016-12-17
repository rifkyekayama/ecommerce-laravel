@extends('back.layouts.master')

@section('css')
	<link href="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('title', $title)

@section('buttonHead')
	<a href="{{ route('admin.products.create') }}" class="btn btn-primary pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Create New</a>
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('admin.products') !!}
@endsection

@section('content')
	<!-- /.row -->
		{{-- <div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="white-box">
					<div class="product-img">
							<img src="../plugins/images/chair.jpg"/> 
							<div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-success"><i class="ti-search"></i></a> <a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
					</div>
					<div class="product-text">
						<span class="pro-price bg-danger">$15</span>
						<h3 class="box-title m-b-0">Rounded Chair</h3>
						<small class="text-muted db">globe type chair for rest</small>
						
					</div>
				</div>
			</div>
		</div> --}}
	<!--row -->

	<!-- /.row -->
		<div class="row">
			<div class="white-box">
				<div class="table-responsive" id="table-container">
					@include('back.pages.product._table')
				</div>
			</div>
		</div>
	<!--row -->

@endsection

@section('js')
	<script src="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('#myTable').DataTable();

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
							url: "{{ url('admin/products') }}"+"/"+id,
							data: {_token: "{{ csrf_token() }}"},
							cache: false,
							success: function(data){
								swal({
									title: "Data Dihapus!",
									type: "success"
								}, function(){
									//window.location.href = '{{ url()->current() }}';
									$('#table-container').html(data);
									$('#myTable').DataTable();
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