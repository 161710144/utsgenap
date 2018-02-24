@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Add Data Sinetron
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('snt.store') }}" method="post" >
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

			  		<div class="form-group {{ $errors->has('tema') ? ' has-error' : '' }}">
			  			<label class="control-label">Tema</label>	
			  			<input type="text" name="tema" class="form-control"  required>
			  			@if ($errors->has('tema'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tema') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pemeran_utama') ? ' has-error' : '' }}">
			  			<label class="control-label">Pemeran Utama</label>	
			  			<input type="text" name="pemeran_utama" class="form-control"  required>
			  			@if ($errors->has('pemeran_utama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pemeran_utama') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('durasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Durasi</label>	
			  			<input type="text" name="durasi" class="form-control"  required>
			  			@if ($errors->has('durasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('durasi') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('jumlah_episode') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Episode</label>	
			  			<input type="text" name="jumlah_episode" class="form-control"  required>
			  			@if ($errors->has('jumlah_episode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_episode') }}</strong>
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