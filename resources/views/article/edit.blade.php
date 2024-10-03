@extends('layout.dash')
@section('dash')
<div class="px-6 h-full items-center">
    <div class="my-2 w-full bg-black border border-gray-200 rounded-xs shadow-sm dark:bg-black dark:border-neutral-700">
        <div class="p-7 md:px-20">
          <div class="text-center">
            <h1 class="block text-2xl font-bold text-white dark:text-white">Mise à jour de l'article</h1>
          </div>
      
          <div class="mt-5">
      
            <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Formulaire</div>
      
            <!-- Form -->
            <form action={{route("phase3",$article->id)}} method="POST" enctype="multipart/form-data">
              @csrf
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Form Group -->
                  <div>
                    <label for="titre" class="block text-sm mb-2 dark:text-white">Titre</label>
                    <div class="relative">
                      <input 
                      type="text" 
                      id="titre" 
                      name="titre" 
                      value={{$article->titre}}
                      class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                      aria-describedby="titre-error">
                    </div>
                    @error("titre")
                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                    @enderror
                  </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                  <div>
                    <label for="type_id" class="block text-sm mb-2 dark:text-white">Service</label>
                    <div class="relative">
                      <select 
                      name="type_id" 
                      class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                      aria-describedby="-error">
                      <option value={{$article->type_id}}>{{$article->type->type}} <i class="text-xs">(Type actuelle)</i></option>
                      <option value="1">Voyage</option>
                      <option value="2">Location Voiture</option>
                      <option value="3">Colis</option>
                    </select>
                    </div>
                    @error("type_id")
                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                    @enderror
                  </div>
                <!-- End Form Group -->
                
                <div
                id="FileUpload"
                class="relative md:col-span-2 mb-5.5 block w-full cursor-pointer appearance-none rounded border border-dashed border-primary bg-gray px-4 py-4 dark:bg-meta-4 sm:py-7.5 text-white"
                style="background-image: url('{{asset("assets/uploads/".$article->photo)}}'); background-size:cover; background-position:center;">
                <input
                  type="file"
                  {{-- accept="image/*" --}}
                  name="photo"
                  value={{$article->photo}}
                  class="absolute inset-0 z-50 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-none"
                />
                <div
                  class="flex flex-col items-center justify-center space-y-3"
                >
                  <span
                    class="flex h-10 w-10 items-center justify-center rounded-full border border-stroke bg-white dark:border-strokedark dark:bg-boxdark"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M1.99967 9.33337C2.36786 9.33337 2.66634 9.63185 2.66634 10V12.6667C2.66634 12.8435 2.73658 13.0131 2.8616 13.1381C2.98663 13.2631 3.1562 13.3334 3.33301 13.3334H12.6663C12.8431 13.3334 13.0127 13.2631 13.1377 13.1381C13.2628 13.0131 13.333 12.8435 13.333 12.6667V10C13.333 9.63185 13.6315 9.33337 13.9997 9.33337C14.3679 9.33337 14.6663 9.63185 14.6663 10V12.6667C14.6663 13.1971 14.4556 13.7058 14.0806 14.0809C13.7055 14.456 13.1968 14.6667 12.6663 14.6667H3.33301C2.80257 14.6667 2.29387 14.456 1.91879 14.0809C1.54372 13.7058 1.33301 13.1971 1.33301 12.6667V10C1.33301 9.63185 1.63148 9.33337 1.99967 9.33337Z"
                        fill="#3C50E0"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.5286 1.52864C7.78894 1.26829 8.21106 1.26829 8.4714 1.52864L11.8047 4.86197C12.0651 5.12232 12.0651 5.54443 11.8047 5.80478C11.5444 6.06513 11.1223 6.06513 10.8619 5.80478L8 2.94285L5.13807 5.80478C4.87772 6.06513 4.45561 6.06513 4.19526 5.80478C3.93491 5.54443 3.93491 5.12232 4.19526 4.86197L7.5286 1.52864Z"
                        fill="#3C50E0"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.99967 1.33337C8.36786 1.33337 8.66634 1.63185 8.66634 2.00004V10C8.66634 10.3682 8.36786 10.6667 7.99967 10.6667C7.63148 10.6667 7.33301 10.3682 7.33301 10V2.00004C7.33301 1.63185 7.63148 1.33337 7.99967 1.33337Z"
                        fill="#3C50E0"
                      />
                    </svg>
                  </span>
                  <p class="text-sm font-medium">
                    <span class="">Ajouter des illustrations</span>
                    ou photos
                  </p>
                </div>
                @error("photo")
                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                @enderror
              </div>
                <div class="md:col-span-2">
                    <label for="description" class="block text-sm mb-2 dark:text-white">Description</label>
                    <div class="relative">
                      <textarea 
                      type="text" 
                      id="description" 
                      name="description" 
                      cols="30" rows="10"
                      class="py-3 px-4 h-20 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                      aria-describedby="description-error">{{$article->description}}</textarea>
                    </div>
                    @error("description")
                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                    @enderror
                  </div>            
                <button class="md:col-span-2 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Mettre à Jour</button>
            </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
</div>
@endsection

