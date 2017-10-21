@extends('vendor.adminlte.layout')


@section('heading')
Savehouse
@endsection
@section('small')
Create
@endsection
@section('buttonLink')
<a href="{{ route('savehouse.index') }}" class="btn btn-success">Back</a>
@endsection

@section('content')

<div class="box box-default">
	<div class="box-header with-border">
		
		{!! Form::model($savehouse,['route' => ['savehouse.update',$savehouse->id],'method' => 'put','enctype'=>"multipart/form-data"]) !!}

		
		<div class="box-body">

			<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
				{{ Form::label('name', 'Name') }}
				{{ Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Enter Name' ]) }}
				@if ($errors->has('name'))
				<span class="help-block">
					{{ $errors->first('name') }}
				</span>
				@endif				
			</div>

			<div class="row">
				<div class="form-group {{ $errors->has('city_id') ? ' has-error' : '' }} col-md-6">
					{{ Form::label('city_id', 'City') }}					
					{{ Form::select('city_id', $cities, null, ['class'=>'form-control','placeholder' => 'Choose City...']) }}
					@if ($errors->has('city_id'))
					<span class="help-block">
						{{ $errors->first('city_id') }}
					</span>
					@endif				
				</div>

				<div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }} col-md-6">
					{{ Form::label('category_id', 'Category') }}					
					{{ Form::select('category_id', $categories, null, ['class'=>'form-control','placeholder' => 'Choose Category...']) }}
					@if ($errors->has('category_id'))
					<span class="help-block">
						{{ $errors->first('category_id') }}
					</span>
					@endif				
				</div>
			</div>
			
			<div class="row">
				<div class="form-group {{ $errors->has('lat') ? ' has-error' : '' }} col-md-6">
					{{ Form::label('lat', 'Lattitude') }}
					{{ Form::text('lat',null, ['class' => 'form-control', 'placeholder' => 'Enter Lattitude' ]) }}
					@if ($errors->has('lat'))
					<span class="help-block">
						{{ $errors->first('lat') }}
					</span>
					@endif				
				</div>

				<div class="form-group {{ $errors->has('lng') ? ' has-error' : '' }} col-md-6">
					{{ Form::label('lng', 'Longitude') }}
					{{ Form::text('lng',null, ['class' => 'form-control', 'placeholder' => 'Enter Longitude' ]) }}
					@if ($errors->has('lng'))
					<span class="help-block">
						{{ $errors->first('lng') }}
					</span>
					@endif				
				</div>
			</div>			
			
			<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
				{{ Form::label('address', 'Address') }}
				{{ Form::text('address',null, ['class' => 'form-control', 'placeholder' => 'Enter Address' ]) }}
				@if ($errors->has('address'))
				<span class="help-block">
					{{ $errors->first('address') }}
				</span>
				@endif				
			</div>

			<div class="form-group {{ $errors->has('phones') ? ' has-error' : '' }}">
				{{ Form::label('phones', 'Phone') }} <input class="button-add" type="button" value="Clone box"><br>
				@foreach ($savehouse->phones as $phone)
				<div class="phone-box">					
						{{ Form::text('phones[]',$phone->phone_number, ['class' => 'form-control']) }}							
				</br>
				@endforeach	
			</div>				
			@if ($errors->has('phones'))
			<span class="help-block">
				{{ $errors->first('phones') }}
			</span>
			@endif				
		</div>

		<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
			{{ Form::label('description', 'Description') }}

			{!! Form::textarea('description', null, ['class' => 'form-control','placeholder' => 'Enter Description' ]) !!}
			@if ($errors->has('description'))
			<span class="help-block">
				{{ $errors->first('description') }}
			</span>
			@endif				
		</div>

		<div class="row">
			<div class="form-group {{ $errors->has('image') ? ' has-error' : '' }} col-md-6">
				{{ Form::label('image', 'Image') }}
				{{ Form::file('image',null,['class'=>'form-control']) }}
				@if ($errors->has('image'))
				<span class="help-block">
					{{ $errors->first('image') }}
				</span>
				@endif				
			</div>
		</div>

	</div>

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>

	{!! Form::close() !!}
</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function() {

		$('.button-add').click(function(){
        		//we select the box clone it and insert it after the box
        		$('.phone-box:first').clone().insertAfter(".phone-box:last");
        	});

		$(document).on("click", ".button-remove", function() {
			$(this).closest(".phone-box").remove();
		});
	});	
</script>

@endsection