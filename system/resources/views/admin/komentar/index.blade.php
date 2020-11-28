@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Data artikel
					<a href="{{url('admin/komentar/create')}}" class="btn btn-dark btn-sm float-right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
						<table class="table table-datatable">
						<thead>
							<tr>
								<th>No</th> 
								<th>Aksi</th>
								<th>Email</th>
								<th>Nama Lengkap</th>
								<th>Isi Komentar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($list_komentar as $komentar)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group" role="group" aria-label="Basic example">
									  <a href="{{url('admin/komentar', $komentar->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-info-circle"></i></a>
									  <a href="{{url('admin/komentar', $komentar->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									  @include('template.utils.delete', ['url' => url('admin/komentar', $komentar->id)])
									</div>
								</td>
								<td>{{$komentar->email}}</td>
								<td>{{$komentar->nama}}</td>
								<td>{{$komentar->isi}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection