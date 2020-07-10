@extends('master')

@section('cmaster')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>

                <div class="card-body">
                   <form action="{{route('forum.update', $forum->id)}}" method="post">
                   	{{csrf_field()}}
                    {{method_field('PUT')}}
                   		<div class="form-group {{$errors->has('title')?'has-error':''}}">
                   			<input type="text" name="title" class="form-control" value="{{$forum->title}}">
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
                   		<div class="form-group {{$errors->has('description')?'has-error':''}}">
                   			<!-- <textarea type="text" name="description" class="form-control"></textarea> -->
                        <textarea class="form-control" name="descriptio">{{$forum->description}}</textarea>
                        @if($errors->has('descriptio'))
                          <span class="help-block">{{$errors->first('description')}}</span>
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
@section('js')
<script type="text/javascript">
$(".tags").select2().val({!! json_encode($forum->tags()->allRelatedIds())!!}).trigger('change');
</script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
CKEDITOR.replace( 'descriptio');
</script>

@endsection