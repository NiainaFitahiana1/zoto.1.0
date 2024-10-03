@extends('layout.base')
@section("style")
<link rel="stylesheet" href={{asset("css/index.css")}}>
@endsection
@section('base')
<div class="flex justify-center px-6 h-full items-center bg-in">
    <div class="w-full max-w-lg my-16 md:my-24 bg-gray-100/60  border-gray-200 rounded-2xl">
      {{-- <a href={{route("home")}} class="bg-gray-100/60 fixed w-12 h-12 inline-flex items-center justify-center"><i class="fa fa-arrow-left"></i></a> --}}
      
      <div class="p-4 sm:p-10">
          <a href={{route("home")}} class="mt-5 mb-10  flex justify-center">
            <img src={{asset("logos/dark.mini.png")}} class="h-16 w-16 object-cover " alt="" />
          </a>
          <div class="">
            <!-- Form -->
            <form action={{route("verification")}} method="POST">
              @csrf
              <div class="grid gap-y-4">
                <!-- Form Group -->
                <div>
                  <label for="telephone" class="block text-sm mb-2 text-black">Numéro téléphone</label>
                  <div class="relative">
                    <input type="text" id="telephone" name="telephone" class="w-full p-3 text-black rounded border-black focus:outline-none focus:bg-gray-100 focus:border-gray-500" aria-describedby="email-error">
                  </div>
                  @error("telephone")
                  <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                  @enderror
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div>
                  <div class="flex justify-between items-center">
                    <label for="password" class="block text-sm mb-2 text-black">Mot de passe</label>
                    <a class="inline-flex items-center gap-x-1 text-sm text-blue-900 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href={{route("forgotpassword")}}>Mot de passe oubliée?</a>
                  </div>
                  <div class="relative">
                    <input type="password" id="password" name="password" class="w-full p-3 text-black rounded border-black focus:outline-none focus:bg-gray-100 focus:border-gray-500" aria-describedby="password-error">
                  </div>
                  @error("password")
                  <p class="text-xs text-red-600 mt-2" id="password-error">{{$message}}</p>
                  @enderror
                </div>
                <!-- End Form Group -->
                <button type="submit" class="w-full bg-gray-800 hover:bg-slate-700 text-white font-bold p-3 rounded">Se connecter</button>
              </div>
            </form>
            <!-- End Form -->
          </div>
          <div class="flex flex-col w-full sm:w-auto p-4 items-center">
            <a href={{route("toregister")}}
                class="flex flex-row gap-x-3 items-center justify-center w-full px-4 mb-4 text-sm font-semibold leading-6 text-blue-900 hover:underline">
                Créer une compte
                <i class="fa fa-user-plus"></i>
            </a> 
          </div>
      </div>
    </div>
</div>
  
@endsection