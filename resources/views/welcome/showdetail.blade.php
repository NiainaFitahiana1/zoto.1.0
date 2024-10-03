@extends('layout.app')
@section('body')
{{-- <div class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-32 rounded-lg">
                    <img class="w-32 h-full rounded-full object-cover" src={{asset("assets/uploads/".$article->photo)}} alt="Product Image">
                </div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{$article->titre}}</h2>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">

                </p>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300">Type:</span>
                        <span class="text-gray-600 dark:text-gray-300">{{$article->type->type}}</span>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex flex-col">
                        <div class=" overflow-x-auto">
                          <div class="min-w-full inline-block align-middle">
                              <div class="overflow-hidden ">
                                  <table class=" min-w-full rounded-xl px-2 text-center">
                                      <thead class="text-center">
                                          <tr class="bg-gray-50">
                                              <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Lieu_1</th>
                                              <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Lieu_2</th>
                                              <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Frais</th>
                                              <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Action</th>
                                          </tr>

                                      </thead>
                                      <tbody class="divide-y divide-gray-300 ">
                                        @foreach($voyage as $item)
                                          <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                              <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{$item->point_A}}</td>
                                              <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->point_B}}</td>
                                              <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->tarif_1}} MGA</td>
                                              <td class=" p-2 ">
                                                  <div class="flex items-center justify-center gap-1">
                                                      <button class="p-2  rounded-full  group transition-all duration-500  flex item-center">
                                                          <svg class="cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                              <path class="fill-indigo-500 " d="M9.53414 8.15675L8.96459 7.59496L8.96459 7.59496L9.53414 8.15675ZM13.8911 3.73968L13.3215 3.17789V3.17789L13.8911 3.73968ZM16.3154 3.75892L15.7367 4.31126L15.7367 4.31127L16.3154 3.75892ZM16.38 3.82658L16.9587 3.27423L16.9587 3.27423L16.38 3.82658ZM16.3401 6.13595L15.7803 5.56438L16.3401 6.13595ZM11.9186 10.4658L12.4784 11.0374L11.9186 10.4658ZM11.1223 10.9017L10.9404 10.1226V10.1226L11.1223 10.9017ZM9.07259 10.9951L8.52556 11.5788L8.52556 11.5788L9.07259 10.9951ZM9.09713 8.9664L9.87963 9.1328V9.1328L9.09713 8.9664ZM9.05721 10.9803L8.49542 11.5498H8.49542L9.05721 10.9803ZM17.1679 4.99458L16.368 4.98075V4.98075L17.1679 4.99458ZM15.1107 2.8693L15.1171 2.06932L15.1107 2.8693ZM9.22851 8.51246L8.52589 8.12992L8.52452 8.13247L9.22851 8.51246ZM9.22567 8.51772L8.52168 8.13773L8.5203 8.1403L9.22567 8.51772ZM11.5684 10.7654L11.9531 11.4668L11.9536 11.4666L11.5684 10.7654ZM11.5669 10.7662L11.9507 11.4681L11.9516 11.4676L11.5669 10.7662ZM11.3235 3.30005C11.7654 3.30005 12.1235 2.94188 12.1235 2.50005C12.1235 2.05822 11.7654 1.70005 11.3235 1.70005V3.30005ZM18.3 9.55887C18.3 9.11705 17.9418 8.75887 17.5 8.75887C17.0582 8.75887 16.7 9.11705 16.7 9.55887H18.3ZM3.47631 16.5237L4.042 15.9581H4.042L3.47631 16.5237ZM16.5237 16.5237L15.958 15.9581L15.958 15.9581L16.5237 16.5237ZM10.1037 8.71855L14.4606 4.30148L13.3215 3.17789L8.96459 7.59496L10.1037 8.71855ZM15.7367 4.31127L15.8013 4.37893L16.9587 3.27423L16.8941 3.20657L15.7367 4.31127ZM15.7803 5.56438L11.3589 9.89426L12.4784 11.0374L16.8998 6.70753L15.7803 5.56438ZM10.9404 10.1226C10.3417 10.2624 9.97854 10.3452 9.72166 10.3675C9.47476 10.3888 9.53559 10.3326 9.61962 10.4113L8.52556 11.5788C8.9387 11.966 9.45086 11.9969 9.85978 11.9615C10.2587 11.9269 10.7558 11.8088 11.3042 11.6807L10.9404 10.1226ZM8.31462 8.8C8.19986 9.33969 8.09269 9.83345 8.0681 10.2293C8.04264 10.6393 8.08994 11.1499 8.49542 11.5498L9.619 10.4107C9.70348 10.494 9.65043 10.5635 9.66503 10.3285C9.6805 10.0795 9.75378 9.72461 9.87963 9.1328L8.31462 8.8ZM9.61962 10.4113C9.61941 10.4111 9.6192 10.4109 9.619 10.4107L8.49542 11.5498C8.50534 11.5596 8.51539 11.5693 8.52556 11.5788L9.61962 10.4113ZM15.8013 4.37892C16.0813 4.67236 16.2351 4.83583 16.3279 4.96331C16.4073 5.07234 16.3667 5.05597 16.368 4.98075L17.9678 5.00841C17.9749 4.59682 17.805 4.27366 17.6213 4.02139C17.451 3.78756 17.2078 3.53522 16.9587 3.27423L15.8013 4.37892ZM16.8998 6.70753C17.1578 6.45486 17.4095 6.21077 17.5876 5.98281C17.7798 5.73698 17.9607 5.41987 17.9678 5.00841L16.368 4.98075C16.3693 4.90565 16.4103 4.8909 16.327 4.99749C16.2297 5.12196 16.0703 5.28038 15.7803 5.56438L16.8998 6.70753ZM14.4606 4.30148C14.7639 3.99402 14.9352 3.82285 15.0703 3.71873C15.1866 3.62905 15.1757 3.66984 15.1044 3.66927L15.1171 2.06932C14.6874 2.06591 14.3538 2.25081 14.0935 2.45151C13.8518 2.63775 13.5925 2.9032 13.3215 3.17789L14.4606 4.30148ZM16.8941 3.20657C16.6279 2.92765 16.373 2.65804 16.1345 2.46792C15.8774 2.26298 15.5468 2.07273 15.1171 2.06932L15.1044 3.66927C15.033 3.66871 15.0226 3.62768 15.1372 3.71904C15.2704 3.82522 15.4387 3.999 15.7367 4.31126L16.8941 3.20657ZM8.96459 7.59496C8.82923 7.73218 8.64795 7.90575 8.5259 8.12993L9.93113 8.895C9.92075 8.91406 9.91465 8.91711 9.93926 8.88927C9.97002 8.85445 10.0145 8.80893 10.1037 8.71854L8.96459 7.59496ZM9.87963 9.1328C9.9059 9.00925 9.91925 8.94785 9.93124 8.90366C9.94073 8.86868 9.94137 8.87585 9.93104 8.89515L8.5203 8.1403C8.39951 8.36605 8.35444 8.61274 8.31462 8.8L9.87963 9.1328ZM8.52452 8.13247L8.52168 8.13773L9.92967 8.89772L9.9325 8.89246L8.52452 8.13247ZM11.3589 9.89426C11.27 9.98132 11.2252 10.0248 11.1909 10.055C11.1635 10.0791 11.1658 10.0738 11.1832 10.0642L11.9536 11.4666C12.1727 11.3462 12.3427 11.1703 12.4784 11.0374L11.3589 9.89426ZM11.3042 11.6807C11.4912 11.6371 11.7319 11.5878 11.9507 11.4681L11.1831 10.0643C11.2007 10.0547 11.206 10.0557 11.1697 10.0663C11.1248 10.0793 11.0628 10.0941 10.9404 10.1226L11.3042 11.6807ZM11.1837 10.064L11.1822 10.0648L11.9516 11.4676L11.9531 11.4668L11.1837 10.064ZM16.399 6.10097L13.8984 3.60094L12.7672 4.73243L15.2677 7.23246L16.399 6.10097ZM10.8333 16.7001H9.16667V18.3001H10.8333V16.7001ZM3.3 10.8334V9.16672H1.7V10.8334H3.3ZM9.16667 3.30005H11.3235V1.70005H9.16667V3.30005ZM16.7 9.55887V10.8334H18.3V9.55887H16.7ZM9.16667 16.7001C7.5727 16.7001 6.45771 16.6984 5.61569 16.5851C4.79669 16.475 4.35674 16.2728 4.042 15.9581L2.91063 17.0894C3.5722 17.751 4.40607 18.0369 5.4025 18.1709C6.37591 18.3018 7.61793 18.3001 9.16667 18.3001V16.7001ZM1.7 10.8334C1.7 12.3821 1.6983 13.6241 1.82917 14.5976C1.96314 15.594 2.24905 16.4279 2.91063 17.0894L4.042 15.9581C3.72726 15.6433 3.52502 15.2034 3.41491 14.3844C3.3017 13.5423 3.3 12.4273 3.3 10.8334H1.7ZM10.8333 18.3001C12.3821 18.3001 13.6241 18.3018 14.5975 18.1709C15.5939 18.0369 16.4278 17.751 17.0894 17.0894L15.958 15.9581C15.6433 16.2728 15.2033 16.475 14.3843 16.5851C13.5423 16.6984 12.4273 16.7001 10.8333 16.7001V18.3001ZM16.7 10.8334C16.7 12.4274 16.6983 13.5423 16.5851 14.3844C16.475 15.2034 16.2727 15.6433 15.958 15.9581L17.0894 17.0894C17.7509 16.4279 18.0369 15.594 18.1708 14.5976C18.3017 13.6241 18.3 12.3821 18.3 10.8334H16.7ZM3.3 9.16672C3.3 7.57275 3.3017 6.45776 3.41491 5.61574C3.52502 4.79674 3.72726 4.35679 4.042 4.04205L2.91063 2.91068C2.24905 3.57225 1.96314 4.40612 1.82917 5.40255C1.6983 6.37596 1.7 7.61798 1.7 9.16672H3.3ZM9.16667 1.70005C7.61793 1.70005 6.37591 1.69835 5.4025 1.82922C4.40607 1.96319 3.5722 2.24911 2.91063 2.91068L4.042 4.04205C4.35674 3.72731 4.79669 3.52507 5.61569 3.41496C6.45771 3.30175 7.5727 3.30005 9.16667 3.30005V1.70005Z" fill="#818CF8"></path>
                                                          </svg>
                                                      </button>
                                                  </div>
                                              </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>
                              <div class="overflow-hidden ">
                                  <table class=" min-w-full rounded-xl px-2 text-center">
                                    <p class="text-lg">Liste de Numéros</p>
                                      <thead class="text-center">
                                          <tr class="bg-gray-50">
                                              <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Lieu_1</th>
                                              <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Lieu_2</th>
                                              <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Frais</th>
                                              <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody class="divide-y divide-gray-300 ">
                                        @foreach($voyage as $item)
                                          <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                              <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{$item->point_A}}</td>
                                              <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->point_B}}</td>
                                              <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->tarif_1}} MGA</td>
                                              <td class=" p-2 ">
                                                  <div class="flex items-center justify-center gap-1">
                                                      <button class="p-2  rounded-full  group transition-all duration-500  flex item-center">
                                                          <svg class="cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                              <path class="fill-indigo-500 " d="M9.53414 8.15675L8.96459 7.59496L8.96459 7.59496L9.53414 8.15675ZM13.8911 3.73968L13.3215 3.17789V3.17789L13.8911 3.73968ZM16.3154 3.75892L15.7367 4.31126L15.7367 4.31127L16.3154 3.75892ZM16.38 3.82658L16.9587 3.27423L16.9587 3.27423L16.38 3.82658ZM16.3401 6.13595L15.7803 5.56438L16.3401 6.13595ZM11.9186 10.4658L12.4784 11.0374L11.9186 10.4658ZM11.1223 10.9017L10.9404 10.1226V10.1226L11.1223 10.9017ZM9.07259 10.9951L8.52556 11.5788L8.52556 11.5788L9.07259 10.9951ZM9.09713 8.9664L9.87963 9.1328V9.1328L9.09713 8.9664ZM9.05721 10.9803L8.49542 11.5498H8.49542L9.05721 10.9803ZM17.1679 4.99458L16.368 4.98075V4.98075L17.1679 4.99458ZM15.1107 2.8693L15.1171 2.06932L15.1107 2.8693ZM9.22851 8.51246L8.52589 8.12992L8.52452 8.13247L9.22851 8.51246ZM9.22567 8.51772L8.52168 8.13773L8.5203 8.1403L9.22567 8.51772ZM11.5684 10.7654L11.9531 11.4668L11.9536 11.4666L11.5684 10.7654ZM11.5669 10.7662L11.9507 11.4681L11.9516 11.4676L11.5669 10.7662ZM11.3235 3.30005C11.7654 3.30005 12.1235 2.94188 12.1235 2.50005C12.1235 2.05822 11.7654 1.70005 11.3235 1.70005V3.30005ZM18.3 9.55887C18.3 9.11705 17.9418 8.75887 17.5 8.75887C17.0582 8.75887 16.7 9.11705 16.7 9.55887H18.3ZM3.47631 16.5237L4.042 15.9581H4.042L3.47631 16.5237ZM16.5237 16.5237L15.958 15.9581L15.958 15.9581L16.5237 16.5237ZM10.1037 8.71855L14.4606 4.30148L13.3215 3.17789L8.96459 7.59496L10.1037 8.71855ZM15.7367 4.31127L15.8013 4.37893L16.9587 3.27423L16.8941 3.20657L15.7367 4.31127ZM15.7803 5.56438L11.3589 9.89426L12.4784 11.0374L16.8998 6.70753L15.7803 5.56438ZM10.9404 10.1226C10.3417 10.2624 9.97854 10.3452 9.72166 10.3675C9.47476 10.3888 9.53559 10.3326 9.61962 10.4113L8.52556 11.5788C8.9387 11.966 9.45086 11.9969 9.85978 11.9615C10.2587 11.9269 10.7558 11.8088 11.3042 11.6807L10.9404 10.1226ZM8.31462 8.8C8.19986 9.33969 8.09269 9.83345 8.0681 10.2293C8.04264 10.6393 8.08994 11.1499 8.49542 11.5498L9.619 10.4107C9.70348 10.494 9.65043 10.5635 9.66503 10.3285C9.6805 10.0795 9.75378 9.72461 9.87963 9.1328L8.31462 8.8ZM9.61962 10.4113C9.61941 10.4111 9.6192 10.4109 9.619 10.4107L8.49542 11.5498C8.50534 11.5596 8.51539 11.5693 8.52556 11.5788L9.61962 10.4113ZM15.8013 4.37892C16.0813 4.67236 16.2351 4.83583 16.3279 4.96331C16.4073 5.07234 16.3667 5.05597 16.368 4.98075L17.9678 5.00841C17.9749 4.59682 17.805 4.27366 17.6213 4.02139C17.451 3.78756 17.2078 3.53522 16.9587 3.27423L15.8013 4.37892ZM16.8998 6.70753C17.1578 6.45486 17.4095 6.21077 17.5876 5.98281C17.7798 5.73698 17.9607 5.41987 17.9678 5.00841L16.368 4.98075C16.3693 4.90565 16.4103 4.8909 16.327 4.99749C16.2297 5.12196 16.0703 5.28038 15.7803 5.56438L16.8998 6.70753ZM14.4606 4.30148C14.7639 3.99402 14.9352 3.82285 15.0703 3.71873C15.1866 3.62905 15.1757 3.66984 15.1044 3.66927L15.1171 2.06932C14.6874 2.06591 14.3538 2.25081 14.0935 2.45151C13.8518 2.63775 13.5925 2.9032 13.3215 3.17789L14.4606 4.30148ZM16.8941 3.20657C16.6279 2.92765 16.373 2.65804 16.1345 2.46792C15.8774 2.26298 15.5468 2.07273 15.1171 2.06932L15.1044 3.66927C15.033 3.66871 15.0226 3.62768 15.1372 3.71904C15.2704 3.82522 15.4387 3.999 15.7367 4.31126L16.8941 3.20657ZM8.96459 7.59496C8.82923 7.73218 8.64795 7.90575 8.5259 8.12993L9.93113 8.895C9.92075 8.91406 9.91465 8.91711 9.93926 8.88927C9.97002 8.85445 10.0145 8.80893 10.1037 8.71854L8.96459 7.59496ZM9.87963 9.1328C9.9059 9.00925 9.91925 8.94785 9.93124 8.90366C9.94073 8.86868 9.94137 8.87585 9.93104 8.89515L8.5203 8.1403C8.39951 8.36605 8.35444 8.61274 8.31462 8.8L9.87963 9.1328ZM8.52452 8.13247L8.52168 8.13773L9.92967 8.89772L9.9325 8.89246L8.52452 8.13247ZM11.3589 9.89426C11.27 9.98132 11.2252 10.0248 11.1909 10.055C11.1635 10.0791 11.1658 10.0738 11.1832 10.0642L11.9536 11.4666C12.1727 11.3462 12.3427 11.1703 12.4784 11.0374L11.3589 9.89426ZM11.3042 11.6807C11.4912 11.6371 11.7319 11.5878 11.9507 11.4681L11.1831 10.0643C11.2007 10.0547 11.206 10.0557 11.1697 10.0663C11.1248 10.0793 11.0628 10.0941 10.9404 10.1226L11.3042 11.6807ZM11.1837 10.064L11.1822 10.0648L11.9516 11.4676L11.9531 11.4668L11.1837 10.064ZM16.399 6.10097L13.8984 3.60094L12.7672 4.73243L15.2677 7.23246L16.399 6.10097ZM10.8333 16.7001H9.16667V18.3001H10.8333V16.7001ZM3.3 10.8334V9.16672H1.7V10.8334H3.3ZM9.16667 3.30005H11.3235V1.70005H9.16667V3.30005ZM16.7 9.55887V10.8334H18.3V9.55887H16.7ZM9.16667 16.7001C7.5727 16.7001 6.45771 16.6984 5.61569 16.5851C4.79669 16.475 4.35674 16.2728 4.042 15.9581L2.91063 17.0894C3.5722 17.751 4.40607 18.0369 5.4025 18.1709C6.37591 18.3018 7.61793 18.3001 9.16667 18.3001V16.7001ZM1.7 10.8334C1.7 12.3821 1.6983 13.6241 1.82917 14.5976C1.96314 15.594 2.24905 16.4279 2.91063 17.0894L4.042 15.9581C3.72726 15.6433 3.52502 15.2034 3.41491 14.3844C3.3017 13.5423 3.3 12.4273 3.3 10.8334H1.7ZM10.8333 18.3001C12.3821 18.3001 13.6241 18.3018 14.5975 18.1709C15.5939 18.0369 16.4278 17.751 17.0894 17.0894L15.958 15.9581C15.6433 16.2728 15.2033 16.475 14.3843 16.5851C13.5423 16.6984 12.4273 16.7001 10.8333 16.7001V18.3001ZM16.7 10.8334C16.7 12.4274 16.6983 13.5423 16.5851 14.3844C16.475 15.2034 16.2727 15.6433 15.958 15.9581L17.0894 17.0894C17.7509 16.4279 18.0369 15.594 18.1708 14.5976C18.3017 13.6241 18.3 12.3821 18.3 10.8334H16.7ZM3.3 9.16672C3.3 7.57275 3.3017 6.45776 3.41491 5.61574C3.52502 4.79674 3.72726 4.35679 4.042 4.04205L2.91063 2.91068C2.24905 3.57225 1.96314 4.40612 1.82917 5.40255C1.6983 6.37596 1.7 7.61798 1.7 9.16672H3.3ZM9.16667 1.70005C7.61793 1.70005 6.37591 1.69835 5.4025 1.82922C4.40607 1.96319 3.5722 2.24911 2.91063 2.91068L4.042 4.04205C4.35674 3.72731 4.79669 3.52507 5.61569 3.41496C6.45771 3.30175 7.5727 3.30005 9.16667 3.30005V1.70005Z" fill="#818CF8"></path>
                                                          </svg>
                                                      </button>
                                                  </div>
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
                <div class="mb-4">
                    <span class="font-bold text-gray-700 dark:text-gray-300">Select Size:</span>
                    <div class="flex items-center mt-2">
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">S</button>
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">M</button>
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">L</button>
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">XL</button>
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">XXL</button>
                    </div>
                </div>
                <div>
                    <span class="font-bold text-gray-700 dark:text-gray-300">Product Description:</span>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut
                        lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque
                        ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non
                        sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="flex justify-center w-full">
  <div class="max-w-4xl relative flex flex-col min-w-0 break-words bg-white w-full  my-6 shadow-xl ">
    <a href={{route("home")}} class="bg-gray-100 sticky w-12 h-12 inline-flex items-center justify-center" style="z-index:1000"><i class="fa fa-arrow-left"></i></a>
    <div class="p-6">
      <div class="grid md:grid-cols-5 mt-5">
        <div
            class="col-span-3 px-8 bg-white rounded-xl space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
            <img class="block mx-auto h-24 w-24 object-cover rounded-full sm:mx-0 sm:shrink-0" src={{asset("assets/uploads/".$article->photo)}} alt="Woman's Face">
            <div class="text-center space-y-2 sm:text-left">
                <div class="space-y-0.5">
                    <p class="text-lg text-black font-semibold">
                        {{$article->titre}}
                    </p>
                    <p class="text-slate-500 font-medium">
                        {{$article->type->type}}
                    </p>
                </div>
                <div class="flex items-center w-[120px]">
                  <button type="button" class="flex items-center w-full px-4 py-2 text-base font-medium text-black bg-white border-t border-b border-l rounded-l-md hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 1792 1792">
                          <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                          </path>
                      </svg>
                     457 
                  </button>
                  <button type="button" class="w-full px-4 py-2 text-base font-medium text-black bg-white border rounded-r-md hover:bg-gray-100">
                      Sponsoriser
                  </button>
              </div>
              </div>
        </div>
      </div>@if($article->type_id==1)
      <div class="w-full">
        <div class="mt-3 text-center">
          <div class="">
            <nav class="flex gap-x-3" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
              <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-gray-600 hs-tab-active:text-gray-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="tabs-with-icons-item-1" aria-selected="true" data-hs-tab="#tabs-with-icons-1" aria-controls="tabs-with-icons-1" role="tab">
                <i class="fa fa-road"></i>
                Trajets
              </button>
              <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-gray-600 hs-tab-active:text-gray-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="tabs-with-icons-item-2" aria-selected="false" data-hs-tab="#tabs-with-icons-2" aria-controls="tabs-with-icons-2" role="tab">
                <i class="fa fa-parking"></i>
                Stationnements
              </button>
            </nav>
          </div>
          
          <div class="mt-1">
            <div id="tabs-with-icons-1" role="tabpanel" aria-labelledby="tabs-with-icons-item-1">
              <div class="flex flex-col">
                  <div class=" overflow-x-auto">
                    <div class="min-w-full inline-block align-middle">
                        <div class="overflow-hidden ">
                            <table class=" min-w-full rounded-xl px-2 text-center">
                                <thead class="text-center">
                                    <tr class="bg-gray-50">
                                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Lieu_1</th>
                                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Lieu_2</th>
                                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Frais</th>
                                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Action</th>
                                    </tr>
  
                                </thead>
                                <tbody class="divide-y divide-gray-300 ">
                                  @foreach($voyage as $item)
                                    <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                        <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{$item->point_A}}</td>
                                        <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->point_B}}</td>
                                        <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->tarif_1}} MGA</td>
                                        <td class=" p-2 ">
                                            <div class="flex items-center justify-center gap-1">
                                              <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-focus-management-modal" data-hs-overlay="#hs-focus-management-modal">
                                               <i class="fa fa-book-open"></i>
                                              </button>
                                              
                                              <div id="hs-focus-management-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-focus-management-modal-label">
                                                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                                  <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                    
                                                    <div class="p-4 overflow-y-auto">
                                                      <div class="flex items-center justify-center p-4 text-start">
                                                        <!-- Author: FormBold Team -->
                                                        <div class="mx-auto w-full max-w-[550px] bg-white">
                                                          <form method="POST" action="{{ route('reserver') }}">
                                                            @csrf
                                                            <div class="mb-5 hidden">
                                                                <label for="article_id" class="mb-3 block text-base font-medium text-[#07074D]">Article</label>
                                                                <input type="number" value={{$item->id}}>
                                                                @error('article_id')
                                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-5">
                                                                <label for="numero_id" class="mb-3 block text-base font-medium text-[#07074D]">Numéro</label>
                                                                <select name="numero_id" id="numero_id" class="w-full rounded-md border bg-white py-3 px-6 text-base font-medium text-[#6B7280]">
                                                                    @foreach($numeros as $numero)
                                                                        <option value="{{ $numero->id }}">{{ $numero->station }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('numero_id')
                                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        
                                                            <div class="mb-5">
                                                                <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">Nombre des passagers</label>
                                                                <input type="number" name="guest" id="guest" placeholder="5" min="0"
                                                                    class="w-full rounded-md border bg-white py-3 px-6 text-base font-medium text-[#6B7280]" />
                                                                @error('guest')
                                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        
                                                            <div class="mb-5">
                                                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">Date</label>
                                                                <input type="date" name="date" id="date" 
                                                                    class="w-full rounded-md border bg-white py-3 px-6 text-base font-medium text-[#6B7280]" />
                                                                @error('date')
                                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        
                                                            <div class="mb-5">
                                                                <label for="position" class="mb-3 block text-base font-medium text-[#07074D]">Position</label>
                                                                <input type="text" name="position" id="position" 
                                                                    class="w-full rounded-md border bg-white py-3 px-6 text-base font-medium text-[#6B7280]" />
                                                                @error('position')
                                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        
                                                            <button type="submit" class="w-full h-10 flex items-center justify-center text-white bg-slate-800">Reserver</button>
                                                        </form>
                                                        
                                                        </div>
                                                    </div></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
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
            <div id="tabs-with-icons-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-2" style="z-index: 1000">
              <div class="flex flex-col">
                <div class=" overflow-x-auto">
                  <div class="min-w-full inline-block align-middle">
                      <div class="overflow-hidden ">
                          <table class=" min-w-full rounded-xl px-2 text-center">
                              <thead class="text-center">
                                  <tr class="bg-gray-50">
                                      <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Stationement</th>
                                      <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Téléphone</th>                            
                                  </tr>
                              </thead>
                              <tbody class="divide-y divide-gray-300 ">
                                @foreach($numeros as $item)
                                  <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                      <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{$item->station}}</td>
                                      <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->numero}}</td>
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
        </div>
      </div>@elseif($article->type_id==2)
      <div class="min-w-full inline-block align-middle">
        <div class="overflow-hidden ">
            <table class=" min-w-full rounded-xl px-2 text-center">
                <thead class="text-center">
                    <tr class="bg-gray-50">
                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Voiture</th>
                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Prix par jour</th>
                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Action</th>
                    </tr>

                </thead>
                <tbody class="divide-y divide-gray-300 ">
                  @foreach($location as $item)
                    <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                        <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{$item->voiture}}</td>
                        <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->prix_1}}</td>
                        <td class=" p-2 ">
                            <div class="flex items-center justify-center gap-1">
                              <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-focus-management-modal" data-hs-overlay="#hs-focus-management-modal">
                               <i class="fa fa-book-open"></i>
                              </button>
                              
                              <div id="hs-focus-management-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-focus-management-modal-label">
                                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                  <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                    
                                    <div class="p-4 overflow-y-auto">
                                      <div class="flex items-center justify-center p-4 text-start">
                                        <!-- Author: FormBold Team -->
                                        <div class="mx-auto w-full max-w-[550px] bg-white">
                                          <form method="POST" action="{{ route('reserver') }}">
                                            @csrf
                                            <div class="mb-5 hidden">
                                                <label for="article_id" class="mb-3 block text-base font-medium text-[#07074D]">Article</label>
                                                <input type="number" value={{$item->id}}>
                                                @error('article_id')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5">
                                                <label for="numero_id" class="mb-3 block text-base font-medium text-[#07074D]">Numéro</label>
                                                <select name="numero_id" id="numero_id" class="w-full rounded-md border bg-white py-3 px-6 text-base font-medium text-[#6B7280]">
                                                    @foreach($numeros as $numero)
                                                        <option value="{{ $numero->id }}">{{ $numero->station }}</option>
                                                    @endforeach
                                                </select>
                                                @error('numero_id')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        
                                            <div class="mb-5">
                                                <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">Nombre des passagers</label>
                                                <input type="number" name="guest" id="guest" placeholder="5" min="0"
                                                    class="w-full rounded-md border bg-white py-3 px-6 text-base font-medium text-[#6B7280]" />
                                                @error('guest')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        
                                            <div class="mb-5">
                                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">Date</label>
                                                <input type="date" name="date" id="date" 
                                                    class="w-full rounded-md border bg-white py-3 px-6 text-base font-medium text-[#6B7280]" />
                                                @error('date')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        
                                            <div class="mb-5">
                                                <label for="position" class="mb-3 block text-base font-medium text-[#07074D]">Position</label>
                                                <input type="text" name="position" id="position" 
                                                    class="w-full rounded-md border bg-white py-3 px-6 text-base font-medium text-[#6B7280]" />
                                                @error('position')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        
                                            <button type="submit" class="w-full h-10 flex items-center justify-center text-white bg-slate-800">Reserver</button>
                                        </form>
                                        
                                        </div>
                                    </div></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
      </div>
      @else
      <div class="min-w-full inline-block align-middle">
        <div class="overflow-hidden ">
            <table class=" min-w-full rounded-xl px-2 text-center">
                <thead class="text-center">
                    <tr class="bg-gray-50">
                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">Lieu possible</th>
                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Bureau</th>
                        <th scope="col" class="p-2 text-center text-sm leading-6 font-semibold text-gray-900 capitalize">Numéro Téléphone</th>
                    </tr>

                </thead>
                <tbody class="divide-y divide-gray-300 ">
                  @foreach($colis as $item)
                    <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                        <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{$item->ville}}</td>
                        <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->bureau}}</td>
                        <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->numero}}</td>
                        {{-- <td class="p-2 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{$item->prix_1}}</td> --}}
                        
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
      </div>
    @endif
    </div>
  </div>
</div>
@endsection