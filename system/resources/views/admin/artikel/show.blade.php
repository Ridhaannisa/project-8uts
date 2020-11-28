@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Detail Artikel
				</div>
				<div class="card-body">
					<div class="jumbotron">
					  <h1 class="display-5">{{$artikel->judul}}</h1><hr>
					  <p class="lead"><strong class="text-dark">Penulis : {{$artikel->penulis}} </strong></p>
					  <p class="lead"><strong class="text-dark">Tanggal : {{$artikel->tanggal}} </strong></p>
					   <hr class="my-4">
					  <p>Isi : <br>
					  	{!! nl2br($artikel->isi) !!}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection