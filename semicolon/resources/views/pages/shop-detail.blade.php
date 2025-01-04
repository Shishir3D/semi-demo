@extends('layouts.frontend.app')

@php
    $name = 'Organic Rice';
    $brand = 'Hulas';
    $origin = 'Ram ko khet'
@endphp

<div className="top-gap" class="mt-40 font-bold max-w-screen-xl mx-auto flex justify-start pl-40">
    <p class="text-4xl">View the product</p>
</div>

<div className="card1"
    class="max-w-screen-xl mx-auto flex justify-evenly border-solid border-0 mt-20 border-green-500 rounded-lg shadow-lg items-center">

    <div className="product-image" class=" border-solid border-0 border-gray-500 size-80 rounded-md">
        <img src="{{ asset('images/shop_images/wheat.jpg') }}">
    </div>

    <div className="product-info"
        class="border-solid border-0 w-80 border-gray-500 flex-col justify-start p-10 rounded-lg ">

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

<div className="card2" class="max-w-screen-xl mx-auto border-solid border-0 border-green-500 rounded-lg shadow-lg mt-10 flex-col p-10">
    <p class="text-2xl font-bold">Products detail of {{$name}}</p>
    <br>
    <p>• Wheat is one of the oldest and most widely cultivated cereal grains in the world. It is a staple food for billions of people, providing a significant source of carbohydrates. The grain is primarily grown in temperate regions, with major producers including China, India, Russia, and the United States. Wheat is used to make a variety of products, including bread, pasta, and cereals, contributing to global food security. The plant belongs to the genus Triticum and has several species, including hard and soft wheat varieties.</p>
    <hr class="m-4 border-gray-400">
    <p class="font-bold">Specification of {{$name}}</p>
    <br>
    <div class="flex w-1/2 justify-start gap-40">
        <div class="flex-col">
            <p class="text-gray-500">Brand</p>
            <p>{{$brand}}</p>
        </div>
        <div class="flex-col">
            <p class="text-gray-500">Origin</p>
            <p>{{$origin}}</p>
        </div>
    </div>
</div>


@section('content ')
@endsection
