@extends('back.layouts.master')

@section('title', $title)

@section('buttonHead')
	<a href="{{ route('admin.categories.index') }}" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Back</a>
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('admin.categories.create') !!}
@endsection

@section('content')

@endsection