@extends('layout.home')
@section('home')
<section class="flex flex-col items-center justify-center pb-10 md:px-10">
    <div class="max-w-xl w-full mt-5 md:px-5 column justify-center">
        <div class="bg-white p-5  gap-2 my-10 rounded-md  shadow-md">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                @foreach($article->fiaras as $sary)                   
                    <img src={{asset("assets/uploads/".$sary->photos)}} alt="" class="md:size-full object-cover">
                @endforeach
            </div>
            <p class="text-3xl md:text-5xl tracking-tight font-extrabold text-black sm:text-5xl md:text-6xl">Réservation Voiture</p>
            <p class="text-3xl tracking-tight font-extrabold text-gray-400 pt-3">{{$article->voiture}}</p>
            <div>
                <form action={{route("reserver/voiture")}} method="POST" class="grid md:grid-cols-2 gap-2">
                    @csrf
                    <div class="flex flex-col gap-y-2">
                        <label for="" class="text-sm text-black ps-1 ">Au nom de</label>
                        <input type="text" name="nom" class="border focus:outline-none text-black bg-transparent rounded-md p-3">
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="" class="text-sm text-black ps-1 ">Date souhaité</label>
                        <input type="date" name="date" class="border focus:outline-none text-black bg-transparent rounded-md p-3">
                        <input type="number" name="article_id" value={{$article->id}} class="hidden">
                    </div>
                    <div class="w-full md:col-span-2">
                        <button class="bg-red-500 text-white text-sm py-4 font-bold rounded-lg w-full">Passer à la payement</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection