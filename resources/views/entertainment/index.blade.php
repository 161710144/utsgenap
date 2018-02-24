@extends('index')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Entertainment
			  	<div class="panel-title pull-right"><a href="{{ route('etr.create') }}">Add</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-condensed">
				  <table class="table table-condensed">
				  	<thead>
			  		<tr class="active">
			  		  <th>No</th>
					  <th>Nama Acara</th>
					  <th>Host</th>
					  <th>Nama Selebriti</th>
					  <th>Topik</th>
					  <th>Riwayat</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($etr as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->judul }}</td>
				    	<td><p>{{ $data->host }}</p></td>
				    	<td>{{ $data->selebriti }}</td>
				    	<td>{{ $data->kabar }}</td>
				    	<td>{{ $data->riwayat }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('etr.edit',$data->id) }}">Edit Data</a>
						</td>
						<td>
							<a href="{{ route('etr.show',$data->id) }}" class="btn btn-info">Show Data</a>
						</td>
						<td>
							<form method="post" action="{{ route('etr.destroy',$data->id) }}">
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