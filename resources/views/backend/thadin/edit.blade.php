@extends('vendor.adminlte.layout')


@section('heading')
Thadin
@endsection
@section('small')
Edit
@endsection
@section('buttonLink')
<a href="{{ route('thadin.index') }}" class="btn btn-success">Back</a>
@endsection

@section('content')

<div class="box box-default">
	<div class="box-header with-border">

		{!! Form::model($thadin,['route' => ['thadin.update',$thadin->id],'method' => 'put','enctype'=>"multipart/form-data"]) !!}
		
		<div class="box-body">

			<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Enter Name' ]) }}
				@if ($errors->has('title'))
				<span class="help-block">
					{{ $errors->first('name') }}
				</span>
				@endif				
			</div>

			<div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
				{{ Form::label('body', 'Body') }}

				{!! Form::textarea('body', null, ['class' => 'form-control','placeholder' => 'Enter body' ]) !!}
				@if ($errors->has('body'))
				<span class="help-block">
					{{ $errors->first('body') }}
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