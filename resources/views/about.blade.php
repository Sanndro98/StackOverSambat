@extends('master')
@section('cmaster')
  <div class="container-fluid py-5">
    <div class="row mb-4">
      <div class="col-lg-12">
        <h2 class="display-4 font-weight-light">Our team</h2>
      </div>
    </div>

    <div class="row text-center">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4 "><img src="{{asset('sandro.JPG')}}" alt="" width="150" height="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm overflow-hidden">
          <h5 class="mb-0">Alexandro Alvin Valentino</h5><span class="small text-uppercase text-muted">Back End Programming</span>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{asset('rizqi.jpg')}}" alt="" width="150" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Rizqi Fadhlillah</h5><span class="small text-uppercase text-muted">Front End Programming</span>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-2_f8dowd.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Hartoyo Wahyu</h5><span class="small text-uppercase text-muted">ERD Designer</span>
        </div>
      </div>
      <!-- End-->
    </div>
  </div>


@endsection('cmaster')