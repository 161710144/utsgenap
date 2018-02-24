@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Kartun
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $ktn->judul }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Channel</label>	
			  			<input type="text" name="channel" class="form-control" value="{{ $ktn->channel }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Tokoh</label>	
			  			<input type="text" name="tokoh" class="form-control" value="{{ $ktn->tokoh }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Watak</label>	
			  			<input type="text" name="watak" class="form-control" value="{{ $ktn->watak }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Galur Cerita</label>	
			  			<input type="text" name="singkat_cerita" class="form-control" value="{{ $ktn->singkat_cerita }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection