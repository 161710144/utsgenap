@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Ajang Bakat
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Acara</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $bkt->judul }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Pemenang</label>	
			  			<input type="text" name="peserta" class="form-control" value="{{ $bkt->peserta }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Bakat</label>	
			  			<input type="text" name="bakat" class="form-control" value="{{ $bkt->bakat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tayang</label>	
			  			<input type="text" name="tayang" class="form-control" value="{{ $bkt->tayang }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Voting</label>	
			  			<input type="text" name="voting" class="form-control" value="{{ $bkt->voting }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection