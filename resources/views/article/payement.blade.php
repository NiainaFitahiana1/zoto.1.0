@extends('layout.dash')
@section('dash')
<div
class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
>
<nav>
  <ol class="flex items-center gap-2">
    <li>
      <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("dashcompany")}}>Dashboard</a>
    </li>
    <li class="font-bold font-mono px-1 py-1">/</li>
    <li>
        <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("reedit/article/voyage",$article->id)}}>Création</a>
    </li>
    <li class="font-bold font-mono px-1 py-1">/</li>
    <li>
        <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("addsupp",$article->id)}}>Infos</a>
    </li>
    <li class="font-bold font-mono px-1 py-1">/</li>
    <li class="font-bold font-mono text-red-600 py-1 px-2">Abonnément</li>
  </ol>
</nav>
</div>
<div class="p-4 sm:p-3 grid grid-cols-1 md:grid-cols-1 bg-gray-300">
  
  <div class="flex flex-col">
    <p class="text-2xl font-bold">
      Abonnément
    </p>
    <p class="text-sm font-bold">
      Vous pouvez envoyer l'argent dans ces comptes suivants
    </p>
    <div class="grid md:grid-cols-2">
      <div class="flex flex-col my-5">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border rounded-sm overflow-hidden">
              <table class="min-w-full divide-y divide-gray-200">
                <tbody class="divide-y divide-gray-200">
      
                  @foreach($banque as $item)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$item->utilisateur}} </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$item->numero}} </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$item->designation}} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="grid md:grid-cols-2">
      <h1 class="flex item-center gap-x-2 p-3 bg-gray-50">
        <img src={{asset("assets/uploads/".$article->photo)}} alt="" class="size-16 object-cover rounded-lg">
        <div class="h-full flex flex-col justify-center mt-2">
          <div class="flex items-center gap-x-2">
           <span class="text-black font-bold text-xs font-sans capital">Titre :</span>
           <label class="block text-lg text-gray-500 dark:text-black">{{$article->titre}}</label>
           </div>
          <div class="flex items-center gap-x-2">
            <span class="text-black font-bold text-xs font-sans capital">Type :</span>
            <label class="block text-md text-gray-500 dark:text-gray-700 font-mono">{{$article->type->type}}</label>
          </div>
        </div>
      </h1>
    </div>
    <div class="mt-5">
      <!-- Form -->
      <form action={{route("payer")}} method="POST" enctype="multipart/form-data" class="grid md:grid-cols-2">
        @csrf
        <input type="text"name="article_id" value={{$article->id}} class="hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            
    
                <div class="mb-3">
                  <label for="reference" class="block text-xs mb-2 text-gray-500 dark:text-black">Référence Transfert</label>
                  <div class="relative">
                    <input type="text" id="reference" name="reference" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50  dark:text-neutral-400 dark:placeholder-neutral-500" aria-describedby="reference">
                  </div>
                  @error("reference")
                  <p class="text-xs text-red-600 mt-2" id="references">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="envoyeur" class="block text-xs mb-2 text-gray-500 dark:text-black">Envoyé par:</label>
                  <div class="relative">
                    <input type="text" id="envoyeur" name="envoyeur" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50  dark:text-neutral-400 dark:placeholder-neutral-500" aria-describedby="envoyeur">
                  </div>
                  @error("envoyeur")
                  <p class="text-xs text-red-600 mt-2" id="envoyeur">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="receveur" class="block text-xs mb-2 text-gray-500 dark:text-black">Envoyé dans</label>
                  <div class="relative">
                    <select id="receveur" name="receveur" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50  dark:text-neutral-400 dark:placeholder-neutral-500" aria-describedby="receveur">
                    @foreach($banque as $banque)
                    <option value={{$banque->id}}>{{$banque->numero}}({{$banque->utilisateur}})</option>
                    @endforeach
                    </select>
                    </div>
                  @error("receveur")
                  <p class="text-xs text-red-600 mt-2" id="references">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="nom_banque" class="block text-xs mb-2 text-gray-500 dark:text-black">Banque/Mobilemoney</label>
                  <div class="relative">
                    <input type="text" id="nom_banque" name="nom_banque" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50  dark:text-neutral-400 dark:placeholder-neutral-500" aria-describedby="nom_banque">
                  </div>
                  @error("nom_banque")
                  <p class="text-xs text-red-600 mt-2" id="nom_banque">{{$message}}</p>
                  @enderror
                </div>
                <button class="md:col-span-2 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Payer</button>
           
         </div>
      </form>
      <!-- End Form -->
    </div>
  </div>
@endsection