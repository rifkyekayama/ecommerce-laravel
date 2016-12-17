<div class="table-responsive">
	<table id="myTable" class="table table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Photo</th>
				<th>Nama Produk</th>
				<th>Status</th>
				<th>Stok</th>
				<th>Harga Asli</th>
				<th>Harga Jual</th>
				<th>Diskon</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1;?>
			@foreach($products as $product)
				<tr>
					<td>{{ $no++ }}</td>
					<td><img src="{{-- asset($product->photo) --}}" width="50"></td>
					<td>{{ $product->name }}</td>
					<td>{{ $product->status }}</td>
					<td>{{ $product->stockProduct->stock }}</td>
					<td>Rp. {{ number_format($product->original_price, 0, '.', '.') }}</td>
					<td>Rp. {{ number_format($product->price, 0, '.', '.') }}</td>
					<td>{{ $product->discount }}%</td>
					<td><a href="{{ route('admin.products.edit', encrypt($product->id)) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="#" id="delete" class="text-inverse" title="Delete" data-id="{{ encrypt($product->id) }}" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>