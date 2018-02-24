@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Add Data Berita
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('brt.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Acara Berita</label>	
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

			  		<div class="form-group {{ $errors->has('berita_baru') ? ' has-error' : '' }}">
			  			<label class="control-label">Berita Baru</label>	
			  			<input type="text" name="berita_baru" class="form-control"  required>
			  			@if ($errors->has('berita_baru'))
                            <span class="help-block">
                                <strong>{{ $errors->first('berita_baru') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('berita_hangat') ? ' has-error' : '' }}">
			  			<label class="control-label">Berita Hangat</label>	
			  			<input type="text" name="berita_hangat" class="form-control"  required>
			  			@if ($errors->has('berita_hangat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('berita_hangat') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('sumber') ? ' has-error' : '' }}">
			  			<label class="control-label">Sumber</label>	
			  			<input type="text" name="sumber" class="form-control"  required>
			  			@if ($errors->has('sumber'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sumber') }}</strong>
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