@extends('layout.base')
@section('base')
<div class="flex justify-center px-6 h-full items-center">
    <div class="my-16 w-full max-w-2xl bg-white border rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <div class="p-4 sm:p-7">
          <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Inscription Compagnies</h1>
            {{-- <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
              Inscription tant que compagnies
              <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href={{route("tologin")}}>
                Retour
              </a>
            </p> --}}
          </div>
      
          <div class="mt-5">
           
            <!-- Form -->
            <form action={{route("create",Auth::user()->id)}} method="POST" enctype="multipart/form-data">
              @csrf
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Form Group -->
                <div>
                    <label for="comany_name" class="block text-sm mb-2 dark:text-white">Nom compagnie</label>
                    <div class="relative">
                      <input 
                      type="text" 
                      id="comany_name" 
                      name="company_name" 
                      class="py-3 px-4 block w-full rounded-md text-sm focus:border-gray-300 focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border @error('name') border-red-600  @enderror"
                      aria-describedby="Nom-error">
                    </div>
                    @error("company_name")
                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                    @enderror
                  </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div>
                  <label for="company_email" class="block text-sm mb-2 dark:text-white">E-mail</label>
                  <div class="relative">
                    <input 
                    type="email" 
                    id="company_email" 
                    name="company_email" 
                    class="py-3 px-4 block w-full rounded-md text-sm focus:border-gray-300 focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border @error('company_email') border-red-600 @enderror" aria-describedby="company_email-error">
                  </div>
                  @error('company_email')
                  <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                  @enderror
                </div>
                <!-- End Form Group -->
      
                <!-- Form Group -->
                  <div>
                    <label for="company_telephone" class="block text-sm mb-2 dark:text-white">Numéro téléphone</label>
                    <div class="relative">
                      <input type="text" id="company_telephone" name="company_telephone" class="py-3 px-4 block w-full rounded-md text-sm focus:border-gray-300 focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border @error('company_telephone') border-red-600 @enderror" aria-describedby="password-error">
                    </div>
                    @error("company_telephone")
                    <p class="text-xs text-red-600 mt-2" id="company_telephone-error">{{$message}}</p>
                    @enderror
                  </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div>
                    <label for="company_siege" class="block text-sm mb-2 dark:text-white">Adresse</label>
                    <div class="relative">
                        <input type="text" id="company_siege" name="company_siege" class="py-3 px-4 block w-full rounded-md text-sm focus:border-gray-300 focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border @error('company_adresse') border-red-600 @enderror" aria-describedby="company_siege-error">
                    </div>
                    @error('company_adresse')
                    <p class="text-xs text-red-600 mt-2" id="company_siege-error">{{$message}}</p>
                    @enderror
                </div>
                <!-- End Form Group -->
  
                <!-- Form Group -->
                <div class="col-span-1 md:col-span-2 w-full">
                    <label for="company_logo" class="block text-sm mb-2 dark:text-white">Votre logo</label>
                      <input type="file" name="company_logo" id="company_logo" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-100 dark:text-neutral-400
                        file:bg-gray-50 file:border-0
                        file:me-4
                        file:py-3 file:px-4
                        dark:file:bg-neutral-700 dark:file:text-neutral-400">
                    @error("company_logo")
                    <p class="text-xs text-red-600 mt-2" id="company_logo-error">{{$message}}</p>
                    @enderror
                </div>
                <!-- End Form Group -->      
                <!-- Checkbox -->
                <div>
                    <div class="flex items-center">
                            <div class="flex">
                                <input id="regle" name="regle" type="checkbox" class="shrink-0 mt-0.5 h-5 w-5 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                            </div>
                            <div class="ms-3">
                                <label for="regle" class="text-sm dark:text-white">J'accepte les<a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#"> Termes et Conditions</a></label>
                            </div>
                    </div>
                    @error("regle")
                            <p class="text-xs text-red-600 mt-2" id="company_logo-error">{{$message}}</p>
                            
                    {{-- @dd($e) --}}
                    @enderror
                </div>
                <!-- End Checkbox -->
                <button type="submit" class="md:col-span-2 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Inscrire</button>
            </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
</div>
@endsection