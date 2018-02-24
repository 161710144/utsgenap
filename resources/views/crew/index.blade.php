@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Crew
			  	<div class="panel-title pull-right"><a href="{{ route('cw.create') }}">Add</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-border">
				  <table class="table table-bordered">
				  	<thead>
			  		<tr class="active">
			  		  <th>No</th>
					  <th>Channel</th>
					  <th>Nama</th>
					  <th>Jabatan</th>
					  <th>Jenis kelamin</th>
					  <th>Program</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($cw as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->channel }}</td>
				    	<td><p>{{ $data->nama }}</p></td>
				    	<td>{{ $data->jabatan }}</td>
				    	<td>{{ $data->jenis_kelamin }}</td>
				    	<td>{{ $data->program }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('cw.edit',$data->id) }}">Edit Data</a>
						</td>
						<td>
							<a href="{{ route('cw.show',$data->id) }}" class="btn btn-info">Show Data</a>
						</td>
						<td>
							<form method="post" action="{{ route('cw.destroy',$data->id) }}">
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