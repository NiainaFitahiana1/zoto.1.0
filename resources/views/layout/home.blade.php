@extends("layout.app")
@section("body")
<section class="flex flex-col items-center justify-center md:px-10">
    <div class="max-w-4xl w-full mt-20 md:px-5 px-12 column justify-center">
        @yield("home")
    </div>
</section>
@endsection