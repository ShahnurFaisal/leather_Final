@extends('backend.partials.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary" style="text-transform: uppercase">Profile Update</h5>
                               @include('error')
                            <div class="row">
                                <!-- Basic Layout -->
                                <div class="col-xxl">
                                  <div class="card mb-4">

                                    <div class="card-body">
                                        @if (session('success'))
                                        <div class="alert slert-success timeout" style="color: green" >{{ session('success') }}</div>
                                        @elseif (session('error'))
                                        <div class="alert slert-danger timeout">{{ session('error') }}</div>

                                        @endif
                                      <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="row">


                                            <div class=" mb-3 col-4">
                                                <label class=" col-form-label" for="basic-default-name">Name</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ $data['user']->name}}" name="name" id="basic-default-name" placeholder="Blog Title" required />
                                                </div>
                                              </div>




                                            <div class="col-4 mb-3">
                                                <label class=" col-form-label"  for="basic-default-phone">Email*</label>
                                                <div class="col-sm-10">
                                                  <input
                                                    type="email"
                                                    name="email"
                                                    class="form-control"
                                                    value="{{ $data['user']->email}}"

                                                    aria-describedby="basic-default-phone"
                                                  />
                                                </div>
                                              </div>
                                            <div class=" mb-3 col-4">
                                                <label class=" col-form-label" for="basic-default-name"> Photo</label>
                                                <div class="col-sm-10">
                                                  <input name="photo" type="file" class="form-control my-2 "  id="image"/>
                                                  <img style="width:200px;height:200px" id="showImage" src="{{ asset($data['user']->photo ? $data['user']->photo : 'backend/img/previewImage.png') }}" alt="" class="image-style mb-3">
                                              </div>
                                              </div>

                                        </div>
                                        <div class="row justify-content-end">
                                          <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                              </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        $('#image').change('click',function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
<script>
    setTimeout(() => {
     $('.timeout').fadeOut('slow')
    }, 3000);
</script>


@endpush

