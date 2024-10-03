@extends("layout.dash")
@section("dash")



<div class="flex items-start p-10 bg-gray-300">
    <div class="flex-shrink-0">
      <div class="inline-block relative">
        <div class="relative w-16 h-16 rounded-full overflow-hidden">
          <img class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover" src={{asset("assets/uploads/".Auth::user()->photo)}} alt="Profile picture">
          <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
        </div>
        <svg class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"/>
        </svg>
      </div>
    </div>
    <div class="ml-6">
      <p class="flex items-baseline">
        <span class="text-gray-600 font-bold">@if(Auth::user()->role_id==2){{Auth::user()->company_name}}@else{{Auth::user()->name}}@endif</span>
        <span class="ml-2 text-green-600 text-xs">{{Auth::user()->role->role}}</span>
      </p>
      <div class="flex items-center mt-4 text-gray-600">
        <div class="flex items-center">
          <span class="text-sm">@if(Auth::user()->role_id==2){{Auth::user()->company_email}}@else{{Auth::user()->email}}@endif</span>
          
        </div>
        <div class="flex items-center ml-4">
          <span class="text-sm">@if(Auth::user()->role_id==2){{Auth::user()->company_telephone}}@else{{Auth::user()->telephone}}@endif</span>
        </div>
      </div>
      <div class="mt-3">
        <span class="font-bold">Adresse:</span>
        <p class="mt-1">
            @if(Auth::user()->role_id==2){{Auth::user()->company_siege}}@else{{Auth::user()->adresse}}@endif
        </p>
      </div>
      <div class="flex items-center justify-between gap-x-3 mt-4 text-sm text-gray-600 fill-current">
        <a href="" class="border border-black text-sm rounded-lg p-2 text-black">Editer mon compte</a>
        <a href={{route("deleteaccount",Auth::user()->id)}} class="border border-black text-sm rounded-lg p-2 text-black">Supprimer mon compte</a>
      </div>
    </div>
  </div>


@endsection