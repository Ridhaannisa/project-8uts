@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Edit Data Artikel
				</div>
				<div class="card-body">
					<form action="{{url('admin/artikel', $artikel->id)}}" method="post">	
						@csrf
						@method("PUT")
						
						<div class="form-group">
							<label for="judul" class="control-label">Judul Artikel</label>
							<input type="text" name="judul" id="judul" class="form-control" value="{{$artikel->judul}}">
						</div>
						<div class="row">
						    <div class="col">
						    	<label for="penulis" class="control-label">Penulis Artikel</label>
						      <input type="text" class="form-control" name="penulis" id="penulis" value="{{$artikel->penulis}}">
						    </div>
						</div>
						<div class="row">
						<div class="col mt-3">
						    	<label for="tanggal" class="control-label">Tanggal Rilis</label>
						      <input type="text" class="form-control" name="tanggal" id="tanggal" value="{{$artikel->tanggal}}">
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
							<textarea class="form-control" name="isi" id="isi" rows="5" >{{$artikel->isi}}</textarea>
						</div>
						
						<button class="btn btn-success btn-sm float-right mt-2"><i class="fa fa-save"></i> Update Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection