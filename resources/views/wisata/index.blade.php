@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Program Wisata
			  	<div class="panel-title pull-right"><a href="{{ route('wst.create') }}">Add</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-hover">
				  <table class="table table-hover">
				  	<thead>
			  		<tr class="active">
			  		  <th>No</th>
					  <th>Program</th>
					  <th>Nama tempat</th>
					  <th>Wilayah</th>
					  <th>Provinsi</th>
					  <th>Cuaca</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($wst as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->judul }}</td>
				    	<td><p>{{ $data->tempat }}</p></td>
				    	<td>{{ $data->wilayah }}</td>
				    	<td>{{ $data->provinsi }}</td>
				    	
				    	<td>{{ $data->cuaca }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('wst.edit',$data->id) }}">Edit Data</a>
						</td>
						<td>
							<a href="{{ route('wst.show',$data->id) }}" class="btn btn-info">Show Data</a>
						</td>
						<td>
							<form method="post" action="{{ route('wst.destroy',$data->id) }}">
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