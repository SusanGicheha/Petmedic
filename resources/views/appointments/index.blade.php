<link rel="stylesheet" type="text/css" href="tables.css">
  <<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Appointments')}}

</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   
    <a href="{{ route('appointments.create') }}" class="btn btn-info">Add new appointment</a>

   <!-- component -->
<div class="w-2/3 mx-auto">
  <div class="bg-white shadow-md rounded my-6">
    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
      <thead>
        <tr>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Pet Name</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Phone Number</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Email</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Date of Appointment</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Time Of Appointment</th>
          
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover:bg-grey-lighter">
          <td class="py-4 px-6 border-b border-grey-light"></td>
          <td class="py-4 px-6 border-b border-grey-light"></td>
        <td class="py-4 px-6 border-b border-grey-light"></td>
           <td class="py-4 px-6 border-b border-grey-light"></td>
           <td class="py-4 px-6 border-b border-grey-light"></td>
           <td>
            <a href="{{ route('appointments.edit', $appointment->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark btn btn-info">Edit</a>
            <a href="{{ route('appointments.show', $appointment->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark btn btn-primary">View</a>
            <a href="{{ route('appointments.delete', $appointment->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark btn btn-danger">Delete</a>
       
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


</x-app-layout>