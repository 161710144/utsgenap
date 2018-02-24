@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data FTV
			  	<div class="panel-title pull-right"><a href="{{ route('fv.create') }}">Add</a>
			  	</div>
			  </div>
			  
			  <div class="panel-body">
			  	<div class="table-border">
				  <table class="table table-bordered">
				  	<thead>
			  		<tr class="active">
			  		  <th>No</th>
					  <th>Judul</th>
					  <th>Rilis</th>
					  <th>Tempat Shooting</th>
					  <th>Artis</th>
					  <th>Watak</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($fv as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->judul }}</td>
				    	<td><p>{{ $data->rilis }}</p></td>
				    	<td>{{ $data->tempat }}</td>
				    	<td>{{ $data->artis }}</td>
				    	<td>{{ $data->watak }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('fv.edit',$data->id) }}">Edit Data</a>
						</td>
						<td>
							<a href="{{ route('fv.show',$data->id) }}" class="btn btn-info">Show Data</a>
						</td>
						<td>
							<form method="post" action="{{ route('fv.destroy',$data->id) }}">
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