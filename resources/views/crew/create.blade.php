@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Add Data Crew
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('cw.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('channel') ? ' has-error' : '' }}">
			  			<label class="control-label">Channel</label>	
			  			<input type="text" name="channel" class="form-control"  required>
			  			@if ($errors->has('channel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('channel') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jabatan</label>	
			  			<input type="text" name="jabatan" class="form-control"  required>
			  			@if ($errors->has('jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis kelamin</label>	
			  			<input type="radio" name="jenis_kelamin"  value="Laki-laki"  required>Laki-laki&nbsp;
			  			<input type="radio" name="jenis_kelamin"  value="Perempuan"  required>Perempuan
			  			@if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('program') ? ' has-error' : '' }}">
			  			<label class="control-label">Program</label>	
			  			<input type="text" name="program" class="form-control"  required>
			  			@if ($errors->has('program'))
                            <span class="help-block">
                                <strong>{{ $errors->first('program') }}</strong>
                            </span>
                        @endif
			  		</div>  
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection