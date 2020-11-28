@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data
				</div>
				<div class="card-body">
					<form action="{{url('admin/komentar')}}" method="post">	
						@csrf
						
						<div class="form-group">
							<label for="email" class="control-label">Email</label>
							<input type="email" name="email" id="email" class="form-control">
						</div>
						<div class="row">
						    <div class="col">
						    	<label for="nama" class="control-label">Nama Lengkap</label>
						      <input type="text" class="form-control" name="nama" id="nama">
						    </div>
						</div>
						<div class="col mt-3"></div>
						<div class="form-group">
							<label for="isi" class="control-label">Isi Komentar</label>
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