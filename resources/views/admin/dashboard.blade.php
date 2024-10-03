@extends('layout.dash')
@section('dash')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
        <div class="flex justify-between mb-6">
            <div>
                <div class="text-2xl font-semibold mb-1">{{$all}}</div>
                <div class="text-sm font-medium text-gray-400">Abonnement en attente</div>
            </div>
            
        </div>
        <a href={{route("listepaye")}} class="text-[#f84525] font-medium text-sm hover:text-red-800">Liste</a>
    </div>
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
        <div class="flex justify-between mb-6">
            <div>
                <div class="text-2xl font-semibold mb-1">{{$counta}}</div>
                <div class="text-sm font-medium text-gray-400">Articles</div>
            </div>
            <div class="hs-dropdown hs-dropdown-example relative inline-flex">
                <button id="hs-dropdown-example" type="button" class="hs-dropdown-toggle h-10 w-10  inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-xl border-gray-200 bg-white text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-300 dark:text-white dark:hover:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <i class="fas fa-ellipsis-h"></i>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 w-56 hidden z-10 mt-2 min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-example">
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700" href="#">
                        {{$countav}} Voyages
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700" href="#">
                        {{$countal}} Locations
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700" href="#">
                        {{$countac}} Services colis
                    </a>
                </div>
            </div>
        </div>
        <a href={{route("listearticle/admin")}} class="text-[#f84525] font-medium text-sm hover:text-red-800">Liste</a>
    </div>
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
        <div class="flex justify-between mb-6">
            <div>
                <div class="text-2xl font-semibold mb-1">{{$nblist}}</div>
                <div class="text-sm font-medium text-gray-400">Compagnies</div>
            </div>
            
        </div>
        <a href={{route("listcompany")}} class="text-[#f84525] font-medium text-sm hover:text-red-800">Liste</a>
    </div>
</div>

@endsection