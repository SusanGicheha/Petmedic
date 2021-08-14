<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Create new Medical Record')}}

</h2>

</x-slot>

<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
 <div class="mt-5 md:mt-0 md:col-span-2">

     <form action="{{ route('medicalrecords.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf   

    

<div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>

                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"  value="{{ old('name') }}" />
                            <label for="user_id" class="block font-medium text-sm text-gray-700">User Id</label>
                            <input type="number" name="user_id" id="user_id" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"   />
                        

            <label for= "year" >Year</label>
            <select name="year" id="year" placeholder="select a year" class="form-select block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-2 px-2 rounded form-control" required>
            <option value="">Select a year</option>
                            <option value="2019" >2019</option>
                            <option value="2020" >2020</option>
                            <option value="2021" >2021</option>
                            <option value="2022" >2022</option>
                        </select>

            
            <br>
            <br>
            <label for="file" class="block font-medium text-sm text-gray-700">Medical Record</label>
            <input type="file" name="file" id="file">
                          
   
</div>


               
</div>
</div>


        




        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
           <x-jet-button type="submit">Upload medical Record</x-jet-button> 
         </div>

</form>
</div>
</div>
</x-app-layout>
