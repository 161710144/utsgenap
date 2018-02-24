@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Sinetron
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $snt->judul }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Tema</label>	
			  			<input type="text" name="tema" class="form-control" value="{{ $snt->tema }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Pemeran Utama</label>	
			  			<input type="text" name="pemeran_utama" class="form-control" value="{{ $snt->pemeran_utama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Durasi</label>	
			  			<input type="text" name="durasi" class="form-control" value="{{ $snt->durasi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Jumlah Episode</label>	
			  			<input type="text" name="jumlah_episode" class="form-control" value="{{ $snt->jumlah_episode }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection