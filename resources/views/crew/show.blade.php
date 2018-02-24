@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Crew
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Channel</label>	
			  			<input type="text" name="channel" class="form-control" value="{{ $cw->channel }}"  readonly>
			  		</div>
                    <div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $cw->nama }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Jabatan</label>	
			  			<input type="text" name="jabatan" class="form-control" value="{{ $cw->jabatan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Jenis kelamin</label>	
			  			<input type="text" name="jenis_kelamin" class="form-control" value="{{ $cw->jenis_kelamin }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Program</label>	
			  			<input type="text" name="program" class="form-control" value="{{ $cw->program }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>

@endsection