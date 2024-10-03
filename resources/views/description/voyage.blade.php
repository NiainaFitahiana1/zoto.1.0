@extends('layout.home')
@section('home')
    <div class="w-full flex flex-col gap-y-4 py-10">
        @foreach($article as $item)
        <div class="bg-white rounded-sm p-5">
            <div class="items-center grid grid-cols-3 gap-x-2 max-w-md py-2">
                <img src={{asset("assets/uploads/".$item->photo)}} alt="" class="size-16 md:size-20 rounded-sm object-cover">
                <div class="text-black col-span-2">
                    <p class="text-2xl font-bold">{{$item->titre}}</p>
                    <p class="text-xs">{{$item->description}}</p>
                </div>
            </div>
            <div class="w-full h-full flex flex-col justify-center text-black gap-y-4">
                <div class="text-sm font-sans">
                    {{-- <span class="uppercase font-bold my-3 text-xs text-gray-500 ">Trajets disponibles</span> --}}
                    @if($item->voyages->isNotEmpty())
                        <ul>
                            <div class="">
                                <div class="-m-1.5 overflow-x-auto">
                                  <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                      <table class="min-w-full divide-y divide-gray-200">
                                        <tbody class="divide-y divide-gray-200">
                                        @foreach($item->voyages as $voyage)
                                          <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $voyage->point_A }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $voyage->point_B }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$voyage->tarif_1}} MGA</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <a href={{route("tiv",$voyage->id)}} class="bg-red-500 py-2 px-3 text-white me-0 text-xs font-bold rounded-md">Réserver</a>
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