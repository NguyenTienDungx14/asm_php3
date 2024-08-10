<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Apple</h2>
        <p>Products</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Iphone</li>
                <li data-filter=".filter-product">Mac</li>
                <li data-filter=".filter-branding">Ipad</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($cate_id_1 as $iphone)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">

                        <img src="{{ \Illuminate\Support\Facades\Storage::url($iphone->image )  }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $iphone->name }}</h4>
                            <p>{{ $iphone->description }}</p>
{{--                            <img src="{{ \Illuminate\Support\Facades\Storage::url($iphone->image )  }}" alt="" >--}}
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>

                    </div><!-- End Portfolio Item -->
                @endforeach

                @foreach($cate_id_2 as $iphone)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">

                        <img src="{{ \Illuminate\Support\Facades\Storage::url($iphone->image )  }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $iphone->name }}</h4>
                            <p>{{ $iphone->description }}</p>
{{--                            <img src="{{ \Illuminate\Support\Facades\Storage::url($iphone->image )  }}" alt="" >--}}
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>

                    </div><!-- End Portfolio Item -->
                @endforeach

                @foreach($cate_id_3 as $iphone)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">

                        <img src="{{ \Illuminate\Support\Facades\Storage::url($iphone->image )  }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $iphone->name }}</h4>
                            <p>{{ $iphone->description }}</p>
{{--                            <img src="{{ \Illuminate\Support\Facades\Storage::url($iphone->image )  }}" alt="" >--}}
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>

                    </div><!-- End Portfolio Item -->
                @endforeach


            </div><!-- End Portfolio Container -->



        </div>

    </div>

</section>
