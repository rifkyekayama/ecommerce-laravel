<table class="table product-overview" id="myTable">
	<thead>
		<tr>
			<th>No</th>
			<th>Photo</th>
			<th>Nama Brand</th>
			<th>Telepon</th>
			<th>Nama Kontak</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1;?>
		@foreach($brands as $brand)
			<tr>
				<td>{{ $no++ }}</td>
				<td><img src="{{ asset($brand->photo) }}" width="80"></td>
				<td>{{ $brand->name }}</td>
				<td>{{ $brand->phone }}</td>
				<td>{{ $brand->contact_name }}</td>
				<td><a href="{{ route('admin.brands.edit', encrypt($brand->id)) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="#" id="delete" class="text-inverse" title="Delete" data-id="{{ encrypt($brand->id) }}" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
			</tr>
		@endforeach
	</tbody>
</table>