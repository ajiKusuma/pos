@extends('layouts.backend')

@section('konten')
 


 

	<h2>
		<i class="fa fa-shopping-cart"></i> Produk 
	</h2>
	<hr>
@include($base_view.'komponen.tombol_create')

@include($base_view.'komponen.nav_atas')


	<hr>

	@include($base_view.'komponen.form_search')


	@include($base_view.'list_data')

 

 
@endsection
