@extends("layout.dash")
@section("dash")
<div class="flex px-6 md:px-0 h-full items-center">
    <div class="w-full bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-50 dark:border-neutral-700">
      <div class="p-4 sm:p-3 grid grid-cols-1 md:grid-cols-2">
        <div class=" h-full flex flex-col items-center justify-center">
          <h1 class="flex flex-col items-center text-2xl font-bold text-gray-800 text-gray-600 dark:text-black"> 
            <div class="w-20 h-20 rounded-full border  hover:border-5 hover:border-blue-700 shadow-md shadow-black border-blue-800" style="background-image:url('{{asset('assets/uploads/'.$article->photo)}}');background-size:cover;background-position:center;"></div>
            {{$article->titre}}</h1>
            <p class="text-start mt-2 text-sm text-gray-900 dark:text-neutral-400">
            Service: {{$article->type->type}}
            <ol class="text-gray-300 text-gray-600 dark:text-black">
                <li class="text-xs text-start">{{$article->description}}</li>
                <li class="text-xs text-start">{{$article->description}}</li>
            </ol>
          </p>
        </div>
        {{-- @if($article->type_id==1) --}}
        <div class="mt-5">
          <!-- Form -->
        <form action="{{ route('articles.storeDetails') }}" method="POST">
            @csrf
    
            <!-- Destinations -->
            <div id="destinations">
                <h3>Destinations</h3>
                <div class="destination-item">
                  <input type="number" value={{$article->id}} name="article_id" class="hidden">
                    <label for="point_A" class="block text-xs mb-2 text-gray-500 dark:text-black">Point A</label>
                    <div class="relative">
                        <input type="text" name="destinations[0][point_A]" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    </div>
    
                    <label for="point_B" class="block text-xs mb-2 text-gray-500 dark:text-black">Point B</label>
                    <div class="relative">
                        <input type="text" name="destinations[0][point_B]" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    </div>
                </div>
            </div>
    
            <button type="button" id="add-destination" class="py-2 px-4 mt-4 bg-green-500 text-white rounded-md">Add Destination</button>
    
            <!-- Classements -->
            <div id="classements">
                <h3>Classements</h3>
                <div class="classement-item">
                    <label for="type_classement" class="block text-xs mb-2 text-gray-500 dark:text-black">Type</label>
                    <div class="relative">
                        <input type="text" name="classements[0][type]" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    </div>
    
                    <label for="prix_classement" class="block text-xs mb-2 text-gray-500 dark:text-black">Prix</label>
                    <div class="relative">
                        <input type="number" name="classements[0][prix]" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    </div>
                </div>
            </div>
    
            <button type="button" id="add-classement" class="py-2 px-4 mt-4 bg-green-500 text-white rounded-md">Add Classement</button>
            <button type="submit" class="py-2 px-4 mt-4 bg-blue-500 text-white rounded-md">Submit</button>
        </form>
          <!-- End Form -->
        </div> 

      </div>
    </div>
</div>
@endsection