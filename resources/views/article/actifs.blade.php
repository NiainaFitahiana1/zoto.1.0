@extends('layout.dash')
@section('dash')

<!-- Breadcrumb Start -->
<div
class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
    <nav>
        <ol class="flex items-center gap-2">
            <li>
            <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("dashcompany")}}>Dashboard</a>
            </li>
            <li class="font-bold font-mono px-1 py-1">/</li>
            <li class="font-bold font-mono text-red-600 py-1 px-2">Articles actifs</li>
        </ol>
    </nav>
</div>
<!-- Breadcrumb End -->

<div class="flex flex-col">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">N°</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Titre</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Type</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Delais</th>
              <th scope="col" class="pr-1 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach($all as $key=>$item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{$key+1}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{$item->titre}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->type->type}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->delais}} Jours</td>
                <td class="whitespace-nowrap text-end text-xs">
                    <div class="w-full h-full flex items-center justify-end gap-2">
                      <a href={{route("tache/article",$item->id)}} class="px-2 h-8 flex items-center justify-center border border-black hover:bg-gray-100 hover:border-gray-500 hover:text-gray-800 rounded-lg">Voir les tâches</a>
                        <a href={{route("addsupp",$item->id)}} class="w-8 h-8 flex items-center justify-center border border-black hover:bg-gray-100 hover:border-gray-500 hover:text-gray-800 rounded-lg"><i class="fa fa-edit"></i></a>
                        <a href="" class="w-8 h-8 flex items-center justify-center border border-black hover:bg-gray-100 hover:border-gray-500 hover:text-gray-800 rounded-lg"><i class="fa fa-trash"></i></a>
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