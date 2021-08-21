<link rel="stylesheet" type="text/css" href="tables.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Appointments')}}

</h2>
</x-slot>
@role('user')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   
    <a href="{{ route('appointments.create') }}" class="btn btn-outline-primary">Add new appointment</a>
@endrole
   <!-- component -->
<div class="w-2/3 mx-auto mt-1">
  <div class="bg-white shadow-md rounded my-2">
    <table class="text-center ml-0 w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
      <thead>
        <tr>

          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Attendee</th>
          
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Phone Number</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Date & Time</th>

          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
        </tr>
      </thead>
      <tbody>
       
      @if($appointments->count() > 0)
        @foreach($appointments as $appointment)
    

          <td class="py-4 px-6 border-b border-grey-light">{{$appointment->name}}</td>
         
          <td class="py-4 px-6 border-b border-grey-light">{{$appointment->phone_number}}</td>
          
        <td class="py-4 px-6 border-b border-grey-light">{{$appointment->date_time}}</td>
 
          
           <td class="py-4 px-6 border-b border-grey-light">
           @role('user')
            <a href="{{ route ('appointments.edit', $appointment->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2  btn btn-outline-primary btn-sm">Edit</a>
@endrole


   <form class="inline-block" action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
              <input type="hidden" class="hidden" name="_method" value="DELETE">
              <input type="hidden" class="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2 btn btn-outline-danger btn-sm" value="Delete">
              </form>
       
          </td>
        </tr>
        @endforeach

        @else
        <tr class="hover:bg-grey-lighter">
          <td class="py-4 px-6 border-b border-grey-light">You have no appointments set up</td>
         
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