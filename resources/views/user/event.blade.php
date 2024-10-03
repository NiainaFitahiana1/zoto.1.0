@extends("layout.dash")
@section("dash")
<!-- Breadcrumb Start -->
<div
class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
    <nav>
        <ol class="flex items-center gap-2">
            <li>
            <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("activity")}}>Tableau de bord personnel</a>
            </li>
            <li class="font-bold font-mono px-1 py-1">/</li>
            <li class="font-bold font-mono text-red-600 py-1 px-2">Liste des Evenements</li>
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
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Date</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Article</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Trajet</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Voyageurs</th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              @foreach ($liste as $item)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $item->reservation->date_depart }}</</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->reservation->article->titre}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->reservation->voyage->point_A}}-{{$item->reservation->voyage->point_B}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->reservation->guest}} voyageurs</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200 flex justify-end">
                    <a href={{route("annuler",$item->id)}} class="border p-2 border-black">Annuler</a>
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