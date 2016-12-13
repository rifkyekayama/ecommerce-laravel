@extends('back.layouts.master')

@section('css')
	<link href="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

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

	<!-- /row -->
	<div class="row el-element-overlay m-b-40" id="card-container">
		@include('back.pages.admin._user-card')
	</div>
	
	<!-- /.row -->
@endsection

@section('js')
	<script src="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
	<!-- start - This is for export functionality only -->
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
	<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
	<!-- end - This is for export functionality only -->
	<script>
		$(document).ready(function(){
			$('#myTable').DataTable();
			$(document).ready(function() {
				var table = $('#example').DataTable({
					"columnDefs": [
						{ "visible": false, "targets": 2 }
					],
					"order": [[ 2, 'asc' ]],
					"displayLength": 25,
					"drawCallback": function ( settings ) {
						var api = this.api();
						var rows = api.rows( {page:'current'} ).nodes();
						var last=null;

						api.column(2, {page:'current'} ).data().each( function ( group, i ) {
							if ( last !== group ) {
								$(rows).eq( i ).before(
									'<tr class="group"><td colspan="5">'+group+'</td></tr>'
								);

								last = group;
							}
						});
					}
				});

				// Order by the grouping
				$('#example tbody').on( 'click', 'tr.group', function () {
					var currentOrder = table.order()[0];
					if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
						table.order( [ 2, 'desc' ] ).draw();
					}
					else {
						table.order( [ 2, 'asc' ] ).draw();
					}
				});
			});
		});
		$('#example23').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});
	</script>

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