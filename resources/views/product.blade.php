@extends('layouts.main')

@section('container')
    <!-- ======= Product Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
            <h2>Product</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

        </div>
        
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($flowers as $flower)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/flowers/' . $flower->image) }}" class="card-img-top" width="100%" height="225 alt="...">
                        <div class="card-body ">
                        <h5 class="card-title fw-bold text-uppercase">{{ $flower->title }}</h5>
                        <p class="card-text text-capitalize">{{ $flower->content }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
    </section><!-- End Product Section -->
@endsection