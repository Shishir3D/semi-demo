@extends('layouts.frontend.app')
@section('content')
    <div class="">


        <div className="productHeading"
            class="mt-40 text-4xl max-w-screen-xl flex flex-wrap items-center justify-left pl-20 mx-auto p-4">
            OUR PRODUCTS
        </div>

        @php
            $datas = [
                [
                    'name' => 'Organic Wheat',
                    'image' => 'images/shop_images/wheat.jpg',
                    'price' => 'RS: 4000',
                    'itemsSold' => '140',
                    'rating' => '★★★★',
                    'description' =>
                        'Wheat is a widely cultivated cereal grain, rich in carbohydrates and a primary ingredient in bread, pasta, and many other staple foods.'
                ],
                [
                    'name' => 'Organic Millet',
                    'image' => 'images/shop_images/wheat.jpg',
                    'price' => 'RS: 5000',
                    'itemsSold' => '150',
                    'rating' => '★★★',
                    'description' =>
                        'Millet is a nutritious, gluten-free whole grain known for its high fiber content and versatility in cooking.',
                ],
                [
                    'name' => 'Organic Barley',
                    'image' => 'images/shop_images/wheat.jpg',
                    'price' => 'RS: 6000',
                    'itemsSold' => '160',
                    'rating' => '★★★★★',
                    'description' =>
                        'Barley is a nutritious, gluten-free whole grain known for its high fiber content and versatility in cooking.',
                ],
                [
                    'name' => 'Organic Rice',
                    'image' => 'images/shop_images/wheat.jpg',
                    'price' => 'RS: 4000',
                    'itemsSold' => '140',
                    'rating' => '★★★★',
                ],
                [
                    'name' => 'Organic Rice',
                    'image' => 'images/shop_images/wheat.jpg',
                    'price' => 'RS: 4000',
                    'itemsSold' => '140',
                    'rating' => '★★★★',
                ],
                [
                    'name' => 'Organic Rice',
                    'image' => 'images/shop_images/wheat.jpg',
                    'price' => 'RS: 4000',
                    'itemsSold' => '140',
                    'rating' => '★★★★',
                ],
                [
                    'name' => 'Organic Rice',
                    'image' => 'images/shop_images/wheat.jpg',
                    'price' => 'RS: 4000',
                    'itemsSold' => '140',
                    'rating' => '★★★★',
                ],
                [
                    'name' => 'Organic Rice',
                    'image' => 'images/shop_images/wheat.jpg',
                    'price' => 'RS: 4000',
                    'itemsSold' => '140',
                    'rating' => '★★★★',
                ],
                [
                    'name' => 'Organic Rice',
                    'image' => 'images/shop_images/wheat.jpg',
                    'price' => 'RS: 4000',
                    'itemsSold' => '140',
                    'rating' => '★★★★',
                ],
            ];
        @endphp
        <div className="line1" class="max-w-screen-xl flex flex-wrap items-center justify-evenly mx-auto p-4">

            @foreach ($datas as $data)
                @include('components.shop-card')
            @endforeach


        </div>

    </div>
    <div class="size-40"></div>
@endsection
