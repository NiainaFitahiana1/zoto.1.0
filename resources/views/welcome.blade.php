@extends("layout.app")
@section("body") 
<section class="flex flex-col items-center justify-center md:px-10 relative z-10">
  <div class="max-w-4xl w-full mt-20 md:px-5 px-12 column justify-center">
    <div data-hs-carousel='{
      "loadingClasses": "opacity-0",
    "isAutoPlay": true,
    "duration":"30s"
    }' class="relative">
    <div class="hs-carousel relative overflow-hidden w-full min-h-56 rounded-lg">
      <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
        <div class="hs-carousel-slide">
          <div class="flex flex-col justify-center items-start text-start h-full p-6">
            <div class="max-w-xl w-full">
              <p class="text-5xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">Zoto</p>
              <p class="leading-relaxed text-justify max-w-xl mt-3 font-semibold text-xl text-gray-50">
                vous souhaite la bienvenue ! Découvrez nos articles exclusifs pour rendre vos déplacements à Madagascar encore plus simples
              </p>

            </div>
          </div>
        </div>
        <div class="hs-carousel-slide">
          <div class="flex flex-col justify-center items-start text-start h-full p-6">
            <div class="max-w-xl w-full">
              <p class="text-3xl tracking-tight font-extrabold text-white sm:text-4xl md:text-6xl">Voyage</p>
              <p class="leading-relaxed text-justify max-w-xl mt-3 font-semibold text-xl text-gray-50">
                Veuillez explorer nos offres de voyage et découvrir la destination parfaite pour vos prochaines vacances.  
              </p>
            </div>  
          </div>
        </div>
        <div class="hs-carousel-slide">
          <div class="flex flex-col justify-center h-full  items-start text-start p-6">
            <div class="max-w-xl w-full">
              <p class="text-3xl tracking-tight font-extrabold text-white sm:text-4xl md:text-6xl">Location Voiture</p>
              <p class="leading-relaxed text-justify max-w-xl mt-3 font-semibold text-xl text-gray-50">
                Consultez notre catalogue de véhicules et réservez celui qui correspond à vos besoins dès maintenant
              </p>
            </div>  
          </div>
        </div>
        <div class="hs-carousel-slide">
          <div class="flex flex-col justify-center h-full  items-start text-start p-6">
            <div class="max-w-xl w-full">
              <p class="text-3xl tracking-tight font-extrabold text-white sm:text-4xl md:text-6xl">Transportation colis</p>
              <p class="leading-relaxed text-justify max-w-xl mt-3 font-semibold text-xl text-gray-50">
                  Envoyez vos colis en toute tranquillité en choisissant l'une de nos options de transport sécurisées.
              </p>
            </div>  
          </div>
        </div>
      </div>
    </div>
  
  </div>
  <a href={{route("voyagearticle")}}  class="ms-6 mt-1 py-2 px-5 bg-white text-slate-900 tracking-light font-bold inline-flex items-center rounded-sm shadow-sm hover:shadow-md shadow-black gap-x-2"><i class="fa fa-book-open"></i>Explorer</a>
  
  {{-- <div class="max-w-4xl w-full mt-10 px-5 md:px-5 grid md:grid-cols-3 gap-x-2 mb-10">
    <div class=" flex md:justify-end">
      <img src={{asset('ill/plate.png')}} alt="" class="md:h-full h-32">
    </div>
    <div class="flex-col flex gap-y-3 md:col-span-2 md:text-end">
      <span class="font-extrabold text-2xl tracking-tight text-white"><span class="uppercase"></span>Zoto fonctionnalités</span>
      <div class="w-full text-end text-lg font-sans text-gray-50">Publier des articles :</div>
      <p class="text-md text-start md:text-end">
        En tant que compagnie, vous avez la possibilité de partager facilement des articles sur divers sujets pour informer et attirer vos clients potentiels.s
      </p>
      <p class="text-md text-start md:text-end">
        Vous pouvez suivre et organiser les réservations effectuées par vos clients directement depuis votre tableau de bord.
      </p>
      <p class="text-md text-start md:text-end">
        En publiant régulièrement, vous améliorez la visibilité de votre entreprise et augmentez vos chances de recevoir davantage de réservations.
      </p>
    </div>
    <div class="flex-col flex gap-y-3 md:col-span-1">
      <span class="font-extrabold text-2xl tracking-tight text-blue-950">A propos</span>
      <p class="text-md text-justify">
        Zoto vous permet de publier des articles détaillés pour présenter vos services de transport et informer vos clients sur les offres disponibles.
      </p>
      <p class="text-md text-justify">
        Vous pouvez utiliser Zoto pour gérer les réservations en ligne, permettant à vos clients de réserver, suivre leurs demandes et évaluer vos services.
      </p>
      <p class="text-md text-justify">
        En centralisant la gestion de vos articles, réservations et évaluations, Zoto optimise vos opérations pour une meilleure efficacité.
      </p>
    </div>
    <div class="flex items-center md:justify-end md:col-span-3 pe-2 mt-3">
      <a href={{route("descript")}} class="text-gray-200 py-2 px-7 rounded-none border-b border-b-gray-200 hover:bg-white/5 hover:border-b-white hover:border-b-2 text-white inline-flex items-center gap-x-2 text-sm font-bold"><i class="fa fa-arrow-right"></i>Intéressé(e)</a>
    </div>
  </div> --}}
  {{-- <div class="max-w-4xl w-full mt-10 px-5 md:px-5 grid md:grid-cols-2 gap-x-2 py-10 items-center">
    <div class="flex-col flex gap-y-3 md:col-span-1 md:text-start">
      <span class="font-extrabold text-2xl tracking-tight text-white">Assistance</span>
      <p class="text-md text-start">
        Si vous avez des questions ou notification, ecrivez la ci-dessous et on vous repondra si nécessaire .
      </p>
      <form action="" class="w-full py-2">
        <textarea rows="3"
            class="appearance-none block w-full bg-gray-200/10 text-gray-50 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white/5 focus:border-gray-500"></textarea>
        <div>
          <button class="mt-1 py-2 px-5 bg-white text-slate-900 tracking-light font-bold inline-flex items-center rounded-sm shadow-sm hover:shadow-md shadow-black gap-x-2"><i class="fa fa-envelope"></i>Envoyer</button>
        </div>
      </form>
    </div>
    <div class="p-10">
      <img src={{asset("ill/sky.png")}} alt="" class="md:h-full sm:h-32">
    </div>
  </div> --}}
    
  </div>
</section>
<section class="w-full relative -mt-16 md:-mt-48 absolute z-0">
  <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 380" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(2.597, 2.597, 2.597, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,266L60,266C120,266,240,266,360,278.7C480,291,600,317,720,291.3C840,266,960,190,1080,158.3C1200,127,1320,139,1440,158.3C1560,177,1680,203,1800,190C1920,177,2040,127,2160,114C2280,101,2400,127,2520,164.7C2640,203,2760,253,2880,266C3000,279,3120,253,3240,240.7C3360,228,3480,228,3600,247C3720,266,3840,304,3960,285C4080,266,4200,190,4320,139.3C4440,89,4560,63,4680,95C4800,127,4920,215,5040,228C5160,241,5280,177,5400,152C5520,127,5640,139,5760,120.3C5880,101,6000,51,6120,25.3C6240,0,6360,0,6480,19C6600,38,6720,76,6840,95C6960,114,7080,114,7200,101.3C7320,89,7440,63,7560,101.3C7680,139,7800,241,7920,234.3C8040,228,8160,114,8280,107.7C8400,101,8520,203,8580,253.3L8640,304L8640,380L8580,380C8520,380,8400,380,8280,380C8160,380,8040,380,7920,380C7800,380,7680,380,7560,380C7440,380,7320,380,7200,380C7080,380,6960,380,6840,380C6720,380,6600,380,6480,380C6360,380,6240,380,6120,380C6000,380,5880,380,5760,380C5640,380,5520,380,5400,380C5280,380,5160,380,5040,380C4920,380,4800,380,4680,380C4560,380,4440,380,4320,380C4200,380,4080,380,3960,380C3840,380,3720,380,3600,380C3480,380,3360,380,3240,380C3120,380,3000,380,2880,380C2760,380,2640,380,2520,380C2400,380,2280,380,2160,380C2040,380,1920,380,1800,380C1680,380,1560,380,1440,380C1320,380,1200,380,1080,380C960,380,840,380,720,380C600,380,480,380,360,380C240,380,120,380,60,380L0,380Z"></path></svg>
</section>

{{-- <section class="bg-white flex justify-center md:-mt-10 px-12 md:px-0 z-10">
  <div class="max-w-4xl w-full px-5 md:px-10 grid md:grid-cols-2 gap-x-2 items-center ">
    <div class="flex-col flex gap-y-3 md:col-span-1 md:text-start">
      <span class="font-extrabold text-2xl tracking-tight text-black">Assistance</span>
      <p class="text-md text-start text-black">
        Si vous avez des questions ou notification, ecrivez la ci-dessous et on vous repondra si nécessaire .
      </p>
      <form action="" class="w-full py-2">
        <textarea rows="3"
            class="appearance-none block w-full bg-gray-200/10 text-black border border-gray-900 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white/5 focus:border-gray-500"></textarea>
        <div>
          <button class="mt-1 py-2 px-5 bg-black text-white tracking-light font-bold inline-flex items-center rounded-sm shadow-sm hover:shadow-md shadow-black gap-x-2"><i class="fa fa-envelope"></i>Envoyer</button>
        </div>
      </form>
    </div>
    <div class="p-10">
      <img src={{asset("ill/sky.png")}} alt="" class="md:h-full h-0">
    </div>
  </div> 
</section> --}}
{{-- <section class="w-full -mt-56">
  <div class="relative w-full">
    <!-- SVG -->
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
      <defs>
        <linearGradient id="gradient" x1="93%" y1="25%" x2="7%" y2="75%">
          <stop offset="5%" stop-color="#0693e3"></stop>
          <stop offset="95%" stop-color="#8ED1FC"></stop>
        </linearGradient>
      </defs>
      <path d="M 0,400 L 0,225 C 138.53333333333336,262.73333333333335 277.0666666666667,300.46666666666664 436,295 C 594.9333333333333,289.53333333333336 774.2666666666667,240.86666666666667 945,197 C 1115.7333333333333,153.13333333333333 1277.8666666666668,114.06666666666666 1440,75 L 1440,400 L 0,400 Z" 
            stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
    </svg>
  
    <!-- Texte par-dessus SVG avec Tailwind -->
    <div class="absolute inset-0 flex items-center justify-center w-full mt-96 px-5">
      <div class="max-w-4xl w-full mt-10 px-5 md:px-5 grid md:grid-cols-2 gap-x-2 py-10 items-center">
        <div class="flex-col flex gap-y-3 md:col-span-1 md:text-start">
          <span class="font-extrabold text-2xl tracking-tight text-black">Assistance</span>
          <p class="text-md text-start">
            Si vous avez des questions ou notification, ecrivez la ci-dessous et on vous repondra si nécessaire .
          </p>
          <form action="" class="w-full py-2">
            <textarea rows="3"
                class="appearance-none block w-full bg-gray-200/10 text-gray-50 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white/5 focus:border-gray-500"></textarea>
            <div>
              <button class="mt-1 py-2 px-5 bg-white text-slate-900 tracking-light font-bold inline-flex items-center rounded-sm shadow-sm hover:shadow-md shadow-black gap-x-2"><i class="fa fa-envelope"></i>Envoyer</button>
            </div>
          </form>
        </div>
        <div class="p-10">
          <img src={{asset("ill/sky.png")}} alt="" class="md:h-full sm:h-32">
        </div>
      </div> 
    </div>
  </div>
  
</section> --}}


@endsection