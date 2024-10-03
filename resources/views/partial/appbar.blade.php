<header class="flex flex-wrap  md:justify-start md:flex-nowrap fixed z-50 w-full backdrop-blur-lg bg-black/5">
    <nav class="relative max-w-6xl w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-10 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center gap-x-1">
        <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white" href="#" aria-label="Brand">
            <img src={{asset("logos/white.mini.png")}} class="h-16 sm:ms-5" alt="" />
        </a>
  
        <!-- Collapse Button -->
        <button type="button" class="hs-collapse-toggle md:hidden relative text-white" id="hs-header-base-collapse"  aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation"  data-hs-collapse="#hs-header-base" >
            <svg
                class="h-10 w-10"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="2"
                    d="M4 6h16M4 12h16m-7 6h7"
                ></path>
            </svg>
        </button>
        <!-- End Collapse Button -->
      </div>
  
      <!-- Collapse -->
      <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block "  aria-labelledby="hs-header-base-collapse" >
        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
          <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
            <div class="grow">
              <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-5">
                <a class="{{ Route::currentRouteName() == 'home' ? 'border-b border-b-white' : '' }} p-2 flex items-center text-sm text-white focus:outline-none dark:text-neutral-200 bg-transparent" href={{route("home")}}>
                  {{-- <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> --}}
                    Accueil
                </a>
                <a class="{{ Route::currentRouteName() == 'voyagearticle' ? 'border-b border-b-white' : '' }} p-2 flex items-center text-sm text-white focus:outline-none dark:text-neutral-200 bg-transparent" href={{route("voyagearticle")}}>
                  {{-- <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> --}}
                    Voyages
                </a>
                <a class="{{ Route::currentRouteName() == 'locationarticle' ? 'border-b border-b-white' : '' }} p-2 flex items-center text-sm text-white focus:outline-none dark:text-neutral-200 bg-transparent" href={{route("locationarticle")}}>
                  {{-- <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> --}}
                    Voitures à louer
                </a>
                <a class="{{ Route::currentRouteName() == 'colisarticle' ? 'border-b border-b-white' : '' }} p-2 flex items-center text-sm text-white focus:outline-none dark:text-neutral-200 bg-transparent" href={{route("colisarticle")}}>
                  {{-- <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> --}}
                    Service colis
                </a>
                @if(Auth::check())
                <a class="{{ Route::currentRouteName() == 'activity' ? 'border-b border-b-white' : '' }} p-2 flex items-center text-sm text-white focus:outline-none dark:text-neutral-200 bg-transparent" href={{route("activity")}}>
                  {{-- <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> --}}
                    Mes activités
                </a>
                @else
                @endif
                <!-- Mega Menu -->
              <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                <button id="hs-header-base-mega-menu-medium" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-white {{ Route::currentRouteName() == 'home' ? 'bordere' : '' }} " aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                  {{-- <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg> --}}
                  Accès rapide
                  <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-[705px] lg:w-[750px] hidden z-10 top-full end-0 before:absolute before:-top-5 before:start-0 before:w-full before:h-5" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-mega-menu-medium">
                  <div class="md:mx-6 lg:mx-8 md:rounded-none md:shadow-md md:p-4 md:bg-slate-950/100">
                    <!-- Grid -->
                    <div class="pt-2 md:pt-0 grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-0">
                      <div class="col-span-3 md:p-3">
                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-1">
                          <div>
                            <div class="flex flex-col">
                              {{-- <span class="uppercase font-sans underline ps-20">Articles</span> --}}
                              <div class="space-y-0.5">
                                <!-- Link -->
                                @foreach($fixedArticles as $item)
                                  <a class="px-5 py-3 flex gap-x-3 items-center hover:bg-black/10 rounded-md" href="#">
                                        <img src={{asset("assets/uploads/".$item->photo)}} class="size-10 mt-0.5 text-white dark:text-neutral-200 object-cover rounded-lg">{{-- Icône pour type voyage --}}
                                    <div class="grow">
                                        <p class="text-md text-white dark:text-neutral-200">{{$item->titre}}</p>
                                    </div>
                                  </a>
                                @endforeach
                                {{-- <a class="px-5 py-3 flex gap-x-3 items-center hover:bg-black/10 rounded-md" href="#">
                                  <svg class="shrink-0 size-4 mt-0.5 text-white dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                                  <i class="fa fa-phone size-4 mt-0.5 text-white dark:text-neutral-200"></i>
                                  <div class="grow">
                                    <p class="text-md text-white dark:text-neutral-200">Contact</p>
                                  </div>
                                </a> --}}
                                <!-- End Link -->
                              </div>
                            </div>
                          </div>
                          <!-- End Col -->
                          <div>
                            <div class="flex flex-col">
                              <div class="space-y-0.5">
                                <!-- Link -->
                                <a class="px-5 py-3 flex gap-x-3 items-center hover:bg-black/10 rounded-md" href="#">
                                  <svg class="shrink-0 size-4 mt-0.5 text-white dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                                  <div class="grow">
                                    <p class="text-md text-white dark:text-neutral-200">A propos de la plateforme</p>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Grid -->
                      </div>
                    </div>
                    <!-- End Grid -->
                  </div>
                </div>
              </div>
              <!-- End Mega Menu --> 
              </div>
            </div>
  
            {{-- <div class="my-2 md:my-0 md:mx-2">
              <div class="w-full h-px md:w-px md:h-4 bg-white"></div>
            </div> --}}
  
            <!-- Button Group -->
            <div class=" flex flex-wrap items-center gap-x-1.5 px-2">
              <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex">
                <button id="hs-dropdown-hover-event" type="button" class="hs-dropdown-toggle py-2 px-4 inline-flex items-center gap-x-2 text-xs font-medium rounded-none border border-white text-white hover:border-white hover:text-white focus:outline-none focus:border-gr-white500 focus:text-white disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                  <i class="fas fa-user"></i>

                  {{-- Authentification --}} 
                  <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
              
                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-gray-950 shadow-md p-2 space-y-0.5 mt-2 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">
                  @if(Auth::check())
                    @if(!Auth::user()->photo)
                    <a class="flex items-center gap-x-3.5 py-3 px-4 rounded text-md text-gray-50 hover:bg-slate-900/20" href={{route("addimage")}}>
                      <i class="fa fa-add"></i> Ajouter une photo de profil
                    </a>
                    @endif
                    @if(!Auth::user()->company_name)
                    <a class="flex items-center gap-x-3.5 py-3 px-4 rounded text-md text-gray-50 hover:bg-slate-900/20" href={{route("tocreatecompany",Auth::user()->id)}}>
                      Créer un company
                    </a>
                    @endif
                    <a class="flex items-center gap-x-3.5 py-3 px-4 rounded text-md text-gray-50 hover:bg-slate-900/20" href={{route("logout",Auth::user()->id)}}>
                      Se deconnecter 
                    </a>
                  @else
                  <a class="flex items-center gap-x-3.5 py-3 px-4 rounded text-md text-gray-50 hover:bg-slate-900/20" href={{route("tologin")}}>
                    Se connecter 
                  </a>
                  <a class="flex items-center gap-x-3.5 py-3 px-4 rounded text-md text-gray-50 hover:bg-slate-900/20" href={{route("toregister")}}>
                    S'inscrire
                  </a>
                  @endif
                </div>
              </div>
            </div>
            <!-- End Button Group -->
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->