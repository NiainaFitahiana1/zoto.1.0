@extends("layout.dash")
@section("dash")
<!-- Breadcrumb Start -->
<div
class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
<nav>
  <ol class="flex items-center gap-2">
    <li>
      <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("dashadmin")}}>Tableau de bord </a>
    </li>
    <li class="font-bold font-mono px-1 py-1">/</li>
    <li class="font-bold font-mono text-red-600 py-1 px-2"> Listes des entreprises</li>
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
                    @foreach($company as $item)
                    <tr class="border-b border-b-black p-3">
                      {{-- <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-800">{{$key++}}</td> --}}
                      <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-800 bg-gray-300"><img src={{asset("assets/uploads/".$item->company_logo)}} alt="" class="h-10 w-10 object-cover rounded-lg"></td>
                      <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-800">{{$item->company_name}}</td>
                      <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-800">{{$item->company_email}}</td>
                      <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-800">{{$item->company_numero}}</td>
                      <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-800">{{$item->company_siege}}</td>
                      <td class="px-2 py-2 whitespace-nowrap text-end text-sm font-medium">
                        <a href={{route("supprimercetentreprise",$item->id)}} class="border rounded-lg border-black px-2 py-1 inline-flex items-center gap-x-3"><i class="fa fa-trash"></i> Supprimer</a>
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