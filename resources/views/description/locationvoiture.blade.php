@extends('layout.home')
@section('home')
    <div class="w-full flex flex-col gap-y-2 py-10">
        @foreach($article as $item)
        <div class="bg-white gap-x-4 p-5">
            <div class="w-full h-full flex flex-col justify-center text-black gap-y-4">
                <div class="flex gap-x-3 md:px-7 items-center">
                    <img src={{asset("assets/uploads/".$item->photo)}} alt="" class="size-10 md:20 rounded-full object-cover">
                    <div class="flex flex-col justify-center">
                        <p class="text-2xl font-bold">{{$item->titre}}</p>
                        <p class="text-xs">{{$item->description}}</p>
                    </div>
                </div>
                <div class="text-sm font-sans">
                    {{-- <span class="uppercase font-bold  mb-3 md:mx-4 text-xs text-gray-500">Voirtures disponibles</span> --}}
                    @if($item->locations->isNotEmpty())
                        <ul>
                            {{-- @foreach($item->locations as $voiture)
                                <li class="py-3 px-2 inline-flex gap-x-3 items-center justify-between w-full hover:bg-black/5"><div class="inline-flex items-center gap-x-3">{{ $voiture->voiture }} <i class="fa fa-dollar"></i> {{ $voiture->prix_1 }} MGA / {{$voiture->jour_max}} jours</div><a href={{route("location/reservation",$voiture->id)}} class="bg-red-500 py-1 px-2 text-white me-0 text-xs font-bold">Réserver</a> </li>
                            @endforeach --}}
                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                  <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                      <table class="min-w-full">
                                        <tbody class="divide-y divide-gray-200">
                                            @foreach($item->locations as $voiture)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $voiture->voiture }}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $voiture->prix_1 }} MGA </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$voiture->jour_max}} jours</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a href={{route("location/reservation",$voiture->id)}} class="bg-red-500 py-2 px-3 rounded-md text-white me-0 text-xs font-bold">Voir</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </ul>
                    @else
                    @endif
                </div>
                <div>
                    {{-- <a href={{route("tiv",$item->id)}} class="bg-gray-600 py-2 px-4 my-14 rounded-md text-sm text-white">Faire une réservation</a> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection