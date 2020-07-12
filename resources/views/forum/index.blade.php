@extends('master')

@section('cmaster')
<div class="container">
    <div class="card">
      <div class="card-header">
        <div class="navbar navbar-light bg-light justify-content-between">
        <a class="font-weight-bold text-primary navbar-brand">All Question</a>
        <form class="form-inline">
          <a class="btn btn-outline-primary mr-sm-2" type="submit" href="{{route('forum.create')}}">
            <span class="fas fa-fw fa-plus"></span>
            Add Question</a>
        </form>
      </div>
      </div>
      <div class="card-body">
      @foreach($forum as $a)
        <div class="card">
          <div class="card-header">
            <div class=" media flex-wrap w-100 align-items-center justify-content-between">
            <a class="{{route('forum.show' , $a->id)}}"><span class="font-weight-bold text-muted py-3">Topic:</span> {{$a->title}}</a>
            <div class="float-right ml-5">
              <form class="form-inline" action="{{route('forum.destroy' ,$a->id)}}" method="post">
                <a class="btn btn-outline-primary mr-sm-2 btn-sm" type="submit" href="{{route('forum.show' , $a->id)}}">
                  <span class="fas fa-fw fa-info"></span>
                  Detail</a>
                <a class="btn btn-outline-warning mr-sm-2 btn-sm" type="submit" href="{{route('forum.edit' , $a->id)}}">
                  <span class="fas fa-fw fa-edit"></span>
                  Edit</a>
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                <button class="btn btn-outline-danger mr-sm-2 btn-sm" type="submit">
                  <span class="fas fa-fw fa-trash"></span>
                  Delete
                </button>
              </form>
            </div>
          </div>
          </div>
          <div class="card-body">
            <p>{{$a->description}}</p>
          </div>
          <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
            <div class="px-4 pt-3 d-inline-flex align-items-center align-middle"> 
                <h5>
                  <i class="mr-1 fas fa-tags"></i>
                  Tags: </h5>
                  <a href="javascript:void(0)" class="text-muted" data-abc="true">
                    @foreach($a->tags as $t)
                    <a href="" class="badge badge-primary tag_label ml-1">{{$t->name}}</a>
                    @endforeach
                  </a> 
            </div>
          </div>
        </div>
        <br>
      @endforeach
      </div>
    </div>
</div>
@endsection