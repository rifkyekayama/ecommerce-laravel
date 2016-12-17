<table class="table product-overview" id="myTable">
	<thead>
		<tr>
			<th>No</th>
			<th>Icon</th>
			<th>Nama Kategori</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1;?>
		@foreach($categories as $category)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $category->icon }}</td>
				<td>{{ $category->name }}</td>
				<td><a href="{{ route('admin.categories.edit', encrypt($category->id)) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="#" id="delete" class="text-inverse" title="Delete" data-id="{{ encrypt($category->id) }}" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
			</tr>
		@endforeach
	</tbody>
</table>