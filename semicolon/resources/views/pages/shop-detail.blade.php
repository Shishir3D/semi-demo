@extends('layouts.frontend.app')

<div className="top-gap" class="mt-40 font-bold max-w-screen-xl mx-auto flex justify-start pl-40">
    <p class="text-4xl">View the product</p>
</div>
<div className="top-gap" class="max-w-screen-xl mx-auto flex justify-evenly">
    <div class="flex-col mt-10">

        <div class="flex gap-8">
            <div class="flex-col ">
                <div className="product-image" class="mt-20 border-solid border-1.5 border-gray-500 rounded-lg shadow-lg size-20">
                    <img src="{{asset('images/shop_images/wheat.jpg')}}">
                </div>
                <div className="product-image" class="mt-10 border-solid border-1.5 border-gray-500 rounded-lg shadow-lg size-20">
                    <img src="{{asset('images/shop_images/wheat.jpg')}}">
                </div>
                <div className="product-image" class="mt-10 border-solid border-1.5 border-gray-500 rounded-md shadow-lg size-20">
                    <img src="{{asset('images/shop_images/wheat.jpg')}}">
                </div>
            </div>

            <div className="product-image" class="mt-20 border-solid border-2 border-gray-500 size-80 rounded-md shadow-lg">
                <img src="{{asset('images/shop_images/wheat.jpg')}}">
            </div>
        </div>
    </div>
    <div className="product-info"
        class="mt-20 border-solid border-2 w-80 border-gray-500 flex-col justify-start p-10 rounded-lg shadow-lg">
        <p className="product-title" class="text-4xl font-bold">Organic Rice</p>
        <p className="ratings" class="text-xg"><span class="text-green-500">★★★★</span> (140 reviews) | In Stock </p>
        <p className="price" class="text-xg">RS: 4000</p>
        <br>
        <p class="text-xg">Wheat is a widely cultivated cereal grain, rich in carbohydrates and a primary ingredient in
            bread, pasta, and many other staple foods</p>
        <br>
        <hr class="border-black border-2">
        <p class="mt-3 text-xg"> Type : Whole Grains </p>
        <br>
        <button class="bg-green-500 text-white px-6 py-2 rounded-lg shadow-lg hover:bg-green-600">
            Place Order
        </button>
    </div>
</div>


@section('content ')
@endsection
