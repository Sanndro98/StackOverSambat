@extends('master')

@section('cmaster')
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="{{route('forum.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Create Post</a>
              </div>

              <!-- Content Row -->
              <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-4 mb-4 offset-1">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Your Threads</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$forum->count()}}</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="col-xl-4 col-md-4 mb-4 offset-1">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">All Tags</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tag->count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

                
              </div>

              <!-- Content Row -->

              <div class="row">

                <!-- Threads -->
                <div class="col-xl-8 col-lg-7">
                  <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Your Threads</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <ul class="list-group">
                            @forelse($forum as $f)
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{$f->title}}
                                <div>
                                    <span class="badge badge-danger badge-pill"><i class="fa fa-comments" aria-hidden="true"></i> {{$f->comments->count()}}</span>
                                    <span class="badge badge-danger badge-pill"><i class="fa fa-arrow-up" aria-hidden="true"></i> 0</span>
                                </div>
                              </li>
                              @empty
                            <div class="text-center">
                              <h6 class="ml-2 font-weight-bold text-primary">Make a Thread Now!</h6>
                            </div>
                            @endforelse
                            </ul>                           
                        </div>
                    </div>


                  </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">

                  <!-- Project Card Example -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">All Tags</h6>
                      <a class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" href="{{route('tag.create')}}" type="submit"><i class="fas fa-fw fa-tags"></i> Create Tag</a>
                    </div>
                    <div class="card-body">
                          <div class="list-group">
                            @foreach($tag as $t)
                              <a href="#" class="list-group-item list-group-item-action ">
                                {{$t->name}}
                             </a>
                          @endforeach
                            </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
</div>
@endsection
