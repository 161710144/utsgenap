@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Ajang Bakat
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('bkt.update',$bkt->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Acara</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $bkt->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>
                    
                    <div class="form-group {{ $errors->has('peserta') ? ' has-error' : '' }}">
			  			<label class="control-label">Pemenang</label>	
			  			<input type="text" name="peserta" class="form-control" value="{{ $bkt->peserta }}"  required>
			  			@if ($errors->has('peserta'))
                            <span class="help-block">
                                <strong>{{ $errors->first('peserta') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('bakat') ? ' has-error' : '' }}">
			  			<label class="control-label">Bakat</label>	
			  			<input type="text" name="bakat" class="form-control" value="{{ $bkt->bakat }}"  required>
			  			@if ($errors->has('bakat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bakat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tayang') ? ' has-error' : '' }}">
			  			<label class="control-label">Tayang</label>	
			  			<input type="text" name="tayang" class="form-control" value="{{ $bkt->tayang }}"  required>
			  			@if ($errors->has('tayang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tayang') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('voting') ? ' has-error' : '' }}">
			  			<label class="control-label">Voting</label>	
			  			<input type="text" name="voting" class="form-control" value="{{ $bkt->voting }}"  required>
			  			@if ($errors->has('voting'))
                            <span class="help-block">
                                <strong>{{ $errors->first('voting') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection