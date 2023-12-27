@extends('backend.partials.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary" style="text-transform: uppercase">Mission Vission</h5>
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
                                                <label class=" col-form-label" for="basic-default-name">Mission*</label>
                                               <textarea class="form-control" name="mission" id="" style="width: 100%" cols="30" rows="10">{{ $data['mission_vission'] ? $data['mission_vission']->mission : '' }}</textarea>
                                              </div>
                                            <div class=" mb-3 col-12">
                                                <label class=" col-form-label" for="basic-default-name">Vission*</label>
                                               <textarea class="form-control" name="vission" id="" style="width: 100%" cols="30" rows="10">{{ $data['mission_vission'] ? $data['mission_vission']->vission : '' }}</textarea>
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
    setTimeout(() => {
     $('.timeout').fadeOut('slow')
    }, 3000);
</script>


@endpush
