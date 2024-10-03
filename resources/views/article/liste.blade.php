@extends('layout.dash')
@section('dash')

<!-- Breadcrumb Start -->
<div
class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
<nav>
  <ol class="flex items-center gap-2">
    <li>
      @if(Auth::user()->role_id==3) 
      <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("dashadmin")}}>Dashboard</a>
      @else
      <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("dashcompany")}}>Dashboard</a>
      @endif
    </li>
    <li class="font-bold font-mono px-1 py-1">/</li>
    <li class="font-bold font-mono text-red-600 py-1 px-2"> Tous les articles</li>
  </ol>
</nav>
</div>
<!-- Breadcrumb End -->
<div class="flex flex-col md:px-6 mb-7">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Titre</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Type</th>
              @if(Auth::user()->role_id==3)
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Propriétaire</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Delais d'affichage</th>
              @endif
              <th scope="col" class="@if(Auth::user()->role_id==3) hidden @endif px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Description</th>
              <th scope="col" class="pr-1 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Actions</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach($all as $key=>$item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{$item->titre}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->type->type}}</td>
                <td class="@if(Auth::user()->role_id==3) hidden @endif  px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->description}}</td>
                @if(Auth::user()->role_id==3)
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->user->company_name}} </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->delais}} jours</td>
                @endif
                <td class="whitespace-nowrap text-end text-xs">
                    <div class="w-full h-full flex items-center justify-end gap-2">
                      <a href="" class="@if(Auth::user()->role_id==3) hidden @endif w-8 h-8 flex items-center justify-center border border-black hover:bg-gray-300 hover:border-gray-500 hover:text-gray-800 rounded-lg"><i class="fa fa-pen"></i></a>
                        <a href={{route("desactiver",$item->id)}} class="px-2 h-8 flex items-center justify-center gap-x-1 border border-black hover:bg-gray-300 hover:border-gray-500 hover:text-gray-800 rounded-lg"><i class="fa fa-check"></i> Désactiver</a>
                        <a href={{route("supprimer",$item->id)}} class="w-8 h-8 flex items-center justify-center border border-black hover:bg-gray-300 hover:border-gray-500 hover:text-gray-800 rounded-lg"><i class="fa fa-trash"></i></a>
                        <a href="" class="@if(Auth::user()->role_id==3) hidden @endif w-8 h-8 flex items-center justify-center border border-black hover:bg-gray-300 hover:border-gray-500 hover:text-gray-800 rounded-lg"><i class="fa fa-pen"></i></a>
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
<div class="flex px-6 md:px-0 h-full items-center @if(Auth::user()->role_id==3) hidden @endif">
    <a href={{route("tocreate")}} class="px-6 py-3 bg-red-950 text-white rounded-md">Créer une article</a>
</div>



@endsection