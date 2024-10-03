@extends('layout.dash')
@section('dash')
<!-- Breadcrumb Start -->
<div
class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
    <nav>
        <ol class="flex items-center gap-2">
            <li>
            <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("dashcompany")}}>Tableau de bord</a>
            </li>
            <li class="font-bold font-mono px-1 py-1">/</li>
            <li class="font-bold font-mono text-red-600 py-1 px-2">Notification</li>
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
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Moment</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Message</th>
                {{-- <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Age</th> --}}
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              @foreach ($notes as $item)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $item->created_at->format('H:i') }} le {{ $item->created_at->format('d-m-Y') }}</</td>
                  {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">Regional Paradigm Technician</td> --}}
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$item->message}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <a href={{route("delete/note",$item->id)}} class="border border-red-700 text-red-600 rounded-md h-10 flex items-center justify-center px-2 hover:text-red-700"><i class="fa fa-trash"></i></a>
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