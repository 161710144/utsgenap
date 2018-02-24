@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Berita
			  	<div class="panel-title pull-right"><a href="{{ route('brt.create') }}">Add</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-striped">
				  <table class="table table-striped">
				  	<thead>
			  		<tr class="active">
			  		  <th>No</th>
					  <th>Judul</th>
					  <th>Host</th>
					  <th>Berita Baru</th>
					  <th>Berita Hangat</th>
					  <th>Sumber</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($brt as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->judul }}</td>
				    	<td><p>{{ $data->host }}</p></td>
				    	<td>{{ $data->berita_baru }}</td>
				    	<td>{{ $data->berita_hangat }}</td>
				    	<td>{{ $data->sumber }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('brt.edit',$data->id) }}">Edit Data</a>
						</td>
						<td>
							<a href="{{ route('brt.show',$data->id) }}" class="btn btn-info">Show Data</a>
						</td>
						<td>
							<form method="post" action="{{ route('brt.destroy',$data->id) }}">
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