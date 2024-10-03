@extends('layout.app')
@section('body')
<section class="flex flex-col items-center justify-center pb-10 md:px-10">
    <div class="max-w-3xl w-full mt-20 md:px-5 px-12 column justify-center">
        <div class="bg-black/40 p-10 md:p-20 gap-2 my-10 rounded-xl">
            <p class="text-5xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">{{$article->titre}}</p>
            <p class="text-3xl tracking-tight font-extrabold text-gray-400">{{$article->type->type}}</p>
            <div class="w-full flex gap-x-3 mt-4">
                <a href="" class="border py-2 px-3 rounded-sm inline-flex gap-x-2 items-center text-sm fons-semibold"><i class="fa fa-heart border-e pe-3"></i> Aimer</a>
                <a href="" class="border py-2 px-3 rounded-sm inline-flex gap-x-2 items-center text-sm fons-semibold"><i class="fa fa-share border-e pe-3"></i> Partager</a>
            </div>
            {{-- <p class="text-3xl tracking-tight font-extrabold text-black">{{$article->telephone}}Num</p> --}}
            {{-- <div class="border p-0.5"></div> --}}
            <div class="">
                @if($article->type_id==3)
                {{-- pour le colis --}}
                <div class="w-full flex flex-col gap-y-2 mt-6">
                    <span class="font-extrabold text-xl tracking-tight text-white">Liste des villes accéssibles</span>
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-white dark:divide-neutral-700">
                                <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase dark:text-neutral-400">Ville</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase dark:text-neutral-400">Bureau</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase dark:text-neutral-400">Contact</th>
                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-white uppercase dark:text-neutral-400">Action</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-white dark:divide-neutral-700">
                                    @foreach($colis as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white dark:text-neutral-200">{{$item->ville}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white dark:text-neutral-200">{{$item->bureau}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white dark:text-neutral-200">{{$item->numero}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                    <a href={{route("tiv",$item->id)}} class="py-1 px-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text- hover:text-black focus:outline-none focus:text-black disabled:opacity-50 disabled:pointer-events-none dark:text-black dark:hover:text-black dark:focus:text-black hover:bg-white/5 "><i class="fas fa-arrow-right"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @elseif($article->type_id==1)
                {{--Pour le voyage --}}
                <div class="w-full flex flex-col gap-y-2 mt-6">
                    <span class="font-extrabold text-xl tracking-tight text-white">Liste des trajets disponibles</span>
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-white dark:divide-neutral-700">
                                <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase dark:text-neutral-400">Départ</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase dark:text-neutral-400">Itinéaire</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase dark:text-neutral-400">Frais</th>
                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-white uppercase dark:text-neutral-400">Action</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-white dark:divide-neutral-700">
                                    @foreach($voyage as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white dark:text-neutral-200">{{$item->point_A}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white dark:text-neutral-200">{{$item->point_B}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white dark:text-neutral-200">{{$item->tarif_1}} Ar</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a href={{route("tiv",$item->id)}} class="py-1 px-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text- hover:text-black focus:outline-none focus:text-black disabled:opacity-50 disabled:pointer-events-none dark:text-black dark:hover:text-black dark:focus:text-black hover:bg-white/5 "><i class="fas fa-arrow-right"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @else
                {{--Pour la location--}}
                <div class="w-full flex flex-col gap-y-2 mt-6">
                    <span class="font-extrabold text-xl tracking-tight text-white">Liste des voitures</span>
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-white dark:divide-neutral-700">
                                <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase dark:text-neutral-400">Voiture</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase dark:text-neutral-400">Prix par Jour</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase dark:text-neutral-400">Jour maximum</th>
                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-white uppercase dark:text-neutral-400">Action</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-white dark:divide-neutral-700">
                                    @foreach($location as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white dark:text-neutral-200">{{$item->voiture}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white dark:text-neutral-200">{{$item->prix_1}} Ar</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white dark:text-neutral-200">{{$item->jour_max}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                    <button type="button" class="px-3 py-1  inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text- hover:text-black focus:outline-none focus:text-black disabled:opacity-50 disabled:pointer-events-none dark:text-black dark:hover:text-black dark:focus:text-black hover:bg-white/5 ">Réserver</button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection