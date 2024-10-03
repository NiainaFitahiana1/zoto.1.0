@extends('layout.dash')
@section('dash')
    <!-- Breadcrumb Start -->
        <div
        class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
        >
            <nav>
                <ol class="flex items-center gap-2">
                    <li>
                        <a class="font-bold font-mono hover:text-red-700 px-1 py-1" href={{route("dashadmin")}}>Dashboard</a>
                    </li>
                    <li class="font-bold font-mono px-1 py-1">/</li>
                    <li class="font-bold font-mono text-red-600 py-1 px-1">Liste des références via clients</li>
                </ol>
            </nav>
        </div>
    <!-- Breadcrumb End -->
    <div class="flex flex-col md:px-10">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">date</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Heure</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Article</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Référence</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Envoyé par</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Avec</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach($all as $key => $item)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $item->created_at->format('d-m-Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $item->created_at->format('H:i') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->article->titre}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->reference}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->envoyeur}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->nom_banque}}</td>
                    <td class="whitespace-nowrap text-end text-sm font-medium">
                        <div class="w-full h-full flex items-center justify-end gap-2">
                            {{-- <a href="" class="px-2 h-8 flex items-center justify-center border border-black hover:bg-gray-100 hover:border-gray-500 hover:text-gray-800 rounded-lg">Analyser</a>     --}}
                            <div class="hs-dropdown hs-dropdown-example relative inline-flex  [--auto-close:inside]">
                                <button id="hs-dropdown-example" type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Activer
                                </button>
                                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 w-56 hidden z-10 mt-2 min-w-60 bg-white shadow-md rounded-none p-2 dark:bg-neutral-800 dark:border-none dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-example">
                                  <form action={{route("activer",$item->id)}} method="POST">
                                    @csrf
                                    <input type="integer" name="article_id" value={{$item->article_id}} class="hidden">
                                    <input type="text" name="montant" class="border border-black rounded-lg focus:outline-none mb-2" placeholder="Montant réçu">
                                    <div class="flex items-center rounded-lg text-sm">
                                        <button class="py-2 ml-1 text-white font-mono rounded-lg bg-gray-600 w-full">Continuer</button>
                                    </div>
                                  </form>  
                                </div>
                            </div>    
                        </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection