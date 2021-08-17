<link rel="stylesheet" type="text/css" href="tables.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Medical Records')}}

</h2>
</x-slot>
@role('administrator')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   
    <a href="{{ route('medicalrecords.create') }}" class="btn btn-outline-primary">Add a medical Record</a>
@endrole
   <!-- component -->
<div class="w-1/3 mx-auto mt-1">
  <div class="bg-white shadow-md rounded my-2">
    <table class="text-center ml-0 w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
      <thead>
        <tr>
          @role('administrator')
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID </th>
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">UserId</th>
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
        @endrole
          @role('user')
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Year</th>
        @endrole
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"></th>
    
      </thead>
      <tbody>
        
  
      @if($medicalrecords->count() > 0)
        @foreach($medicalrecords as $record)
        <tr class="hover:bg-grey-lighter">
          @role('administrator')
          <td class="py-4 px-6 border-b border-grey-light">{{$record->id}}</td>
          <td class="py-4 px-6 border-b border-grey-light">{{$record->user_id}}</td>
        <td class="py-4 px-6 border-b border-grey-light">{{$record->name}}</td>
        @endrole
        <td class="py-4 px-6 border-b border-grey-light">{{$record->year}}</td>

       <td> <a href=" {{ route('medicalrecords.show', $record->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2  btn btn-outline-primary btn-sm">View</a>
                  

       
        @role('administrator')
           <td class="py-4 px-6 border-b border-grey-light">

            <a href="{{ route ('medicalrecords.edit', $record->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2  btn btn-outline-primary btn-sm">Edit</a>

            <form class="inline-block" action="{{ route('medicalrecords.destroy', $record->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
              <input type="hidden" class="hidden" name="_method" value="DELETE">
              <input type="hidden" class="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2 btn btn-outline-danger btn-sm" value="Delete">
              </form>


          </td>
          @endrole
        </tr>
        @endforeach

        @else
        <tr class="hover:bg-grey-lighter">
          <td class="py-4 px-6 border-b border-grey-light">You have no medical records available</td>
         
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