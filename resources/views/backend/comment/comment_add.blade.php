@extends('backend.partials.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary" style="text-transform: uppercase">Comment Add</h5>
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


                                            <div class=" mb-3 col-12">
                                                <label class=" col-form-label" for="basic-default-name">Comment *</label>
                                                <div class="">
                                                  <textarea type="text" style="width: 100%" class="form-control" name="comment" id="basic-default-name" placeholder="Write The Comment Here" required ></textarea>
                                                </div>
                                              </div>
                                            <div class=" mb-3 col-12">
                                                <label class=" col-form-label" for="basic-default-name">Commentor Name *</label>
                                                <div class="">
                                                  <input type="text" style="width: 100%" class="form-control" name="commentor_name" id="basic-default-name" placeholder="Enter Commentator Name" required />
                                                </div>
                                              </div>
                                            <div class=" mb-3 col-12">
                                                <label class=" col-form-label" for="basic-default-name">Commentor Designation *</label>
                                                <div class="">
                                                  <input type="text" style="width: 100%" class="form-control" name="commentor_designation" id="basic-default-name" placeholder="Enter Commentator Designation" required />
                                                </div>
                                              </div>
                                            <div class="col-12 mb-3">
                                                <label class=" col-form-label"  for="basic-default-phone">Priority* <small>(Must be Number Like "1234567")</small></label>
                                                <div class="">
                                                  <input
                                                    type="text" name="priority" id="basic-default-phone"   class="form-control phone-mask"
                                                    placeholder="941"       aria-describedby="basic-default-phone"
                                                  />
                                                </div>
                                              </div>

                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                          <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary">Add</button>
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
