<select class="form-control select2" id="{{ $name }}" name="{{ $name }}">
	<option selected="selected" value="">Pilih</option>
	@foreach($values as $key => $val)
		<option value="{{ $key }}">{{ $val }}</option>
	@endforeach
</select>