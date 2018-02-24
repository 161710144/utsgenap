@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Add Data FTV
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('fv.store') }}" method="post" >
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

			  		<div class="form-group {{ $errors->has('rilis') ? ' has-error' : '' }}">
			  			<label class="control-label">Rilis</label>	
			  			<input type="text" name="rilis" class="form-control"  required>
			  			@if ($errors->has('rilis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rilis') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Shooting</label>	
			  			<input type="text" name="tempat" class="form-control"  required>
			  			@if ($errors->has('tempat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('artis') ? ' has-error' : '' }}">
			  			<label class="control-label">Artis</label>	
			  			<input type="text" name="artis" class="form-control"  required>
			  			@if ($errors->has('artis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('artis') }}</strong>
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