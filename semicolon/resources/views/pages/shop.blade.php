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
                    'itemsSold' => '150',
                    'rating' => '★★★',
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
