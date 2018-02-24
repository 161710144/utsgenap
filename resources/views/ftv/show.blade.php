@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data FTV 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $fv->judul }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Rilis</label>	
			  			<input type="text" name="rilis" class="form-control" value="{{ $fv->rilis }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Tempat Shooting</label>	
			  			<input type="text" name="tempat" class="form-control" value="{{ $fv->tempat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Artis</label>	
			  			<input type="text" name="artis" class="form-control" value="{{ $fv->artis }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Watak</label>	
			  			<input type="text" name="watak" class="form-control" value="{{ $fv->watak }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection