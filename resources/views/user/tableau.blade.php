@extends("layout.dash")
@section("dash")
{{--     
<section class="flex flex-col items-center justify-center pb-10 md:px-10">
    <div class="max-w-4xl w-full mt-20 md:px-5 px-12 column justify-center">
        <div class="">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                  <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200">
                      <div class="py-3 px-4">
                        <div class="relative max-w-xs">
                          <label for="hs-table-search" class="sr-only">Search</label>
                          <input type="text" name="hs-table-search" id="hs-table-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Search for items">
                          <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                            <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <circle cx="11" cy="11" r="8"></circle>
                              <path d="m21 21-4.3-4.3"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                            <tr>
                              <th scope="col" class="py-3 px-4 pe-0">
                                <div class="flex items-center h-5">
                                  <input id="hs-table-search-checkbox-all" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                                  <label for="hs-table-search-checkbox-all" class="sr-only">Checkbox</label>
                                </div>
                              </th>
                              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Age</th>
                              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Address</th>
                              <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-200">
                            <tr>
                              <td class="py-3 ps-4">
                                <div class="flex items-center h-5">
                                  <input id="hs-table-search-checkbox-1" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                                  <label for="hs-table-search-checkbox-1" class="sr-only">Checkbox</label>
                                </div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">John Brown</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">New York No. 1 Lake Park</td>
                              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</section> --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
      <div class="flex justify-between mb-6">
          <div>
              <div class="text-2xl font-semibold mb-1">{{$nbactivites}}</div>
              <div class="text-sm font-medium text-gray-400">Réservations</div>
          </div>
          
      </div>
      <a href={{route("activitylist")}} class="text-[#f84525] font-medium text-sm hover:text-red-800">Liste</a>
    </div>
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
      <div class="flex justify-between mb-6">
          <div>
              <div class="text-2xl font-semibold mb-1">{{$nb}}</div>
              <div class="text-sm font-medium text-gray-400">Evenements</div>
          </div>
          
      </div>
      <a href={{route("eventlist")}} class="text-[#f84525] font-medium text-sm hover:text-red-800">Liste</a>
    </div>
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
      <div class="flex justify-between mb-6">
          <div>
              <div class="text-2xl font-semibold mb-1">{{$nba}}</div>
              <div class="text-sm font-medium text-gray-400">Notifications</div>
          </div>
          
      </div>
      <a href={{route("anotify")}} class="text-[#f84525] font-medium text-sm hover:text-red-800">Liste</a>
    </div>
</div>
@endsection