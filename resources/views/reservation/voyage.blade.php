@extends('layout.home')
@section('home')
<section class="flex flex-col items-center justify-center pb-10 md:px-10">
    <div class="max-w-3xl w-full mt-5 md:px-5 column justify-center">
        <div class="bg-white p-5 md:p-14 gap-2 my-10 rounded-sm shadow-md">
            <!-- Titre de la réservation -->
            <p class="text-3xl md:text-5xl tracking-tight font-extrabold text-black sm:text-5xl md:text-6xl">
                Réservation dans {{ $voyage->article->titre }}
            </p>
            
            <!-- Itinéraire du voyage -->
            <p class="text-3xl tracking-tight font-extrabold text-gray-700 pt-3">
                {{ $voyage->point_A }} 
                <i class="fa fa-exchange-alt"></i> 
                {{ $voyage->point_B }}
            </p>
        
            <!-- Formulaire de réservation -->
            <form action="{{ route('reserver/voyage') }}" method="POST" class="w-full gap-x-3 mt-4 grid md:grid-cols-2 gap-4">
                @csrf
            
                <!-- Champs cachés (informations du voyage et utilisateur) -->
                <div class="hidden">
                    <input type="hidden" name="company_user_id" value="{{ $voyage->article->user_id }}">
                    <input type="hidden" name="article_id" value="{{ $voyage->article->id }}">
                    <input type="hidden" name="type_article" value="{{ $voyage->article->type_id }}">
                    <input type="hidden" name="voyage_id" value="{{ $voyage->id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                </div>
            
                @error("company_user_id" || "article_id" || "type_article" || "user_id")
                    <div class="text-xl text-red">Erreur</div>
                @enderror
            
                <!-- Nombre de passagers -->
                <div class="flex flex-col gap-y-2">
                    <label for="guest" class="text-sm text-black ps-1">Nombre de passagers</label>
                    <input 
                        type="number" 
                        id="guest" 
                        name="guest" 
                        value="{{ old('guest') }}" 
                        class="border focus:outline-none text-black bg-transparent rounded-md p-3"
                        min="1">
                    @error("guest")
                        <span class="text-sm text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Lieu de départ -->
                <div class="flex flex-col gap-y-2">
                    <label for="lieu_depart" class="text-sm text-black ps-1">Lieu de départ</label>
                    <select 
                        name="lieu_depart" 
                        id="lieu_depart" 
                        class="border focus:outline-none text-black bg-transparent rounded-md p-3">
                        <option value="{{ $voyage->point_A }}" {{ old('lieu_depart') == $voyage->point_A ? 'selected' : '' }} class="text-black">
                            {{ $voyage->point_A }}
                        </option>
                        <option value="{{ $voyage->point_B }}" {{ old('lieu_depart') == $voyage->point_B ? 'selected' : '' }} class="text-black">
                            {{ $voyage->point_B }}
                        </option>
                    </select>
                    @error("lieu_depart")
                        <span class="text-sm text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Date de départ souhaitée -->
                <div class="flex flex-col gap-y-2">
                    <label for="date" class="text-sm text-black ps-1">Date souhaitée</label>
                    <input 
                        type="date" 
                        id="date_depart" 
                        name="date_depart" 
                        value="{{ old('date_depart') }}" 
                        class="border focus:outline-none text-black bg-transparent rounded-md p-3">
                    @error("date_depart")
                        <span class="text-sm text-red-500 font-bold">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Bouton de soumission -->
                <div class="w-full md:col-span-2">
                    <button type="submit" class="bg-red-500 text-white text-sm py-4 font-bold rounded-lg w-full hover:bg-red-600 transition-colors">
                        Passer à la paiement
                    </button>
                </div>
            </form>
            
        </div>
        
    </div>
</section>
@endsection