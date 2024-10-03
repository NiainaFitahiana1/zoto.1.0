@extends("layout.app")
@section("body") 
    <section class="flex justify-center py-24">
        <div class="max-w-4xl flex flex-col sm:gap-y-0 md:gap-y-5 w-full">
           <div class=" w-full bg-black/40 p-10">
              <div class="grid md:grid-cols-3">
                <div class="col-span-2 p-5 flex flex-col items-center justify-center">
                  <p class="text-7xl font-extrabold font-sans">
                    Inscrivez tant que compagnie
                  </p>
                  <p class="text-lg font-bold font-sans text-gray-50 pt-10">
                    Voici les tâches que les compagnies peuvent faire :
                  </p>  
                  <div class="hs-accordion-group">
                    <div class="hs-accordion active" id="hs-basic-with-arrow-heading-one">
                      <button class="hs-accordion-toggle hs-accordion-active:text-green-950 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-white" aria-expanded="true" aria-controls="hs-basic-with-arrow-collapse-one">
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="m18 15-6-6-6 6"></path>
                        </svg>
                        Gestion des articles
                      </button>
                      <div id="hs-basic-with-arrow-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-one">
                        <p class="text-white">
                          Créer, publier, modifier, et supprimer des articles liés aux services offerts par l'entreprise, comme les voyages, la location de voitures, ou les services de livraison.
                        </p>
                      </div>
                    </div>
                  
                    <div class="hs-accordion" id="hs-basic-with-arrow-heading-two">
                      <button class="hs-accordion-toggle hs-accordion-active:text-green-950 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-white" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-two">
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="m18 15-6-6-6 6"></path>
                        </svg>
                        Gestion des réservations et commandes
                      </button>
                      <div id="hs-basic-with-arrow-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-two">
                        <p class="text-white">
                          Consulter, approuver, ou refuser les réservations et commandes effectuées par les utilisateurs, ainsi que suivre leur statut (en attente, approuvées, en cours, etc.).  
                        </p>
                      </div>
                    </div>
                  
                    <div class="hs-accordion" id="hs-basic-with-arrow-heading-three">
                      <button class="hs-accordion-toggle hs-accordion-active:text-green-950 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-white" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-three">
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="m18 15-6-6-6 6"></path>
                        </svg>
                        Statistiques et rapports :
                      </button>
                      <div id="hs-basic-with-arrow-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-three">
                        <p class="text-white">
                          Accéder à des tableaux de bord ou rapports statistiques concernant les performances de l'entreprise (nombre de réservations, revenus générés, feedback des utilisateurs, etc.).
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-1 px-5 py-16 flex flex-col items-center justify-center gap-y-3">
                  <img src={{asset("logos/white.png")}} alt="">
                  <a href=""
                      class="flex flex-row items-center justify-center w-full px-4 py-4 mb-4 text-sm font-bold bg-gray-950 leading-6 capitalize duration-100 transform rounded-sm shadow cursor-pointer focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 focus:outline-none sm:mb-0 sm:w-auto hover:shadow-lg hover:-translate-y-1">
                      Créer Company
                      <span class="ml-2">
                          <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" class="w-5 h-5 fill-current"><path fill="currentColor" d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                          </svg>
                      </span>
                  </a>
                </div>
              </div>
           </div>
        </div>
    </section>
@endsection

