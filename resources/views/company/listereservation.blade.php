@extends("layout.dash")
@section("dash")
<!-- Breadcrumb Start -->
<div
class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
<nav>
  <ol class="flex items-center gap-2">
    <li>
      <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("dashcompany")}}>Tableau de bord de l'entreprise</a>
    </li>
    <li class="font-bold font-mono px-1 py-1">/</li>
    <li class="font-bold font-mono text-red-600 py-1 px-2"> Listes des reservations non approuvées</li>
  </ol>
</nav>
</div>
<div class="flex flex-col md:px-6 mb-7">
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full">
                <tbody class="divide-y divide-gray-200">
                    @foreach($res as $item)
                    <tr class="bg-gray-300 ">
                      <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-800">{{$key++}}</td>
                      <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-800">@if($item->reservation->article->type_id==1)Voyage - {{$item->reservation->article->titre}} @else Location Voiture @endif</td>
                      {{-- <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-800">{{$item->reservation->guest}} personnes</td> --}}
                      <td class="px-2 py-3 whitespace-nowrap text-sm font-medium text-gray-800">{{$item->reservation->voyage->tarif_1*$item->reservation->guest}} Mga</td>
                      <td class="px-2 py-3 whitespace-nowrap text-sm font-medium text-gray-800">Réf : {{$item->reference}}</td>
                      <td class="px-2 py-3 whitespace-nowrap text-sm font-medium text-gray-800"><span class="text-red-400">le </span>{{$item->created_at}}</td>
                      <td class="px-2 py-3 whitespace-nowrap text-sm font-medium text-gray-800"><span class="text-red-400">par </span>{{$item->envoyeur}}</td>
                      {{-- <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-800">{{$item->position}}</td> --}}
                      <td class="px-2 py-2 whitespace-nowrap text-end text-sm font-medium">
                          <a href={{route("payeres/activate",$item->id)}} class="border border-black p-2">Approuver</a>
                          <a href={{route("payeres/refuser",$item->id)}} class="border border-black p-2">Refuser</a>
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

@endsection