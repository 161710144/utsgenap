@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Kuliner
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $kln->judul }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Restoran</label>	
			  			<input type="text" name="nama_resto" class="form-control" value="{{ $kln->nama_resto }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Makanan</label>	
			  			<input type="text" name="makanan" class="form-control" value="{{ $kln->makanan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $kln->harga }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<textarea name="alamat" class="form-control" rows="10" readonly>{{ $kln->alamat }}</textarea>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection