@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Layar Lebar
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $lyr->judul }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Rilis</label>	
			  			<input type="text" name="rilis" class="form-control" value="{{ $lyr->rilis }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Produksi</label>	
			  			<input type="text" name="produksi" class="form-control" value="{{ $lyr->produksi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Sutradara</label>	
			  			<input type="text" name="sutradara" class="form-control" value="{{ $lyr->sutradara }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Rating</label>	
			  			<input type="text" name="rating" class="form-control" value="{{ $lyr->rating }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection