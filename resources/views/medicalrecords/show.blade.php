<link rel="stylesheet" type="text/css" href="tables.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Medical Records')}}

</h2>
</x-slot>


   <!-- component -->
<div class="w-2/3 mx-auto mt-1">
  <div class="bg-white shadow-md rounded my-2">
    <table class="text-center ml-0 w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
      <thead>
        <tr>

          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
          
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">User ID</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Record ID</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Year</th>
      
        </tr>
      </thead>
      <tbody>
   
      @if($medicalrecords->count() > 0)
        @foreach($medicalrecords as $record)
        <tr class="hover:bg-grey-lighter">
        
          
        <td class="py-4 px-6 border-b border-grey-light">{{$record->name}}</td>
        <td class="py-4 px-6 border-b border-grey-light text-green-80">{{$record->user_id}}</td>
        <td class="py-4 px-6 border-b border-grey-light text-green-80">{{$record->id}}</td>
        <td class="py-4 px-6 border-b border-grey-light text-green-80">{{$record->year}}</td>
       
           
        </tr>
        @endforeach

        @else
        <tr class="hover:bg-grey-lighter">
          <td class="py-4 px-6 border-b border-grey-light">You have no Medical records set up</td>
         
        </tr>
       @endif
      </tbody>
    </table>
  </div>
</div>


    </div>
</div>
        

</div>
</div>


</x-app-layout>