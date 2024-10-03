@extends("layout.dash")
@section("dash")
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
    <li class="font-bold font-mono text-red-600 py-1 px-2">Choix type d'article</li>
  </ol>
  
</nav>
</div>
<div class="grid md:grid-cols-3 gap-2">
    @foreach($type as $item)
    <a href={{route($item->route)}} class="border border-black inline-flex items-center justify-center h-20 hover:rounded-xl hover:text-gray-800">
        <span class="text-lg font-bold">{{$item->type}}</span>
    </a>
    @endforeach
</div>

@endsection