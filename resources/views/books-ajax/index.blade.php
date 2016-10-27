@extends('layouts.app')

@section('content')	
<div class="col-md-8 col-md-offset-2">
	<h3>Data Buku</h3>	
	<table class="table" id="books">
		<thead>
			<tr>
				<td>Judul Buku</td>
				<td>Penulis</td>
				<td>Penerbit</td>
			</tr>
		</thead>
	</table>
</div>
@endsection

@section('scripts')	
<script type="text/javascript">
	$(function(){
		$("#books").DataTable({
			 processing: true,
		        serverSide: true,
		        ajax: '{{ url("book-ajax/get-book") }}',
		        columns: [
		            { data: 'title', name: 'title' },
		            { data: 'author', name: 'author' },
		            { data: 'publisher', name: 'publisher' }
		        ]
		});
	});	
</script>
@endsection