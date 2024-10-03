@extends('layout.base')
@section("style")
<link rel="stylesheet" href={{asset("css/index.css")}}>
@endsection
@section('base')
<div class="flex justify-center px-6 h-full items-center bg-in">
    <div class="my-20 w-full max-w-2xl bg-gray-100/60 border-gray-200 rounded-xl dark:border-neutral-700">
        <a href={{route("home")}} class="inline-flex items-center justify-center w-full mt-10">
          <img src={{asset("logos/dark.mini.png")}} class="h-16 w-16 object-cover " alt="" />
        </a>
        <div class="sm:p-10 p-4">
          {{-- <div class="text-center flex flex-col items-start sm:items-center">
            <h1 class="block text-3xl tracking-tight font-extrabold text-gray-800 dark:text-white">Inscription</h1>
            <span class="font-semibold text-xs">ou</span><a href={{route("toregister")}} class="text-blue-700 font-semibold text-sm tracking-tigh hover:underline">Se connecter</a>
          </div> --}}
      
          <div class="">
            <!-- Form -->
            <form action={{route("traitement")}} method="POST" enctype="multipart/form-data">
              @csrf
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Form Group -->
                <div>
                    <label for="nom" class="block text-sm mb-2 dark:text-white">Nom et Prénom</label>
                    <div class="relative">
                      <input 
                      type="text" 
                      id="nom" 
                      name="name" 
                      class="w-full p-3 text-black rounded border-black focus:outline-none focus:bg-gray-100 focus:border-gray-500 @error('name') @enderror"
                      aria-describedby="Nom-error">
                    </div>
                    @error("name")
                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                    @enderror
                  </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div>
                  <label for="email" class="block text-sm mb-2 dark:text-white">Adresse E-mail</label>
                  <div class="relative">
                    <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full p-3 text-black rounded border-black focus:outline-none focus:bg-gray-100 focus:border-gray-500 @error('email')@enderror" aria-describedby="email-error">
                  </div>
                  @error('email')
                  <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                  @enderror
                </div>
                <!-- End Form Group -->
      
                <!-- Form Group -->
                  <div>
                    <label for="telephone" class="block text-sm mb-2 dark:text-white">Numéro téléphone</label>
                    <div class="relative">
                      <input type="telephone" id="telephone" name="telephone" class="w-full p-3 text-black rounded border-black border focus:outline-none focus:bg-gray-100 focus:border-gray-500 @error('telephone')@enderror" aria-describedby="password-error">
                    </div>
                    @error("telephone")
                    <p class="text-xs text-red-600 mt-2" id="telephone-error">{{$message}}</p>
                    @enderror
                  </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                  <div>
                    <label for="adresse" class="block text-sm mb-2 dark:text-white">Votre adresse valide</label>
                    <div class="relative">
                      <input type="text" id="adresse" name="adresse" class="w-full p-3 text-black rounded border-black focus:outline-none focus:bg-gray-100 focus:border-gray-500 @error('adresse')@enderror" aria-describedby="password-error">
                    </div>
                    @error("adresse")
                    <p class="text-xs text-red-600 mt-2" id="adresse-error">{{$message}}</p>
                    @enderror
                  </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div>
                  <label for="password" class="block text-sm mb-2 dark:text-white">Mot de passe</label>
                  <div class="relative">
                      <input type="password" id="password" name="password" class="w-full p-3 text-black rounded border-black focus:outline-none focus:bg-gray-100 focus:border-gray-500 @error('password')@enderror" aria-describedby="password-error">
                  </div>
                  @error('password')
                  <p class="text-xs text-red-600 mt-2" id="password-error">{{$message}}</p>
                  @enderror
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div>
                  <label for="password_confirmation" class="block text-sm mb-2 dark:text-white">Confirmation mot de passe</label>
                  <div class="relative">
                      <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-3 text-black rounded border-black focus:outline-none focus:bg-gray-100 focus:border-gray-500 @error('password_confirmation')@enderror" aria-describedby="password_confirmation-error">
                  </div>
                  @error('password_confirmation')
                  <p class="text-xs text-red-600 mt-2" id="password_confirmation-error">{{$message}}</p>
                  @enderror
                </div>
                <button type="submit" class="md:col-span-2 w-full bg-gray-800 hover:bg-slate-700 text-white font-bold p-3 rounded">Inscrire</button>
            </div>
            </form>
            <!-- End Form -->
          </div>
          <div class="flex flex-col w-full sm:w-auto p-4 items-center">
            <a href={{route("tologin")}}
                class="flex flex-row gap-x-3 items-center justify-center w-full px-4 pt-5 text-sm font-semibold leading-6 text-blue-900 hover:underline">
                Se connecter
                <i class="fa fa-sign-in"></i>
            </a> 
          </div>
        </div>
      </div>
</div>
@endsection
