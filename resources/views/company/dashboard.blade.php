@extends("layout.dash")
@section("dash")
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
        <div class="flex justify-between mb-6">
            <div>
                <div class="flex items-center mb-1">
                    <div class="text-2xl font-semibold">{{$actifs}}</div>
                </div>
                <div class="text-sm font-medium text-gray-400">Articles</div>
            </div>
            <div class="hs-dropdown hs-dropdown-example relative inline-flex">
                <button id="hs-dropdown-example" type="button" class="hs-dropdown-toggle h-10 w-10  inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-xl border-gray-200 bg-white text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-300 dark:text-white dark:hover:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <i class="fas fa-ellipsis-h"></i>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 w-56 hidden z-10 mt-2 min-w-60 bg-gray-50 shadow-md rounded-none p-2 dark:bg-neutral-800 dark:border-none dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-example">
                    <a class="flex items-center justify-center font-mono gap-x-1 py-2 px-3 rounded-none text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 " href="#">
                        <span>Brouillons:</span> {{$nonactifs}}
                    </a>
                    <a href="" class="flex items-center justify-center font-mono gap-x-1 py-2 px-3 rounded-none text-sm text-gray-800 hover:text-blue-900 bg-gray-100 hover:bg-blue-200 dark:text-neutral-400 ">
                        Filtrer à chaque type
                    </a>
                </div>
            </div>
        </div>
        <a href={{route("listearticleactifs")}} class="text-[#f84525] font-medium text-sm hover:text-red-800">Voir la liste</a>
    </div>
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
        <div class="flex justify-between mb-6">
            <div>
                <div class="flex items-center mb-1">
                    <div class="text-2xl font-semibold">{{$reservation}}</div>
                </div>
                <div class="text-sm font-medium text-gray-400">Réservations</div>
            </div>
            {{-- <div class="-mt-32">
                <div id="app" class="h-10">
                    {!! $chart->container() !!}
                </div>
                <script src="https://unpkg.com/vue"></script>
                <script>
                    var app = new Vue({
                        el: '#app',
                    });
                </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.7/c3.min.js"></script>
                {!! $chart->script() !!}
            </div> --}}
        </div>
        <a href={{route("listeres")}} class="text-[#f84525] font-medium text-sm hover:text-red-800">Voir la liste</a>
    </div>
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
        <div class="flex justify-between mb-6">
            <div>
                <div class="text-2xl font-semibold mb-1">{{$notes}}</div>
                <div class="text-sm font-medium text-gray-400">Notifications</div>
            </div>
            <div class="hs-dropdown hs-dropdown-example relative inline-flex">
                <button id="hs-dropdown-example" type="button" class="hs-dropdown-toggle h-10 w-10  inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-xl border-gray-200 bg-white text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-300 dark:text-white dark:hover:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <i class="fas fa-ellipsis-h"></i>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 w-56 hidden z-10 mt-2 min-w-60 bg-gray-50 shadow-md rounded-none p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-example">
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700" href="#">
                        <i class="fas fa-user"></i> Profile
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700" href="#">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700" href="#">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>
        </div>
        <a href={{route('listenotif')}} class="text-[#f84525] font-medium text-sm hover:text-red-800">Voir liste</a>
    </div>
</div>


<div class="flex px-6 md:px-0 h-full items-center">
  <a href={{route("avantcreate")}} class="px-6 py-3 bg-red-950 text-white rounded-md">Créer une article</a>
</div>

@endsection