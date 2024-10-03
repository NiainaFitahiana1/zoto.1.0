    <div class="fixed left-0 top-0 w-64 h-full bg-slate-900 p-4 z-50 sidebar-menu transition-transform">
          <div class="px-6">
              <a class="flex w-full justify-center font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-black" href="#" aria-label="Brand">
                <img src={{asset("logos/white.mini.png")}} alt="" class="h-20">
              </a>
          </div>
          <ul class="mt-20 px-5 flex flex-col gap-y-3 uppercase">
            <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center mb-6">
                <a @if(Auth::user()->role_id==1) 
                    href={{route("activity")}}
                    @elseif(Auth::user()->role_id==2) 

                    href={{route("dashcompany")}}
                    @else
                    
                    href={{route("dashadmin")}}
                    @endif
                    class="flex items-center">
                    {{-- <i class="fa fa-dashboard"></i> --}}
                    <span class="text-lg ml-2">Tableau de bord</span>
                </a>
                {{-- <div class="py-1 px-3 bg-gray-600 rounded text-gray-300 flex items-center justify-center text-xs">5</div> --}}
            </li>
            
            <li class="flex w-full @if(Auth::user()->role_id!=3) hidden @endif justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                <a href={{route("listepaye")}} class="flex items-center">
                    {{-- <i class="fa fa-eye"></i> --}}
                    <span class="text-lg ml-2">Abonnement</span>
                </a>
                {{-- <div class="py-1 px-3 bg-gray-600 rounded text-gray-300 flex items-center justify-center text-xs">25</div> --}}
            </li>
            <li class="flex w-full @if(Auth::user()->role_id!=3) hidden @endif justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                <a href={{route("listearticle/admin")}} class="flex items-center">
                    {{-- <i class="fa fa-eye"></i> --}}
                    <span class="text-lg ml-2">Articles</span>
                </a>
                {{-- <div class="py-1 px-3 bg-gray-600 rounded text-gray-300 flex items-center justify-center text-xs">25</div> --}}
            </li>
            @if(Auth::user()->role_id==1) 
            <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                <a href="/tabperso/list" class="flex items-center">
                    
                    <span class="text-lg ml-2">Reservation</span>
                </a>
            </li>
            <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                <a href="/list/evenemt" class="flex items-center">
                    
                    <span class="text-lg ml-2">Evenements</span>
                </a>
            </li>
            @endif
            @if(Auth::user()->role_id==3) 
            <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                <a href={{route("listcompany")}} class="flex items-center">
                    <span class="text-lg ml-2">Entreprises</span>
                </a>
            </li>
            @endif
            @if(Auth::user()->role_id==2) 
            <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                <a href={{route("listearticle")}} class="flex items-center">
                    <span class="text-lg ml-2">Mes Articles</span>
                </a>
            </li>
            @endif
            @if(Auth::user()->role_id==2) 
            <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                <a href={{route("listeres")}} class="flex items-center">
                    <span class="text-lg ml-2">Reservation</span>
                </a>
            </li>
            @endif
            <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center">
                <a href={{route("voirmoncompte")}} class="flex items-center">
                    <span class="text-lg ml-2">MON COMPTE</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>