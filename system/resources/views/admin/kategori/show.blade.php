@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Detail Pada Kategori 
				</div>

				<div class="card-body">
					<table class="table table-responsive">
						<thead class="thead-dark">
					    <tr>
					      <th scope="col">No</th>
					       <th scope="col">Aksi</th>
					      <th scope="col">Nama Kategori</th>
					      <th scope="col">Jumlah Artikel</th>
					    </tr>
					  </thead>
						<tbody>
							
								<tr>
									<td>1</td>
									<td>
					      				<a href="{{url('admin/artikel')}}" class="btn btn-dark btn-sm"><i class="fa fa-eye"></i></a>
					     			 </td>
									<td>{{$kategori->nama}}</td>
									<td>{{$kategori->jumlah}}</td>
								</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection