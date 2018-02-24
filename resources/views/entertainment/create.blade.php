@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Add Data Entertainment
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('etr.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Acara</label>	
			  			<input type="text" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('host') ? ' has-error' : '' }}">
			  			<label class="control-label">Host</label>	
			  			<input type="text" name="host" class="form-control"  required>
			  			@if ($errors->has('host'))
                            <span class="help-block">
                                <strong>{{ $errors->first('host') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('selebriti') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Selebriti</label>	
			  			<input type="text" name="selebriti" class="form-control"  required>
			  			@if ($errors->has('selebriti'))
                            <span class="help-block">
                                <strong>{{ $errors->first('selebriti') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('kabar') ? ' has-error' : '' }}">
			  			<label class="control-label">Topik</label>	
			  			<input type="text" name="kabar" class="form-control"  required>
			  			@if ($errors->has('kabar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kabar') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('riwayat') ? ' has-error' : '' }}">
			  			<label class="control-label">Riwayat</label>	
			  			<input type="text" name="riwayat" class="form-control"  required>
			  			@if ($errors->has('riwayat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('riwayat') }}</strong>
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