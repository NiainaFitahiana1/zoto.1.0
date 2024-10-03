@extends('layout.base')
@section('base')
<div class="flex justify-center px-6 h-full items-center">
    <div class="w-full max-w-xl mt-16 md:mt-28 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
      <div class="p-4 sm:p-7">
        <div class="text-center">
          <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Mot de passe oublié </h1>
          <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
           
            <a class="text-blue-900 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href={{route('tologin')}}>
              Autres méthodes 
            </a>
          </p>
        </div>
    
        <div class="mt-5">
          <!-- Form -->
          <form>
            <div class="grid gap-y-4">
              <!-- Form Group -->
              <div>
                <label for="name" class="block text-sm mb-2 dark:text-white">Nom enregistré lors de l'inscription</label>
                <div class="relative">
                  <input type="text" id="name" name="name" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900  dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required aria-describedby="email-error">
                </div>
                @error("name")
                <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                @enderror
              </div>
              <!-- End Form Group -->
              <div>
                <label for="telephone" class="block text-sm mb-2 dark:text-white">Numéro téléphone</label>
                <div class="relative">
                  <input type="text" id="telephone" name="telephone" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900  dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required aria-describedby="email-error">
                </div>
                @error("telephone")
                <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                @enderror
              </div>
              <!-- Checkbox -->
              <div class="flex items-center ms-2">
                
                <div class="ms-3">
                  <label for="remember-me" class="text-sm dark:text-white">Envoi mot de passe par texto SMS</label>
                </div>
              </div>
              <!-- End Checkbox -->
    
              <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Recevoir le mot de passe</button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
    </div>
</div>

@endsection