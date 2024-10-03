@extends("layout.app")
@section("body")
<section class="flex flex-col items-center justify-center pb-10 px-10">
    <div class="max-w-2xl w-full mt-24 mb-10">
        <div class="w-full text-center py-5">
          <p class="text-4xl text-white font-sans font-extrabold"></p>
        </div>
        <form action={{ route('articles.search') }} method="GET" class="relative w-full max-w-xl mx-auto bg-white rounded-2xl">
          <input placeholder="Rechercher" name="query" class="rounded-2xl w-full h-16 bg-transparent text-black py-0 pl-8 pr-32 outline-none border border-gray-100 shadow-md hover:outline-none focus:ring-gray-800 focus:border-gray-950" type="text" name="query" id="query">
          <button type="submit" class="absolute inline-flex items-center h-10 px-4 py-1 text-sm text-white transition duration-150 ease-in-out rounded-2xl outline-none right-3 top-3 bg-slate-950 sm:px-6 sm:text-base sm:font-medium hover:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            <svg class="-ml-0.5 sm:-ml-1 mr-0 w-4 h-4 sm:h-5 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </button>
        </form>
    </div>
    <div class="w-full max-w-4xl">
        <div class="text-center gap-2 w-full mt-2">
            @if($articles->isEmpty())
              <p>Aucun article trouvé.</p>
            @else
            <div class="grid md:grid-cols-3 gap-3 w-full">
                @foreach($articles as $item)
                <a href={{route("voirarticle",$item->id)}}>
                <div class="bg-gray-50/50 shadow-lg rounded-lg py-5 ps-4 flex gap-1">
                    <div class="flex-shrink-0">
                        <img src={{asset("assets/uploads/".$item->photo)}} alt="Map 1" class="h-24 w-24 object-cover rounded-full">
                    </div>
                    <div class="ml-4 flex flex-col justify-center text-black">
                        <div class="flex items-center mb-1">
                            <p class="text-xs text-red-600 font-bold inline-flex justify-center items-center gap-x-2 p-2 rounded-sm border-b border-b-black/20"><span class="text-black">20</span><i class="fa fa-eye"></i></p>
                        </div>
                        <div class="flex justify-between">
                            <div class="mr-4">
                                <h2 class="text-xl font-semibold">{{$item->titre}}</h2>
                                <p class="text-emerald-800 italic text-xs">{{$item->type->type}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="relative">
                        <div class="absolute -inset-5">
                            <div
                                class="w-full h-full max-w-sm mx-auto lg:mx-0 opacity-30 blur-lg bg-gradient-to-r from-yellow-400 via-pink-500 to-green-600">
                            </div>
                        </div>
                        <a href="#" title=""
                            class="relative z-10 inline-flex items-center justify-center w-full px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-gray-900 border-2 border-transparent sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                            role="button">
                            <i class="fa fa-eye"></i>
                        </a>
                    </div> --}}
                </div>
                </a>
                @endforeach
            </div>
            <a href="" class="text-blue-500 underline font-bold">Voir tout</a>
            <div class="w-full">
                <div class="flex justify-center items-center mt-3">
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#"
                            class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <!-- Heroicon name: chevron-left -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                        <span
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">...</span>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">8</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">9</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">10</a>
                        <a href="#"
                            class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <!-- Heroicon name: chevron-right -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                
                    </nav>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection