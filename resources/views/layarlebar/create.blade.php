@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Add Data Layar Lebar
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('lyr.store') }}" method="post" >
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

			  		<div class="form-group {{ $errors->has('produksi') ? ' has-error' : '' }}">
			  			<label class="control-label">Produksi</label>	
			  			<input type="text" name="produksi" class="form-control"  required>
			  			@if ($errors->has('produksi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('produksi') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('sutradara') ? ' has-error' : '' }}">
			  			<label class="control-label">Sutradara</label>	
			  			<input type="text" name="sutradara" class="form-control"  required>
			  			@if ($errors->has('sutradara'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sutradara') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('rating') ? ' has-error' : '' }}">
			  			<label class="control-label">Rating</label>	
			  			<input type="text" name="rating" class="form-control"  required>
			  			@if ($errors->has('rating'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rating') }}</strong>
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