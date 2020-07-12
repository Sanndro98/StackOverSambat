@extends('master')

@section('cmaster')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                   <form action="{{route('forum.store')}}" method="post">
                   	{{csrf_field()}}
                   		<div class="form-group {{$errors->has('title')?'has-error':''}}">
                   			<input type="text" name="title" placeholder="Judul" class="form-control">
                   			@if($errors->has('title'))
                   				<span class="help-block">{{$errors->first('title')}}</span>
                   			@endif
                   		</div>
                   		<div class="form-group {{$errors->has('tags')?'has-error':''}}">
                   			<select name="tags[]" multiple="multiple" class="form-control tags">
                   				@foreach($tags as $t)
                   				<option value="{{$t->id}}">{{$t->name}}</option>
                   				@endforeach
                   			</select>
                   			@if($errors->has('tags'))
                   				<span class="help-block">{{$errors->first('tags')}}</span>
                   			@endif
                   		</div>
                   		<div class="form-group {{$errors->has('descriptio')?'has-error':''}}">
                   			<textarea class="form-control" name="descriptio"></textarea>
                   			@if($errors->has('descriptio'))
                   				<span class="help-block">{{$errors->first('descriptio')}}</span>
                   			@endif
						   </div>
						   <a href="/forum" class="btn btn-success"><span class="fas fa-fw fa-chevron-left"></span>Back</a>
                   		<button type="submit" class="btn btn-primary"><span class="mr-1 fas fa-fw fa-check"></span>Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
$(".tags").select2({
    placeholder: "Select tags",
    maximumSelectionLength: 2
});
</script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
CKEDITOR.replace( 'descriptio');
</script>
@endsection
