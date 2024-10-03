@extends("layout.home")
@section("home")
  <div class="w-full flex justify-center">
    <div class="max-w-md w-full bg-gray-50 p-10 my-10">
      <h2 class="text-black text-xl font-bold">Nombre des passagers : <span class="text-green-400"> {{$reservation->guest}}</span></h2>
      <h2 class="text-black text-xl font-bold">Frais : <span class="text-green-400"> {{$voyage->tarif_1}} Mga/Personne</span></h2>
      <h2 class="text-black text-xl font-bold border-b border-b-gray-400">Total : <span class="text-red-500"> {{$tarif}} Mga</span></h2>
      <p class="text-lg font-bold py-2 text-gray-500">
        Vous pouvez payer la totale avec mobile money. <br>
        Voici la numéro : 
        <span class="text-md text-red-600">
          {{$voyage->numero}} 
        </span> <br>
        <em>au nom de {{$voyage->article->titre}}</em>
      </p>
      <div class="font-semibold text-black">
          {{-- <span class="text-lg">Description de payement</span> --}}
          <form action={{route("payer/voyage")}} class="" method="POST">
              @csrf
              <div class="w-full grid md:grid-cols-1 gap-2">
                <div class="flex flex-col gap-y-2">
                    <label for="date" class="text-sm text-black ps-1">Reference</label>
                    <input type="" 
                    id="reference" 
                    name="reference" 
                    class="border border-gray-600 focus:outline-none text-black bg-transparent rounded-sm p-3">
                    @error("reference")
                    <span class="text-sm text-red-500 font-bold">{{$message}}</span>
                    @endif
                </div>
                <div class="hidden">
                  <input type="int" value={{$reservation->id}} name="reservation_id">
                  <input type="int" value={{Auth::user()->id}} name="user_id">
                  {{-- <input type="int" value={{$reservation->id}} name="voyage_id"> --}}
                </div>
                <div class="flex flex-col gap-y-2">
                  <label for="date" class="text-sm text-black ps-1">Envoyé par</label>
                  <input type="" 
                  id="envoyeur" 
                  name="envoyeur" 
                  class="border border-gray-600 focus:outline-none text-black bg-transparent rounded-sm p-3">
                  @error("envoyeur")
                  <span class="text-sm text-red-500 font-bold">{{$message}}</span>
                  @endif
                </div>
                  <button class="mt-4 border-gray-600 focus:outline-none text-black bg-blue-400 rounded-sm p-3">Envoyer</button>
              </div>
          </form>
      </div>
  </div>
  </div>  
@endsection
