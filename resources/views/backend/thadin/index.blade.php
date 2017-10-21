@extends('vendor.adminlte.layout')

@section('heading')
Thadin
@endsection

@section('buttonLink')
<a href="{{ route('thadin.create') }}" class="btn btn-primary">Create</a>
@endsection

@section('content')
<div class="box">
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th class="col-md-3">Image</th>
					<th class="col-md-6">Title</th>
					<th class="col-md-3">Action</th>					
				</tr>
			</thead>
			<tbody>
				@foreach ($thadins as $thadin)
				<tr>
					<td><img src="{{ asset('images/thadin/thumbnails/thumb-'.$thadin->image_name.'.'.$thadin->image_extension) }}" alt=""></td>
					<td>{{$thadin->title}}</td>	
					<td>
						<div class="row">
							<div class="col-md-4">
								<a class="btn btn-primary" href="{{ route('thadin.edit',$thadin->id) }}">Edit</a>
							</div>
							<div class="col-md-8">
								<form action="{{ route('thadin.destroy', $thadin->id) }}" method="post">
									{{ csrf_field() }}
									{{ method_field('delete') }}
									<button class="btn btn-danger">Delete</button>
								</form>
							</div>
						</div>
					</td>				
				</tr>
				@endforeach                
			</tbody>
			<tfoot>
				<tr>
					<th class="col-md-3">Image</th>
					<th>Title</th>					
					<th>Action</th>					
				</tr>
			</tfoot>
		</table>
	</div>
</div>
@endsection

@section('script')
<!-- DataTables -->
<script src="{{ asset('/vendor/js/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('/vendor/js/dataTables.bootstrap.min.js') }}"></script>
<script>
	$(function () {
		$('#example1').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : true,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : false
		})
	})
</script>
@endsection