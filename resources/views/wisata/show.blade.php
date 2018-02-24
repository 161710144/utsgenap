@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Wisata
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Program</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $wst->judul }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Nama tempat</label>	
			  			<input type="text" name="tempat" class="form-control" value="{{ $wst->tempat }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Wilayah</label>	
			  			<input type="text" name="wilayah" class="form-control" value="{{ $wst->wilayah }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Provinsi</label>	
			  			<input type="text" name="provinsi" class="form-control" value="{{ $wst->provinsi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Cuaca</label>	
			  			<input type="text" name="cuaca" class="form-control" value="{{ $wst->cuaca }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection