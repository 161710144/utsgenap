@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Add Data Kartun
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('ktn.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('channel') ? ' has-error' : '' }}">
			  			<label class="control-label">Channel</label>	
			  			<input type="text" name="channel" class="form-control"  required>
			  			@if ($errors->has('channel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('channel') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tokoh') ? ' has-error' : '' }}">
			  			<label class="control-label">Tokoh</label>	
			  			<input type="text" name="tokoh" class="form-control"  required>
			  			@if ($errors->has('tokoh'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tokoh') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('watak') ? ' has-error' : '' }}">
			  			<label class="control-label">Watak</label>	
			  			<input type="text" name="watak" class="form-control"  required>
			  			@if ($errors->has('watak'))
                            <span class="help-block">
                                <strong>{{ $errors->first('watak') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('singkat_cerita') ? ' has-error' : '' }}">
			  			<label class="control-label">Galur Cerita</label>	
			  			<input type="text" name="singkat_cerita" class="form-control"  required>
			  			@if ($errors->has('singkat_cerita'))
                            <span class="help-block">
                                <strong>{{ $errors->first('singkat_cerita') }}</strong>
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