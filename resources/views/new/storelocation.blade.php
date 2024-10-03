@extends("layout.dash")
@section("dash")
<div
class="mb-6 ms-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
<nav>
  <ol class="flex items-center gap-2">
    <li>
      <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("dashcompany")}}>Dashboard</a>
    </li>
    <li class="font-bold font-mono px-1 py-1">/</li>
    <li class="font-bold font-mono text-red-600 py-1 px-2">Création article de Location Voiture</li>
  </ol>
</nav>
</div>
<div class="md:px-6 h-full items-center">
    <div class="my-2 w-full bg-gray-50 rounded-md border-gray-600 rounded-xs shadow-sm dark:bg-gray-50">
        <div class="p-7 md:px-10">
          <div class="mt-1">
            <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Formulaire</div>
      
            <!-- Form -->
            <form action={{route("phase1")}} method="POST" enctype="multipart/form-data">
              @csrf
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Form Group -->
                  <div>
                    <label for="titre" class="block text-sm mb-2 dark:text-gray-800">Titre</label>
                    <div class="relative">
                      <input 
                      type="text" 
                      id="titre" 
                      name="titre" 
                      class="py-3 px-4 block w-full border-gray-600 bg-gray-50 rounded-md text-sm focus:outline-none dark:text-gray-800 dark:border-black border"
                      aria-describedby="titre-error">
                    </div>
                    @error("titre")
                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                    @enderror
                  </div>
                <!-- End Form Group -->
                <input type="text" value='2' name="type_id" class="hidden">
                <div>
                  <label for="titre" class="block text-sm mb-2 dark:text-gray-800">Image réprésentant</label>
                  <div class="relative">
                    <input 
                    type="file" 
                    id="photo" 
                    name="photo" 
                    class="block w-full border border-black shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                    file:bg-gray-700 file:border-0
                    file:me-4
                    file:py-3 file:px-4
                    dark:file:bg-neutral-300 dark:file:text-neutral-400"
                    aria-describedby="photo-error">
                  </div>
                  @error("photo")
                  <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                  @enderror
                </div>
                <!-- Form Group -->
                <div class="md:col-span-2">
                    <label for="description" class="block text-sm mb-2 dark:text-gray-800">Description</label>
                    <div class="relative">
                      <textarea 
                      type="text" 
                      id="description" 
                      name="description" 
                      cols="30" rows="10"
                      class="py-3 px-4 h-20 block w-full border-gray-600 bg-gray-50 rounded-md text-sm focus:outline-none dark:text-gray-800 dark:border-black border"
                      aria-describedby="description-error"></textarea>
                    </div>
                    @error("description")
                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                    @enderror
                </div>
                <!-- End Form Group -->
                {{-- <div class="md:col-span-2">
                    <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600"><i class="fa fa-check fa-2x"></i></div>
                </div> --}}
                <button class="md:col-span-2 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Suivant</button>
            </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
</div>
@endsection