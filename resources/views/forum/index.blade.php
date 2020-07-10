@extends('master')

@section('cmaster')
<div class="container">
    <div class="card">
      <div class="card-header">
        <div class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Pertanyaan</a>
        <form class="form-inline">
          <a class="btn btn-outline-primary mr-sm-2" type="submit" href="{{route('forum.create')}}">Tambah Pertanyaan</a>
        </form>
      </div>
      </div>
      <div class="card-body">
      @foreach($forum as $a)
        <div class="card">
          <div class="card-header">
            <div class=" media flex-wrap w-100 align-items-center justify-content-between">
            <a class="{{route('forum.show' , $a->id)}}">{{$a->title}}</a>
            <div class="float-right ml-5">
              <form class="form-inline" action="{{route('forum.destroy' ,$a->id)}}" method="post">
                <a class="btn btn-outline-primary mr-sm-2 btn-sm" type="submit" href="{{route('forum.show' , $a->id)}}">Lihat Detail</a>
                <a class="btn btn-outline-warning mr-sm-2 btn-sm" type="submit" href="{{route('forum.edit' , $a->id)}}">Edit</a>
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                <button class="btn btn-outline-danger mr-sm-2 btn-sm" type="submit">Hapus</button>
              </form>
            </div>
          </div>
          </div>
          <div class="card-body">
            <p>{{$a->description}}</p>
          </div>
          <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
            <div class="px-4 pt-3 d-inline-flex align-items-center align-middle"> 
                <h5>Tags: </h5>
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