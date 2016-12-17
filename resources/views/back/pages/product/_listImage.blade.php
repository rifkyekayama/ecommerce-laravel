@foreach($photos as $photo)
	<div class="col-md-3">
		<div class="product-img"> <img src="{{ asset($photo->photo) }}">
			<div class="pro-img-overlay">
				<a href="#" class="bg-danger deletephoto" id="delete-photo" data-id="{{ encrypt($photo->id) }}" product-id="{{ isset($product->id) ? encrypt($product->id) : null }}"><i class="ti-trash"></i></a>
			</div>
			{{-- <center>
				Gambar Utama : <br> <input type="checkbox" {{ $photo->isPrimary == 'yes' ? 'checked' : '' }} class="js-switch"  data-color="#f96262" data-size="small"/>
			</center> --}}
		</div>
	</div>
@endforeach