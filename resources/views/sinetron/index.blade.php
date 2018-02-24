@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Sinetron
			  	<div class="panel-title pull-right"><a href="{{ route('snt.create') }}">Add</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-bordered">
				  <table class="table table-bordered">
				  	<thead>
			  		<tr class="active">
			  		  <th>No</th>
					  <th>Judul</th>
					  <th>Tema</th>
					  <th>Pemeran Utama</th>
					  <th>Durasi</th>
					  <th>Jumlah Episode</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($snt as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->judul }}</td>
				    	<td><p>{{ $data->tema }}</p></td>
				    	<td>{{ $data->pemeran_utama }}</td>
				    	<td>{{ $data->durasi }}</td>
				    	<td>{{ $data->jumlah_episode }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('snt.edit',$data->id) }}">Edit Data</a>
						</td>
						<td>
							<a href="{{ route('snt.show',$data->id) }}" class="btn btn-info">Show Data</a>
						</td>
						<td>
							<form method="post" action="{{ route('snt.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-default" onclick="return confirm('Yakin dihapus?')">Delete Data</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection