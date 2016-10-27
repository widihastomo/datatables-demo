@extends('layouts.app')

@section('content')	
<div class="col-md-8 col-md-offset-2">
	<h3>Data Buku</h3>	
	{!! $html->table() !!}
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection