
{{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
 <section x-data="{ atTop: true }" class="bg-white bg-opacity-30">
  <!-- Alpine.js initializes data properties for the component. `atTop` determines if the page is scrolled past a certain point. -->
  <div class="fixed z-50 w-full px-8 py-4 transition-all duration-1000 max-w-2xl inset-x-0 mx-auto ease-in-out transform" :class="{ 'bg-gray-200 bg-opacity-30 backdrop-blur-lg max-w-4xl ': !atTop, 'max-w-xl': atTop }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)">
   <!-- This div is styled to change its appearance based on the scroll position, toggling classes for background, opacity, blur, and width. -->
   <div x-data="{ open: false }" class="flex w-full p-2 mx-auto items-center justify-between flex-row">
    <!-- Another Alpine.js component for handling the navigation menu's open/close state. -->
    <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8">
     <div class="relative sm:flex sm:items-center">
       <div class="flex items-center justify-between">
         <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white" href="#" aria-label="Brand">Brand</a>
         <div class="sm:hidden">
           <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg bg-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-gray-800/10 dark:focus:bg-gray-800/10" id="hs-navbar-basic-usage-collapse" aria-expanded="false" aria-controls="hs-navbar-basic-usage" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-basic-usage">
             <svg class="hs-collapse-open shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
           </button>
         </div>
       </div>
 
       <div id="hs-navbar-basic-usage" class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block" aria-labelledby="hs-navbar-basic-usage-collapse">
         <div class="flex flex-col gap-y-3 sm:gap-y-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
           <a class="sm:p-2 font-bold text-gray-950 focus:outline-none" href="#" aria-current="page">Acceuil</a>
 
           <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]   [--is-collapse:true] sm:[--is-collapse:false] ">
             <button id="hs-mega-menu" type="button" class="hs-dropdown-toggle sm:p-2 flex items-center w-full text-gray-950 font-bold hover:text-gray-400 focus:outline-none focus:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
               Autres
               <svg class="hs-dropdown-open:-rotate-180 sm:hs-dropdown-open:rotate-0 duration-300 ms-2 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
             </button>
 
             <div class="hs-dropdown-menu transition-[height] sm:transition-[opacity,margin] duration-300 ease-in-out sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10  top-full start-0 min-w-60 bg-gray-50 sm:shadow-md py-2 sm:px-2 dark:bg-neutral-800 sm:dark:border dark:border-neutral-700 dark:divide-neutral-700 before:absolute" role="menu" aria-orientation="vertical" aria-labelledby="hs-mega-menu">
               <div class="sm:grid sm:grid-cols-3">
                 <div class="flex flex-col">
                   <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                     About
                   </a>
                   <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                     Services
                   </a>
                   <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                     Customer Story
                   </a>
                 </div>
 
                 <div class="flex flex-col">
                   <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                     Careers
                   </a>
                   <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                     Careers: Overview
                   </a>
                   <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                     Careers: Apply
                   </a>
                 </div>
 
                 <div class="flex flex-col">
                   <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                     Log In
                   </a>
                   <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                     Sign Up
                   </a>
                 </div>
               </div>
             </div>
           </div>
 
           <a class="sm:p-2 font-bold text-gray-950 hover:text-gray-400 focus:outline-none focus:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500" href="#">Project</a>
         </div>
       </div>
     </div>
   </nav>
   </div>
  </div>
  <div class="bg-white">
   <div class="px-8 py-10 mx-auto text-center md:px-12 lg:px-24 text-zinc-500">
    <p class="max-w-xl mx-auto text-4xl text-black font-bold uppercase">
     Scroll to see effect
    </p>
    <div class="grid grid-cols-1 gap-8 mx-auto gap-y-28 mt-24 sm:grid-cols-1 max-w-2xl"> <a href="#_">
           <div> <img class="duration-500 w-full rounded-3xl shadow hover:shadow-3xl hover:-translate-y-12" src="https://i.pinimg.com/564x/eb/b3/bd/ebb3bd6c322463cee8b7b17659792830.jpg"> </div>
           </a><a href="#_">
           <div> <img class="duration-500 w-full rounded-3xl shadow hover:shadow-3xl hover:-translate-y-12" src="https://i.pinimg.com/564x/9b/0e/e1/9b0ee1146eba537b5b1e207928350e0f.jpg"> </div>
           </a><a href="#_">
           <div> <img class="duration-500 w-full rounded-3xl shadow hover:shadow-3xl hover:-translate-y-12" src="https://i.pinimg.com/564x/b6/91/52/b691526e863a332d1708eb1d9da0d403.jpg"> </div>
           </a> </div>
         </div> 
    </div>
   <!-- Starts links to tutorial >
  <div class="pointer-events-none fixed inset-x-0 bottom-0 sm:flex sm:justify-center sm:px-6 sm:pb-5 lg:px-8">
   <div class="pointer-events-auto flex w-full max-w-md divide-x divide-neutral-200 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
    <div class="flex w-0 flex-1 items-center p-4">
     <div class="w-full">
      <p class="text-sm font-bold text-neutral-900">Tutorial</p>
      <p class="mt-1 text-sm text-neutral-500">
       How to create an adaptable navigation with Astro, Tailwind CSS, and Alpine.js
      </p>
      <p class="mt-2 text-xs text-orange-500 underline"> <a href="https://lexingtonthemes.com">
        by © Lexington Themes</a> </p>
     </div>
    </div>
    <div class="flex">
     <div class="flex flex-col divide-y divide-neutral-200">
      <div class="flex h-0 flex-1"> <a href="https://lexingtonthemes.com/tutorials/how-to-create-an-animated-navigation-with-alpine-js" type="button" class="flex w-full items-center justify-center rounded-none rounded-tr-lg border border-transparent px-4 py-3 text-sm font-bold text-orange-600 hover:text-orange-500 focus:z-10 focus:outline-none focus:ring-2 focus:ring-orange-500">Tutorial</a> </div>
      <div class="flex h-0 flex-1"> <a href="https://github.com/Lexington-Themes/lexington-tutorials/blob/main/src/pages/adaptable-navigation/index.astro" class="flex w-full items-center justify-center rounded-none rounded-br-lg border border-transparent px-4 py-3 text-sm font-bold text-neutral-700 hover:text-neutral-500 focus:outline-none focus:ring-2 focus:ring-orange-500">Get the code</a> </div>
     </div>
    </div>
   </div>
  </div> < Ends links to tutorial -->
 </section> --}}
 <script src="//unpkg.com/alpinejs"></script>
  <nav x-data="{
navigationMenuOpen: false,
navigationMenu: '',
navigationMenuCloseDelay: 200,
navigationMenuCloseTimeout: null,
navigationMenuLeave() {
let that = this;
this.navigationMenuCloseTimeout = setTimeout(() => {
that.navigationMenuClose();
}, this.navigationMenuCloseDelay);
},
navigationMenuReposition(navElement) {
this.navigationMenuClearCloseTimeout();
this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px';
this.$refs.navigationDropdown.style.marginLeft = (navElement.offsetWidth/2) + 'px';
},
navigationMenuClearCloseTimeout(){
clearTimeout(this.navigationMenuCloseTimeout);
},
navigationMenuClose(){
this.navigationMenuOpen = false;
this.navigationMenu = '';
}
}"
class="relative z-10 w-auto">
<div class="relative">
<ul class="flex items-center justify-center flex-1 p-1 space-x-1 list-none border rounded-md text-neutral-700 group border-neutral-200/80">
<li>
<button
:class="{ 'bg-neutral-100' : navigationMenu=='getting-started', 'hover:bg-neutral-100' : navigationMenu!='getting-started' }" @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='getting-started'" @mouseleave="navigationMenuLeave()" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none group w-max">
<span>Getting started</span>
<svg :class="{ '-rotate-180' : navigationMenuOpen==true && navigationMenu == 'getting-started' }" class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
</button>
</li>
<li>
<button
:class="{ 'bg-neutral-100' : navigationMenu=='learn-more', 'hover:bg-neutral-100' : navigationMenu!='learn-more' }" @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='learn-more'" @mouseleave="navigationMenuLeave()" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-neutral-100 group w-max">
<span>Learn More</span>
<svg :class="{ '-rotate-180' : navigationMenuOpen==true && navigationMenu == 'learn-more' }" class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
</button>
</li>
<li>
<a href="#_" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-neutral-100 group w-max">
Documentation
</a>
</li>
</ul>
</div>
<div x-ref="navigationDropdown" x-show="navigationMenuOpen"
x-transition:enter="transition ease-out duration-100"
x-transition:enter-start="opacity-0 scale-90"
x-transition:enter-end="opacity-100 scale-100"
x-transition:leave="transition ease-in duration-100"
x-transition:leave-start="opacity-100 scale-100"
x-transition:leave-end="opacity-0 scale-90"
@mouseover="navigationMenuClearCloseTimeout()" @mouseleave="navigationMenuLeave()"
class="absolute top-0 pt-3 duration-200 ease-out -translate-x-1/2 translate-y-11" x-cloak>
<div class="flex justify-center w-auto h-auto overflow-hidden bg-white border rounded-md shadow-sm border-neutral-200/70">
<div x-show="navigationMenu == 'getting-started'" class="flex items-stretch justify-center w-full max-w-2xl p-6 gap-x-3">
<div class="flex-shrink-0 w-48 rounded pt-28 pb-7 bg-gradient-to-br from-neutral-800 to-black">
<div class="relative px-7 space-y-1.5 text-white">
<svg class="block w-auto h-9" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M67.683 89.217h44.634l30.9 53.218H36.783l30.9-53.218Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M77.478 120.522h21.913v46.956H77.478v-46.956Zm-34.434-29.74 45.59-78.26 46.757 78.26H43.044Z" fill="currentColor"/></svg>
<span class="block font-bold">Pines UI</span>
<span class="block text-sm opacity-60">An Alpine and Tailwind UI library</span>
</div>
</div>
<div class="w-72">
<a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
<span class="block mb-1 font-medium text-black">Introduction</span>
<span class="block font-light leading-5 opacity-50">Re-usable elements built using Alpine JS and Tailwind CSS.</span>
</a>
<a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
<span class="block mb-1 font-medium text-black">How to use</span>
<span class="block leading-5 opacity-50">Couldn't be easier. It's is as simple as copy, paste, and preview.</span>
</a>
<a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
<span class="block mb-1 font-medium text-black">Contributing</span>
<span class="block leading-5 opacity-50">Feel free to contribute your expertise. All these elements are open-source.</span>
</a>
</div>
</div>
<div x-show="navigationMenu == 'learn-more'" class="flex items-stretch justify-center w-full p-6">
<div class="w-72">
<a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
<span class="block mb-1 font-medium text-black">Tailwind CSS</span>
<span class="block font-light leading-5 opacity-50">A utility first CSS framework for building amazing websites.</span>
</a>
<a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
<span class="block mb-1 font-medium text-black">Laravel</span>
<span class="block font-light leading-5 opacity-50">The perfect all-in-one framework for building amazing apps.</span>
</a>
<a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
<span class="block mb-1 font-medium text-black">Pines UI</span>
<span class="block leading-5 opacity-50">An Alpine JS and Tailwind CSS UI library for awesome people. </span>
</a>
</div>
<div class="w-72">
<a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
<span class="block mb-1 font-medium text-black">ApineJS</span>
<span class="block font-light leading-5 opacity-50">A framework without the complex setup or heavy dependencies.</span>
</a>
<a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
<span class="block mb-1 font-medium text-black">Livewire</span>
<span class="block leading-5 opacity-50">A seamless integration of server-side and client-side interactions.</span>
</a>
<a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
<span class="block mb-1 font-medium text-black">Tails</span>
<span class="block leading-5 opacity-50">The ultimate Tailwind CSS design tool that helps you craft beautiful websites.</span>
</a>
</div>
</div>
</div>
</div>
</nav>