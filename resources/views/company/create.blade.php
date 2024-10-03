@extends("layout.dash")
@section('dash')
<div class="grid grid-cols-2 gap-x-1">
    <h1>Create Article</h1>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-2 gap-4">
        @csrf

        <!-- Titre -->
        <div>
            <label for="titre" class="block text-xs mb-2 text-gray-500 dark:text-black">Titre</label>
            <div class="relative">
                <input type="text" id="titre" name="titre" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                @error('titre')
                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <!-- Type -->
        <div>
            <label for="type_id" class="block text-xs mb-2 text-gray-500 dark:text-black">Type</label>
            <div class="relative">
                <select id="type_id" name="type_id" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    <option value="1">Voyage</option>
                    <option value="2">Location Voiture</option>
                    <option value="3">Service bagage</option>
                </select>
                @error('type_id')
                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <div class="md:col-span-2">
            <label for="photo" class="block text-xs mb-2 text-gray-500 dark:text-black">Illustrations</label>
            <div class="relative">
                    <input type="file" name="photo" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:border-neutral-300 dark:text-neutral-400
                      file:bg-gray-50 file:border-0
                      file:me-4
                      file:py-3 file:px-4
                      dark:file:bg-neutral-700 dark:file:text-neutral-400">
            </div>
            @error("photo")
            <p class="text-xs text-red-600 mt-2" id="photo">{{$message}}</p>
            @enderror
          </div>

        <!-- Description -->
        <div class="md:col-span-2">
            <label for="description" class="block text-xs mb-2 text-gray-500 dark:text-black">Description</label>
            <div class="relative">
                <textarea id="description" name="description" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500"></textarea>
                @error('description')
                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>


        <!-- Etat -->
        {{-- <div>
            <label for="etat_id" class="block text-xs mb-2 text-gray-500 dark:text-black">Etat</label>
            <div class="relative">
                <select id="etat_id" name="etat_id" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    <!-- Options dynamiques -->
                </select>
                @error('etat_id')
                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div> --}}

        <!-- User -->
        {{-- <div>
            <label for="user_id" class="block text-xs mb-2 text-gray-500 dark:text-black">User</label>
            <div class="relative">
                <select id="user_id" name="user_id" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    <!-- Options dynamiques -->
                </select>
                @error('user_id')
                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div> --}}

        <!-- Destinations -->
        {{-- <div id="destinations">
            <h3>Destinations</h3>
            <div>
                <label for="point_A" class="block text-xs mb-2 text-gray-500 dark:text-black">Point A</label>
                <div class="relative">
                    <input type="text" id="point_A" name="destinations[0][point_A]" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    @error('destinations[0][point_A]')
                    <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="point_B" class="block text-xs mb-2 text-gray-500 dark:text-black">Point B</label>
                <div class="relative">
                    <input type="text" id="point_B" name="destinations[0][point_B]" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    @error('destinations[0][point_B]')
                    <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Classements -->
        <div id="classements">
            <h3>Classements</h3>
            <div>
                <label for="type_classement" class="block text-xs mb-2 text-gray-500 dark:text-black">Type</label>
                <div class="relative">
                    <input type="text" id="type_classement" name="classements[0][type]" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    @error('classements[0][type]')
                    <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="prix_classement" class="block text-xs mb-2 text-gray-500 dark:text-black">Prix</label>
                <div class="relative">
                    <input type="number" id="prix_classement" name="classements[0][prix]" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                    @error('classements[0][prix]')
                    <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div> --}}

        {{-- <!-- Ouverture -->
        <div>
            <label for="ouverture" class="block text-xs mb-2 text-gray-500 dark:text-black">Ouverture</label>
            <div class="relative">
                <input type="time" id="ouverture" name="ouverture" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                @error('ouverture')
                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Fermeture -->
        <div>
            <label for="fermeture" class="block text-xs mb-2 text-gray-500 dark:text-black">Fermeture</label>
            <div class="relative">
                <input type="time" id="fermeture" name="fermeture" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:text-neutral-400 dark:placeholder-neutral-500" required>
                @error('fermeture')
                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div> --}}

        <button type="submit" class="md:col-span-2 py-2 px-4 mt-4 bg-blue-500 text-white text-sm rounded-md">Submit</button>
    </form>
@endsection
