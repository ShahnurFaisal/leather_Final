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
        <a href="#" class="btn rounded-pill mt-20">
            <span>Read More</span>
        </a>

    </div>
</div>
@endforeach

