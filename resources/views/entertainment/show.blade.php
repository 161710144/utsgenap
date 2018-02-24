@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Entertainment
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Acara</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $etr->judul }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Host</label>	
			  			<input type="text" name="host" class="form-control" value="{{ $etr->host }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Nama Selebriti</label>	
			  			<input type="text" name="selebriti" class="form-control" value="{{ $etr->selebriti }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Topik</label>	
			  			<input type="text" name="kabar" class="form-control" value="{{ $etr->kabar }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Riwayat</label>	
			  			<input type="text" name="riwayat" class="form-control" value="{{ $etr->riwayat }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection