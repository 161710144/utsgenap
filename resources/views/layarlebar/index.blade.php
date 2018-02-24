@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Layar Lebar
			  	<div class="panel-title pull-right"><a href="{{ route('lyr.create') }}">Add</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-condensed">
				  <table class="table table-condensed">
				  	<thead>
			  		<tr class="danger">
			  		  <th>No</th>
					  <th>Judul</th>
					  <th>Rilis</th>
					  <th>Produksi</th>
					  <th>Sutradara</th>
					  <th>Rating</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($lyr as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->judul }}</td>
				    	<td><p>{{ $data->rilis }}</p></td>
				    	<td>{{ $data->produksi }}</td>
				    	<td>{{ $data->sutradara }}</td>
				    	<td>{{ $data->rating }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('lyr.edit',$data->id) }}">Edit Data</a>
						</td>
						<td>
							<a href="{{ route('lyr.show',$data->id) }}" class="btn btn-info">Show Data</a>
						</td>
						<td>
							<form method="post" action="{{ route('lyr.destroy',$data->id) }}">
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