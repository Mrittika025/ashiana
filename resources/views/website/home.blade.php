@extends('layouts.test')
@section('content')

    <section id="product">
        <div class="container" id="product-container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center">
                    <h2 class="font-weight-bold text-color glow" style="color: #black; padding-top: 5px;">
                        Categories
                    </h2>
                </div>
            </div>
            <?php $category = DB::table('categories')
            ->where('status', 0)
            ->get(); ?>
            <div class="row">
                @foreach ($category as $item)
                    <div class="col-md-4 col-sm-6" id="boxshadow">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="{{ route('categroy_product', $item->category_id) }}">
                                    <img src="{{ asset('/images/' . $item->cat_image) }}" alt="" style=" background-position: center center;
                                                                background-size: cover;
                                                                background-repeat: no-repeat;
                                                                text-align: center;">
                                </a>

                            </div>
                            <div class="product-content">
                                <div style="margin-bottom:5px;">
                                    <a class="btn"
                                        href="{{ route('categroy_product', $item->category_id) }}">{{ $item->category_name }}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>
        </div>

        </div>


    </section>





    <!-- -----------------product section-------------------- -->

    <!-- -----------------End product section-------------------- -->
@endsection
