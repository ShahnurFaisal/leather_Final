@extends('backend.partials.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary" style="text-transform: uppercase">Product Update</h5>
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
                                                <label class=" col-form-label" for="basic-default-name">Product Name*</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" name="name" id="basic-default-name" value="{{ $data['product']->name }}" />
                                                </div>
                                              </div>


                                              <div class="col-4 mb-3">
                                                <label for="nameBasic" class="form-label">Category*</label>
                                                <select name="category_id" id="get_category_id" class="form-select">
                                                    <option>Select Category</option>
                                                    @foreach ($data['category_list'] as $single_category)
                                                        <option @if ($data['product']->category_id == $single_category->id) selected

                                                        @endif  value="{{ $single_category->id }}">{{ $single_category->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                              
                                            <div class="col-4 mb-3">
                                                <label class=" col-form-label"  for="basic-default-phone">Priority*</label>
                                                <div class="col-sm-10">
                                                  <input
                                                    type="text"
                                                    name="priority"
                                                    id="basic-default-phone"
                                                    class="form-control phone-mask"
                                                    value="{{ $data['product']->priority }}"
                                                  />
                                                </div>
                                              </div>
                                            <div class=" mb-3 col-4">
                                                <label class=" col-form-label" for="basic-default-name">Product Photo*</label>
                                                <div class="col-sm-10">
                                                  <input name="photo" type="file" value="{{ $data['product']->photo }}" class="form-control my-2 "  id="image"/>
                                                  <img style="width:200px;height:200px" id="showImage" src="{{ asset($data['product']->photo ? $data['product']->photo : 'backend/img/previewImage.png') }}" alt="" class="image-style mb-3">
                                              </div>
                                              </div>

                                              <div class="mb-3 col-4">
                                                <label class="col-form-label" for="basic-default-name">Characteristics*</label>
                                                <span class="badge badge-center bg-primary" onclick="increase_quantity()" style="font-size: 16px;cursor:pointer">+</span>
                                                <span class="badge badge-center bg-danger" onclick="decrease_quantity()" style="font-size: 16px;cursor:pointer">-</span>
                                                @php
                                                    $characteristics = $data['product']->characteristics;
                                                    $array = json_decode($characteristics);

                                                @endphp
                                                <div class="characteristics" id="characteristics">
                                                    @foreach ($array as  $title =>$details)

                                                    <div class="row character-set" id="set1">
                                                        <div class="col-sm-4">
                                                            <input name="title[]" type="text" value="{{ $title }}" class="form-control my-2 mb-1" />
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input name="details[]" type="text" value="{{ $details }}" class="form-control my-2 mb-1" />
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                            <div class="mb-3 col-4">
                                                <label class=" col-form-label" for="basic-default-name">Photo Gallery*</label>
                                                <div class="col-sm-10">

                                                    <input type="file" class="form-control my-2" value="{{ $data['product']->photo_gallery }}" name="photo_gallery[]" id="image" multiple/>
                                                
                                                </div>
                                                </div>
                                                <div class=" mb-3 col-12">
                                                    <label class=" col-form-label" for="basic-default-name">Primary Description*</label>
                                                    
                                                    <input type="text" value="{{ $data['product']->primary_description }}" class="form-control" name="primary_description" id="">
                                                    </div>
                                            <div class=" mb-3 col-12">
                                                <label class=" col-form-label" for="basic-default-name">Description*</label>
                                               <textarea class="form-control" name="description" id="" style="width: 100%" cols="30" rows="10">{{ $data['product']->description }}</textarea>
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

<script>
    $(document).ready(function(){
        $('#get_category_id').on('change', function(){
        var category_id = $('#get_category_id').find(':selected').val();
        // $('#subcategory').prop('disabled', true);
        $('#subcategory').empty();
        if(category_id !== ''){
            $.ajax({
            url:'/admin/product/subcategory/show',
            type:'GET',
            contentType:false,
            data:{
                category_id : category_id,
            },
            success: function(response) {
                    if (response.success) {
                        $('#subcategory').prop('disabled', false);
                        $('#subcategory').append('<option  selected>Select A Sub Category</option>');
                        if (response.subcategory.length > 0) {
                            $.each(response.subcategory, function(index, subcategory) {
                                $('#subcategory').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                            });
                        } else {
                            $('#subcategory').append('<option disabled selected>No Sub Category available</option>');
                        }
                    }
                }
        })
        }

    });
    })

</script>

<script>
    function increase_quantity() {
        // Generate a unique ID for the new set
        var setId = "set" + (new Date()).getTime();
        $('.characteristics').append(
            '<div class="row character-set" id="' + setId + '"><div class="col-sm-4"><input name="title[]" class="form-control my-2 mb-1"></div><div class="col-sm-6"><input name="details[]" class="form-control my-2 mb-1"></div></div>'
        );
    }

    function decrease_quantity() {
    // Check if there are more than one sets before allowing the decrease
    if ($('.characteristics .character-set').length > 1) {
        // Remove the last set of input fields
        $('.characteristics .character-set:last').fadeOut(function () {
            $(this).remove();
        });
    }
}

</script>

@endpush
