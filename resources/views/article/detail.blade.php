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
            <li>
                <a class="font-bold font-mono hover:text-red-700 px-2 py-1" href={{route("listearticleactifs")}}>Articles actifs</a>
            </li>
            <li class="font-bold font-mono px-1 py-1">/</li>
            <li class="font-bold font-mono text-red-600 py-1 px-2">Détails article</li>
        </ol>
    </nav>
</div>
<!-- Breadcrumb End -->
<div class="md:px-10">
    <div>
        <div class="h-32 w-32" style="background-image: url('{{asset('assets/uploads/'.$article->photo)}}');background-size:cover;background-position:center;"></div>
    </div>
    <div class="text-3xl font-bold text-gray-800 font-mono">{{$article->titre}}</div>
    <p class="text-gray-900 font-semibold text-lg uppercase font-sans">{{$article->type->type}}</p>
    <span class="text-gray-600 text-sm"><em>{{$article->description}}</em></span>
</div>

<div class="mt-2 md:px-10">
    <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">{{$article->type->type}}</div>
    
    @if($article->type_id==1)
    <!-- Form pour TYPE VOYAGE --> 
    <div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="col-span-2">
            <table class="w-full text-white text-xs text-center bg-gray-950">
                <thead class="h-6">
                    <td>N°</td>
                    <td>Départ à</td>
                    <td>Arrivée à</td>
                    <td>Genre</td>
                    <td>Prix</td>
                    <td>Action</td>
                </thead>
                <tbody class="bg-gray-900">
                    @foreach($voyage as $key=> $item)
                    <tr class="h-8 border-t border-gray-700">
                        <td>{{$key+1}}</td>
                        <td>{{$item->point_A}}</td>
                        <td>{{$item->point_B}}</td>
                        <td>@if(!$item->tarif_2)Simple @else Vip @endif</td>
                        <td>{{$item->tarif_1}} MGA</td>
                        <td>
                            <a href={{route("deletevoyage",$item->id)}} class='px-2'> <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <button class="bg-slate-900 hover:bg-black py-2 px-4 rounded-md text-xs mt-1 text-white"></button> --}}
            <div class="hs-dropdown relative inline-flex ml-3 [--auto-close:inside]">
                <button class="hs-dropdown-toggle relative inline-flex items-center gap-x-2 bg-slate-900 hover:bg-black font-bold py-2 px-4 rounded-md text-xs mt-1 text-gray-500 hover:text-white"  id="hs-dropdown-custom-trigger" type="button">
                    <i class="fa fa-add"></i> Ajouter        
                </button>
                <div class="hs-dropdown-menu  transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden w-2/3 md:w-1/4 lg:w-1/4 bg-slate-50 shadow-md p-2 mt-2 dark:bg-black dark:border-neutral-700" aria-labelledby="hs-dropdown-custom-trigger">
                    <form action={{route("addvoyage")}} method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-3 p-4">
                            <input type="text" class="sr-only" name="article_id" value={{$article->id}}>
                            <div class="col-span-1">
                                <label for="point_A" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                <div class="relative">
                                <input 
                                type="text" 
                                id="point_A" 
                                name="point_A"
                                placeholder="Début" 
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                aria-describedby="point_A-error">
                                </div>
                                @error("point_A")
                                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="point_B" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                <div class="relative">
                                <input 
                                type="text" 
                                id="point_B" 
                                name="point_B"
                                placeholder="Arrivée" 
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                aria-describedby="point_B-error">
                                </div>
                                @error("point_B")
                                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="tarif_1" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                <div class="relative">
                                <input 
                                type="text" 
                                id="tarif_1" 
                                name="tarif_1"
                                placeholder="Prix VIP" 
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                aria-describedby="tarif_1-error">
                                </div>
                                @error("tarif_1")
                                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="tarif_2" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                <div class="relative">
                                <input 
                                type="text" 
                                id="tarif_2" 
                                name="tarif_2"
                                placeholder="Prix Normale" 
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                aria-describedby="tarif_2-error">
                                </div>
                                @error("tarif_2")
                                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <button class="bg-slate-300 h-10 text-xs rounded-md w-full font-bold">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
        <div class="md:col-span-2">
            <div class="py-0 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Autres infos</div>
        </div>
        <div class="col-span-2 text-sm">
            <table class="w-full text-white text-xs text-center bg-gray-950">
                <thead class="h-6">
                    <td>N°</td>
                    <td>Téléphone</td>
                    <td>Stationnemet</td>
                    <td>Action</td>
                </thead>
                <tbody class="bg-gray-900">
                    @foreach($numero as $key=>$items)
                    <tr class="h-8 border-t border-gray-700">
                        <td>{{$key+1}}</td>
                        <td>{{$items->numero}}</td>
                        <td>{{$items->station}}</td>
                        <td>
                            <a href={{route("deletenumber",$items->id)}} class='px-2'> <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="hs-dropdown relative inline-flex ml-3 [--auto-close:inside]">
                <button class="hs-dropdown-toggle inline-flex items-center gap-x-2 bg-slate-900 hover:bg-black py-2 px-4 rounded-md text-xs mt-1 text-gray-500 hover:text-white font-bold"  id="hs-dropdown-custom-trigger" type="button">
                    <i class="fa fa-add"></i> Numéro         
                </button>
                <div class="hs-dropdown-menu relative transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden w-2/3 md:w-1/4 lg:w-1/4 bg-slate-50 shadow-md p-2 mt-2 dark:bg-black dark:border-neutral-700" aria-labelledby="hs-dropdown-custom-trigger">
                    <form action={{route("addnumero")}} method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-3 p-4">
                            <input type="text" class="sr-only" name="article_id" value={{$article->id}}>
                            <div class="col-span-1">
                                <label for="numero" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                <div class="relative">
                                <input 
                                type="text" 
                                id="numero" 
                                name="numero"
                                placeholder="Numéro mobile" 
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                aria-describedby="numero-error">
                                </div>
                                @error("numero")
                                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="station" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                <div class="relative">
                                <input 
                                type="text" 
                                id="station" 
                                name="station"
                                placeholder="Stationnement" 
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                aria-describedby="station-error">
                                </div>
                                @error("station")
                                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <button class="bg-slate-300 h-10 text-xs rounded-md w-full font-bold">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
    @elseif($article->type_id==2)
    <!-- Form pour TYPE Colis -->
    <div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="col-span-2">
                <table class="w-full text-white text-xs text-center bg-gray-950">
                    <thead class="h-6">
                        <td>N°</td>
                        <td>Voiture</td>
                        <td>Taux</td>
                        <td>Prix</td>
                        <td>Jour max</td>
                        <td>Action</td>
                    </thead>
                    <tbody class="bg-gray-900">
                        @foreach($location as $key => $item)
                        <tr class="h-8 border-t border-gray-700">
                            <td>{{$key+1}}</td>
                            <td>{{$item->voiture}}</td>
                            <td>{{$item->prix_2}}</td>
                            <td>{{$item->prix_1}} MGA</td>
                            <td>{{$item->jour_max}}</td>
                            <td>
                                <a href={{route("deletelocation",$item->id)}} class='px-2'> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="hs-dropdown relative inline-flex ml-3 [--auto-close:inside]">
                    <button class="hs-dropdown-toggle inline-flex items-center gap-x-2 bg-slate-900 hover:bg-black py-2 px-4 rounded-md text-xs mt-1 text-gray-500 hover:text-white font-bold"  id="hs-dropdown-custom-trigger" type="button">
                        <i class="fa fa-add"></i> Ajouter        
                    </button>
                    <div class="hs-dropdown-menu  transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden w-2/3 md:w-1/4 lg:w-1/4 bg-slate-50 shadow-md p-2 mt-2 dark:bg-black dark:border-neutral-700" aria-labelledby="hs-dropdown-custom-trigger">
                        <form action={{route("addlocation")}} method="POST">
                            @csrf
                            <div class="grid grid-cols-2 gap-3 p-4">
                                <input type="text" class="sr-only" name="article_id" value={{$article->id}}>
                                <div class="col-span-1">
                                    <label for="voiture" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                    <div class="relative">
                                    <input 
                                    type="text" 
                                    id="voiture" 
                                    name="voiture"
                                    placeholder="Type voiture" 
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                    aria-describedby="voiture-error">
                                    </div>
                                    @error("voiture")
                                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-1">
                                    <label for="nombre" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                    <div class="relative">
                                    <input 
                                    type="number" 
                                    id="nombre" 
                                    name="nombre"
                                    placeholder="Nombre" 
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                    aria-describedby="nombre-error">
                                    </div>
                                    @error("nombre")
                                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-1">
                                    <label for="prix_1" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                    <div class="relative">
                                    <input 
                                    type="text" 
                                    id="prix_1" 
                                    name="prix_1"
                                    placeholder="Frais" 
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                    aria-describedby="prix_1-error">
                                    </div>
                                    @error("prix_1")
                                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-1">
                                    <label for="jour_max" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                    <div class="relative">
                                    <input 
                                    type="text" 
                                    id="jour_max" 
                                    name="jour_max"
                                    placeholder="Jours Max" 
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                    aria-describedby="jour_max-error">
                                    </div>
                                    @error("jour_max")
                                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <button class="bg-slate-300 h-10 text-xs rounded-md w-full font-bold">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
            <div class="md:col-span-2 py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">INFORMATIONS</div>
        <div class="col-span-2 text-sm">
            <table class="w-full text-white text-xs text-center bg-gray-950">
                <thead class="h-6">
                    <td>N°</td>
                    <td>Téléphone</td>
                    <td>Propriétaire</td>
                    <td>Adresse</td>
                    <td>Action</td>
                </thead>
                <tbody class="bg-gray-900">
                    @foreach($contact as $key=>$items)
                    <tr class="h-8 border-t border-gray-700">
                        <td>{{$key+1}}</td>
                        <td>{{$items->numero}}</td>
                        <td>{{$items->destination}}</td>
                        <td>{{$items->adresse}}</td>
                        <td>
                            <a href={{route("deletecontact",$items->id)}} class='px-2'> <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="hs-dropdown relative inline-flex ml-3 [--auto-close:inside]">
                <button class="hs-dropdown-toggle inline-flex items-center gap-x-2 bg-slate-900 hover:bg-black py-2 px-4 rounded-md text-xs mt-1 text-gray-500 hover:text-white font-bold"  id="hs-dropdown-custom-trigger" type="button">
                    <i class="fa fa-add"></i> Contact         
                </button>
                <div class="hs-dropdown-menu relative transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden w-2/3 md:w-1/4 lg:w-1/4 bg-slate-50 shadow-md p-2 mt-2 dark:bg-black dark:border-neutral-700" aria-labelledby="hs-dropdown-custom-trigger">
                    <form action={{route("addcontact")}} method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-3 p-4">
                            <input type="text" class="sr-only" name="article_id" value={{$article->id}}>
                            <div class="col-span-1">
                                <label for="destination" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                <div class="relative">
                                <input 
                                type="text" 
                                id="destination" 
                                name="destination"
                                placeholder="Propriétaire" 
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                aria-describedby="destination-error">
                                </div>
                                @error("destination")
                                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="numero" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                <div class="relative">
                                <input 
                                type="text" 
                                id="numero" 
                                name="numero"
                                placeholder="Numéro" 
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                aria-describedby="numero-error">
                                </div>
                                @error("numero")
                                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="adresse" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                <div class="relative">
                                <input 
                                type="text" 
                                id="adresse" 
                                name="adresse"
                                placeholder="Adresse" 
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                aria-describedby="adresse-error">
                                </div>
                                @error("adresse")
                                <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <button class="bg-slate-300 h-10 text-xs rounded-md w-full font-bold">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
    @else
    <!-- End Form -->
    <!-- Form pour TYPE Colis -->
    <div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="col-span-2 text-sm">
                <table class="w-full text-white text-xs text-center bg-gray-950">
                    <thead class="h-6">
                        <td>N°</td>
                        <td>Ville</td>
                        <td>Bureau</td>
                        <td>Téléphone</td>
                        <td>Action</td>
                    </thead>
                    <tbody class="bg-gray-900">
                        @foreach($colis as $key=>$items)
                        <tr class="h-8 border-t border-gray-700">
                            <td>{{$key+1}}</td>
                            <td>{{$items->ville}}</td>
                            <td>{{$items->bureau}}</td>
                            <td>{{$items->numero}}</td>
                            <td>
                                <a href={{route("deletecolis",$items->id)}} class='px-2'> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="hs-dropdown relative inline-flex ml-3 [--auto-close:inside]">
                    <button class="hs-dropdown-toggle inline-flex items-center gap-x-2 bg-slate-900 hover:bg-black py-2 px-4 rounded-md text-xs mt-1 text-gray-500 hover:text-white font-bold"  id="hs-dropdown-custom-trigger" type="button">
                        <i class="fa fa-add"></i> Centre         
                    </button>
                    <div class="hs-dropdown-menu relative transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden w-2/3 md:w-1/4 lg:w-1/4 bg-slate-50 shadow-md p-2 mt-2 dark:bg-black dark:border-neutral-700" aria-labelledby="hs-dropdown-custom-trigger">
                        <form action={{route("addcolis")}} method="POST">
                            @csrf
                            <div class="grid grid-cols-1 gap-3 p-4">
                                <input type="text" class="sr-only" name="article_id" value={{$article->id}}>
                                <div class="col-span-1">
                                    <label for="ville" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                    <div class="relative">
                                    <input 
                                    type="text" 
                                    id="ville" 
                                    name="ville"
                                    placeholder="Ville" 
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                    aria-describedby="ville-error">
                                    </div>
                                    @error("ville")
                                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-1">
                                    <label for="numero" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                    <div class="relative">
                                    <input 
                                    type="text" 
                                    id="numero" 
                                    name="numero"
                                    placeholder="Numéro" 
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                    aria-describedby="numero-error">
                                    </div>
                                    @error("numero")
                                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-1">
                                    <label for="bureau" class="ms-2 block text-xs mb-2 dark:text-white sr-only">Numéro Téléphone</label>
                                    <div class="relative">
                                    <input 
                                    type="text" 
                                    id="bureau" 
                                    name="bureau"
                                    placeholder="Adresse" 
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:outline-none dark:bg-neutral-900 dark:text-white dark:border-white border"
                                    aria-describedby="bureau-error">
                                    </div>
                                    @error("bureau")
                                    <p class="text-xs text-red-600 mt-2" id="Nom-error">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-1">
                                    <button class="bg-slate-300 h-10 text-xs rounded-md w-full font-bold">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </div> 
        </div>
    </div>
    <!-- End Form -->
    @endif

    
    {{-- <div class="md:col-span-2 grid md:grid-cols-2 gap-2">
        <a href={{route("toupdatearticle",$article->id)}} class="py-3 px-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-400 bg-transparent text-white hover:bg-transparent focus:outline-none focus:bg-black disabled:opacity-50 disabled:pointer-events-none">Retour</a>
        <a href={{route("pay",$article->id)}} class="py-3 px-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Suivant</a href={{route("pay",$article->id)}}>
    </div> --}}


  </div>

@endsection