@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Add Data Wisata
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('wst.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Program</label>	
			  			<input type="text" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('tempat') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama tempat</label>	
			  			<input type="text" name="tempat" class="form-control"  required>
			  			@if ($errors->has('tempat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('wilayah') ? ' has-error' : '' }}">
			  			<label class="control-label">Wilayah</label>	
			  			<input type="text" name="wilayah" class="form-control"  required>
			  			@if ($errors->has('wilayah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('wilayah') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('provinsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Provinsi</label>	
			  			<div type="dropdown"  name="provinsi" required><select name="provinsi"><option>-</option>
			  			<option value="Jawa Barat">Jawa Barat</option>
			  			<option value="Jawa Tengah">Jawa Tengah</option>
			  			<option value="Bali">Bali</option>
			  			<option value="Papua">Papua</option>
			  			<option value="Sumatera Utara">Sumatera Utara</option></select>
			  			@if ($errors->has('provinsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('provinsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		</div>

                    
			  		<div class="form-group {{ $errors->has('cuaca') ? ' has-error' : '' }}">
			  			<label class="control-label">Cuaca</label>	
			  			<input type="text" name="cuaca" class="form-control"  required>
			  			@if ($errors->has('cuaca'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cuaca') }}</strong>
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