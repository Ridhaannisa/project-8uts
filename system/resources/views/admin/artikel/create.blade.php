@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Artikel
				</div>
				<div class="card-body">
					<form action="{{url('admin/artikel')}}" method="post">	
						@csrf
						
						<div class="form-group">
							<label for="judul" class="control-label">Judul Artikel</label>
							<input type="text" name="judul" id="judul" class="form-control">
						</div>
						<div class="row">
						    <div class="col">
						    	<label for="penulis" class="control-label">Penulis Artikel</label>
						      <input type="text" class="form-control" name="penulis" id="penulis">
						    </div>
						</div>
						<div class="row">
						<div class="col mt-3">
						    <label for="tanggal" class="control-label">Tanggal Rilis</label>
						     <input type="text" class="form-control" name="tanggal" id="tanggal">
						  </div>
						</div>
						<div class="form-group mt-3">
							<label for="kategori" class="control-label">Kategori</label>
							<select name="id_kategori" class="form-control">
								@foreach($list_kategori as $kategori)
									<option value="{{$kategori->id}}">{{$kategori->nama}}</option>
								@endforeach
							</select>
						</div>	
						<div class="col mt-3"></div>
						<div class="form-group">
							<label for="isi" class="control-label">Isi Artikel</label>
							<textarea class="form-control" name="isi" id="isi" rows="5"></textarea>
						</div>

						<button class="btn btn-dark btn-sm float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection