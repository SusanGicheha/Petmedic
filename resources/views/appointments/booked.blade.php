<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Booked Appointment 
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded px-8 flex flex-col">
                <section class=" text-gray-700 body-font">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-8">
                     
                    </h2>
                    <div class="container px-5 py-8 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Name</h2>
                                    <p class="leading-relaxed text-base">{{ $appointment->name }} {{$user->name}}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Date and Time
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{$appointment->date_time }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Phone Number</h2>
                                    <p class="leading-relaxed text-base">{{ $appointment->phone_number}}
                                    </p>
                                </div>
                            </div>
                       
                        </div>

                    


                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout>