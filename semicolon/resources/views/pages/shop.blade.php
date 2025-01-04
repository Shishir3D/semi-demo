@extends('layouts.frontend.app')
@section('content')
<div class="">


    <div className="productHeading" class="mt-40 text-4xl max-w-screen-xl flex flex-wrap items-center justify-left pl-20 mx-auto p-4">
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
            'description' => 'Wheat is a widely cultivated cereal grain, rich in carbohydrates and a primary ingredient in bread, pasta, and many other staple foods.'
],
[
            'name' => 'Organic Millet',
            'image' => 'images/shop_images/wheat.jpg',
            'price' => 'RS: 5000',
            'itemsSold' => '150',
            'rating' => '★★★',
            'description' => 'Millet is a nutritious, gluten-free whole grain known for its high fiber content and versatility in cooking.'
],
[
            'name' => 'Organic Barley',
            'image' => 'images/shop_images/wheat.jpg',
            'price' => 'RS: 6000',
            'itemsSold' => '160',
            'rating' => '★★★★★',
            'description' => 'Barley is a nutritious, gluten-free whole grain known for its high fiber content and versatility in cooking.'
],
[
            'name' => 'Organic Rice',
            'image' => 'images/shop_images/wheat.jpg',
            'price' => 'RS: 4000',
            'itemsSold' => '140',
            'rating' => '★★★★'
],
[
            'name' => 'Organic Rice',
            'image' => 'images/shop_images/wheat.jpg',
            'price' => 'RS: 4000',
            'itemsSold' => '140',
            'rating' => '★★★★'
],
[
            'name' => 'Organic Rice',
            'image' => 'images/shop_images/wheat.jpg',
            'price' => 'RS: 4000',
            'itemsSold' => '140',
            'rating' => '★★★★'
],
[
            'name' => 'Organic Rice',
            'image' => 'images/shop_images/wheat.jpg',
            'price' => 'RS: 4000',
            'itemsSold' => '140',
            'rating' => '★★★★'
],
[
            'name' => 'Organic Rice',
            'image' => 'images/shop_images/wheat.jpg',
            'price' => 'RS: 4000',
            'itemsSold' => '140',
            'rating' => '★★★★'
],
[
            'name' => 'Organic Rice',
            'image' => 'images/shop_images/wheat.jpg',
            'price' => 'RS: 4000',
            'itemsSold' => '140',
            'rating' => '★★★★'
]
    ]
@endphp
    <div className="line1" class="max-w-screen-xl flex flex-wrap items-center justify-evenly mx-auto p-4">

        @foreach ($datas as $data)
        <a href="/shop-detail">
            <div class="mb-10 mr-5 cursor-pointer group rounded-lg size-80 flex pt-0 items-center flex-col pl-0 justify-center border-solid border-2 border-green-500 relative top-0 shadow-lg hover:ring-4 hover:ring-green-500 transition-shadow">
                <div class="mt-8 w-2/3 h-1/2 border-solid border-0 border-black aspect-[8/3]">
                    <img src="{{asset($data['image'])}}">
                </div>
                <div class="flex w-full pl-14 pt-4">
                    <p class="text-2xl">{{$data['name']}}</p>
                </div>
                <div class="mt-2 w-2/3 h-1/4 border-solid border-0 border-black aspect-[8/3] flex-col justify-center items-center">
                    <p class="text-xl">{{$data['price']}}</p>
                    <p class="text-gray-500"> {{$data['itemsSold']}} sold | <span class="text-green-500">{{$data['rating']}}<span></p>
                    </div>
                    <!-- Hidden Buy Now Button -->
                    <div class="absolute ml-40 bottom-[-40px] opacity-0 transition-all duration-300 group-hover:bottom-5 group-hover:opacity-100">
                        <button class="bg-green-500 text-white px-6 py-2 rounded-lg shadow-lg hover:bg-green-600">
                            Buy Now
                        </button>
                    </div>
            </div>
        </a>
        @endforeach


    </div>

</div>
<div class="size-40"></div>
@endsection
