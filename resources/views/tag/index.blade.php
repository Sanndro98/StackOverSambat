@extends('master')

@section('cmaster')
<div class="container">
    <div class="card">
      <div class="card-header">
        <div class="navbar navbar-light bg-light justify-content-between">
          <a class="navbar-brand font-weight-bold text-primary">Tags</a>
          <form class="form-inline">
            <a class="btn btn-outline-primary mr-sm-2" type="submit" href="{{route('tag.create')}}"><span class="fas fa-fw fa-plus"></span>Tambah Tag</a>
          </form>
          <p class="mt-2 font-weight-light text-muted">A tag is a keyword or label that categorizes your question with other, similar questions. Using the right tags makes it easier for others to find and answer your question.</p>
        </div>
      </div>
      <div class="card-body">
      <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Tags</th>
              <th scope="col">Created At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tag as $t)
            <tr>
              <td>{{$t->name}}</td>
              <td>{{$t->created_at}}</td>
              <td>
                <a href="{{route('tag.edit',$t->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                <form action="{{route('tag.destroy',$t->id)}}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection