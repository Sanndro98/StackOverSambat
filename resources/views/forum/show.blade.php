@extends('master')

@section('cmaster')
<div class="container mt-100">
     <div class="row">
         <div class="col-md-12">
             <div class="card mb-4">
                 <div class="card-header">
                     <div class="media flex-wrap w-100 align-items-center"> <img src="" class="d-block ui-w-40 rounded-circle" alt="">
                         <div class="media-body ml-3"> Posted by <a href="javascript:void(0)" data-abc="true">{{$forum->user->name}}</a>
                             <div class="text-muted small">Posted At :{{$forum->created_at}}</div>
                         </div>
                         <div class="text-muted small ml-3">
                            <button class="btn btn-success" id="cart" onclick="addNumber()">
                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                <span id="cartnumber">0</span>
                            </button>
                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <h1>{{$forum->title}}</h1>
                     <p>{{$forum->description}}</p>
                 </div>
                 <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                     <div class="px-4 pt-3 d-inline-flex align-items-center align-middle"> 
                     	<h5>Tags: </h5>
                     	<a href="javascript:void(0)" class="text-muted" data-abc="true">
                     		@foreach($forum->tags as $t)
				            <a href="" class="badge badge-primary tag_label ml-1">{{$t->name}}</a>
				            @endforeach
                     	</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
<h1>Comments</h1>
	@forelse($forum->comments as $c)
         <div class="col-md-12">
             <div class="card mb-4">
                 <div class="card-header">
                     <div class="media flex-wrap w-100 align-items-center"> <img src="" class="d-block ui-w-40 rounded-circle" alt="">
                         <div class="media-body ml-3">Commented by <a href="javascript:void(0)" data-abc="true">{{$c->user->name}}</a>
                             <div class="text-muted small">Commented on {{$c->created_at}}</div>
                         </div>

                     </div>
                 </div>
                 <div class="card-body">
                     <h4>{{$c->content}}</h4> 
                 </div>
                 <!-- card footer -->
                 <div class="card-footer">
                     <!-- content -->
                     <div class="mb-5">
                      <a class="btn btn-primary float-right btn-md" data-toggle="collapse" href="#{{$c->id}}-reply">
                        Reply
                      </a>
                    </div>
                    <div class="collapse" id="{{$c->id}}-reply">
                        <div class="col-md-10 offset-2">
                            @forelse($c->comments as $r)
                            <div class="card">
                                <div class="card-header">
                                    {{$r->user->name}}
                                </div>
                                <div class="card-body">
                                    {{$r->content}}
                                </div>   
                            </div>
                            <br>
                            @empty
                            <div class="card-body">
                                <p>Add your reply here:')</p>
                            </div>
                            @endforelse
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Add Your Reply
                            </div>
                            <div class="card card-body">
                                <form action="{{route('replyComment',$c->id)}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group {{$errors->has('content')?'has-error':''}}">
                                        <textarea class="form-control"></textarea>
                                        @if($errors->has('conten2'))
                                            <span class="help-block">{{$errors->first('conten2')}}</span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                     <!-- content -->
                 </div>
                 <!-- card footer -->
            </div>           
        </div>
    
    @empty
    <p>No Comment</p>
    @endforelse
    <div class="card">
    	<div class="card-header">
    		<h1>Add Comment</h1>
    	</div>
    	<div class="card-body">
    		<form action="{{route('addComment',$forum->id)}}" method="post">
    			{{csrf_field()}}
	    		<div class="form-group {{$errors->has('content')?'has-error':''}}">
	                <textarea class="form-control" name="conten"></textarea>
	                @if($errors->has('conten'))
                   		<span class="help-block">{{$errors->first('conten')}}</span>
                   	@endif
	            </div>
	            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    	</div>
    </div>
 </div>

@endsection
@section('js')
</script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
CKEDITOR.replace('conten');
</script>
<script type="text/javascript">
    var click = 0;
        function addNumber()
        {
            click++;
            document.getElementById('cartnumber').innerHTML = click;
        }   
</script>
@endsection