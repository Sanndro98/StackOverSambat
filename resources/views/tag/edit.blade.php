@extends('master')

@section('cmaster')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Tag</div>

                <div class="card-body">
                   <form action="{{route('tag.update', $tag->id)}}" method="post">
                   	{{csrf_field()}}
                    {{method_field('PUT')}}
                   		<div class="form-group {{$errors->has('title')?'has-error':''}}">
                   			<input type="text" name="name" class="form-control" value="{{$tag->name}}">
                        @if($errors->has('title'))
                          <span class="help-block">{{$errors->first('title')}}</span>
                        @endif
                   		</div>
                   		<button type="submit" class="btn btn-primary">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
