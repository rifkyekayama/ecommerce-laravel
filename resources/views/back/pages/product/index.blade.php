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
	
@endsection

@section('js')
	<script src="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
@endsection