@extends('frontend.partials.app')
@section('content')
    <!--Contents-->
    <main class="shop-page style-5 style-grad">
        <!-- ====== start shop page ====== -->
        <section class="shop section-padding pt-150">
            <div class="container">
                <div class="section-head text-center style-4">
                    <h2 class="mb-20">Our <span> Product </span> </h2>
                    <div class="page-links color-999">
                        <a href="#" class="me-2">
                            Product
                        </a>
                        <span class="me-2">/</span>
                        <a href="#" class="color-000">
                            BDLeather.com
                        </a>
                    </div>
                </div>
                <div class="row gx-4">
                    <div class="col-lg-3">
                        <div class="filter">
                            <div class="filter-card mb-30">
                                <div class="card-title">
                                    <span>Categories</span>
                                </div>


                                <div class="accordion" id="accordionExample">
                                    @foreach ($data['category'] as $single_category)
                                    <div class="">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse_{{ $single_category->id }}" aria-expanded="false"
                                                aria-controls="collapse_{{ $single_category->id }}" data-category_id="{{ $single_category->id }}">
                                                <?= $single_category->category_name ?>
                                            </button>
                                        </h2>

                                    </div>
                                @endforeach

                                </div>

                            </div>
                            <div class="filter-card">
                                <div class="card-title d-flex justify-content-between">
                                    <span>Filter</span>

                                </div>
                                <div class="filter-card-item">
                                    <div class="filter-card-body">
                                        <div class="search-group">
                                            <input type="text" placeholder="Search brand">
                                            <button> <i class="bi bi-search"></i> </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="products-content">
                            <div class="top-filter mb-10">
                                <div class="row align-items-center">
                                 
                                    <div class="col-lg-6">
                                        <div class="r-side">
                                            <div class="row align-items-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products">
                                <div class="row gx-2 gx-lg-4"  id="product" >

                                         @foreach ($data['product'] as $single_product )
                                         <div class="col-6 col-lg-4 card-width">
                                            <div class="product-card">
                                                <div class="img">
                                                    <img src="{{ asset($single_product->photo ? $single_product->photo : 'frontend/image/product/4.png')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <h6 class="category">{{ $single_product->category_name }}</h6>
                                                    <h5 class="title">{{ $single_product->name }}</h5>
                                                    <div class="rate">
                                                      <p>{{ $single_product->description }}</p>

                                                    </div>
                                                </div>
                                                <a href="{{ route('single.product',$single_product->id) }}" class="btn rounded-pill mt-20">
                                                    <span>Read More</span>
                                                </a>

                                            </div>
                                        </div>
                                         @endforeach
                                </div>
                                <div id="data_limit" style="width: 100%; " class=" color-4 justify-content-center mt-50">
                                {{ $data['product']->links()  }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end shop page ====== -->
    </main>
    <!--End-Contents-->
@endsection
@push('js')

<script>
    $(document).ready(function(){
        $('.accordion-button').on('click', function(){
            $('#data_limit').hide();
            var category_id = $(this).data('category_id');
            var product_url = '/product-by-category';

            $.ajax({
                url: 'product-by-category',
                type: 'GET',
                data: {
                    'category_id': category_id,
                },
                success: function(data){
                    $('#product').html(data);  // Assuming the response is HTML content.
                },
                error: function(error){
                    console.error('Error loading products:', error);
                }
            });
        });
    });
</script>




@endpush
