@extends('master')

@section('cmaster')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Tag</div>

                <div class="card-body">
                   <form action="{{route('tag.store')}}" method="post">
                   	{{csrf_field()}}
                   		<div class="form-group {{$errors->has('title')?'has-error':''}}">
                   			<input type="text" name="name" placeholder="Nama Tag" class="form-control">
                   			@if($errors->has('title'))
                   				<span class="help-block">{{$errors->first('title')}}</span>
                   			@endif
                   		</div>
                   		<button type="submit" class="btn btn-primary btn-block">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
