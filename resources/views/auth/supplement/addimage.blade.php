@extends('layout.base')
@section('base')
<div class="flex justify-center px-6 h-full items-center">
    <div class="w-full max-w-xl mt-16 md:mt-28 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
      <div class="p-4 sm:p-7">
        <div class="text-center">
          <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Bienvenue <span class="text-red-500">{{Auth::user()->name}}</span></h1>
          <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
            Souhaitez-vous d'ajouter une photo de profil ?
            <a class="text-blue-900 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href={{route("toregister")}}>
                Ignorer 
            </a>
          </p>
        </div>
    
        <div class="mt-5">
          <!-- Form -->
          <form action={{route("addphoto",Auth::user()->id)}} method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-y-4">
              <!-- Form Group -->
              <div>
                <label for="photo" class="block text-sm mb-2 dark:text-white">Votre photo</label>
                <div class="max-w-sm">
                    <div>
                      <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file"
                        name="photo"
                         class="block w-full text-sm text-gray-500
                          file:me-4 file:py-2 file:px-4
                          file:rounded-lg file:border-0
                          file:text-sm file:font-semibold
                          file:bg-blue-600 file:text-white
                          hover:file:bg-blue-700
                          file:disabled:opacity-50 file:disabled:pointer-events-none
                          dark:text-neutral-500
                          dark:file:bg-blue-500
                          dark:hover:file:bg-blue-400
                        ">
                      </label>
                    </div>
                  </div>
                @error("photo")
                <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                @enderror
              </div>
              <!-- End Form Group -->
              <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Enregistrer</button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
    </div>
</div>

@endsection