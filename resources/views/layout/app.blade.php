@extends('layout.base')
@section("style")
<link rel="stylesheet" href={{asset("css/index.css")}}>
@endsection
@section('base')
    <div class="bg-gray-800">
        <div class="background-blur">
        </div>
        <div class="content bg-black/50 backdrop-blur-2">
            @include('partial.appbar')
            @yield('body')
        </div>
    </div>
 @include('partial.footer')
@endsection