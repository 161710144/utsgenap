@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Berita
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $brt->judul }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Host</label>	
			  			<input type="text" name="host" class="form-control" value="{{ $brt->host }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Berita Baru</label>	
			  			<input type="text" name="berita_baru" class="form-control" value="{{ $brt->berita_baru }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Berita Hangat</label>	
			  			<input type="text" name="berita_hangat" class="form-control" value="{{ $brt->berita_hangat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Sumber</label>	
			  			<input type="text" name="sumber" class="form-control" value="{{ $brt->sumber }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection