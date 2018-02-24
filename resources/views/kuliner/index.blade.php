@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Kuliner
			  	<div class="panel-title pull-right"><a href="{{ route('kln.create') }}">Add</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-striped">
				  <table class="table table-striped">
				  	<thead>
			  		<tr class="active">
			  		  <th>No</th>
					  <th>Program</th>
					  <th>Restoran</th>
					  <th>Menu Spesial</th>
					  <th>Harga</th>
					  <th>Alamat</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($kln as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->judul }}</td>
				    	<td><p>{{ $data->nama_resto }}</p></td>
				    	<td>{{ $data->makanan }}</td>
				    	<td>{{ $data->harga }}</td>
				    	<td>{{ $data->alamat }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('kln.edit',$data->id) }}">Edit Data</a>
						</td>
						<td>
							<a href="{{ route('kln.show',$data->id) }}" class="btn btn-info">Show Data</a>
						</td>
						<td>
							<form method="post" action="{{ route('kln.destroy',$data->id) }}">
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