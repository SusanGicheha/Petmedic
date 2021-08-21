<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Medical Records') }}&nbsp;&nbsp;
                  
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            @if(session()->has('message'))
                <div class="alert alert-success custom-alert">
                    {{ session()->get('message') }}
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                </div>
            @endif
            <div class="bg-white shadow-md border rounded sm:px-6 lg:px-8 flex flex-col py-8">
                <div><h1 style="font-weight:bold; font-size:x-large; color:#3353a3">Edit Medical Record</h1></div>
                

                <form action="{{ route('medicalrecords.update',['medicalrecord'=>$medicalrecord->id]) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    
                    <div class="form-group">
                    <div class=" form-group row mt-5 ">
                    <div class="form-group  float-left mb-20 mr-2" style="width: 40%">
                        <label for="name">Name</label>
                        <input  type="text" name="name" value="{{$medicalrecord->name}}"class="form-control block  w-full rounded " required />
                        
                    </div>
                    <div class="form-group  float-left mr-2 "style="width: 80%">
                        <x-jet-label for="user_id">User ID</x-jet-label>
                        <x-jet-input  type="number" name="user_id" class="form-control w-full rounded" value="{{$medicalrecord->user_id}}" />
                    </div>
                        <x-jet-label for=" year">Year</x-jet-label>
                        <select name="year" placeholder="Select a year" class="form-select block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-2 px-2 rounded form-control" required >
                            <option value="{{$medicalrecord->year}}">{{$medicalrecord->year}}</option>
                            <option value="2019" >2019</option>
                            <option value="2020" >2020</option>
                            <option value="2021" >2021</option>
                            <option value="2022" >2022</option>
                        </select>
                    </div>
           
                    <div class="mt-10 form-group p-5">
                    <h2 class="place-self-center" style="font-weight: bold; color:#d4a95b "> Medical Record</h2><br>
                           <div class="text-center p-5"><input class="form-control form-control-lg w-full h-full border"style="font-size:large; border-color:#3353a3" id="file" type="file" name="file" /></div>
                    </div><br><br>
                    <div class="container text-right form-group">
                        {{-- <input type="submit"class="button-bg-blue px-5 bg-#3353a3 place-self-center py-2 border rounded transition
                            duration-300 focus:outline-none" value="Update Medical Record"> --}}
                            <a href="{{route('medicalrecords.update',['medicalrecord'=>$medicalrecord->id])}}"onclick="this.closest('form').submit();return false;">Update Medical Record</a>
                    </div>
                </form>
                
                
            </div>
        </div>
    </div>
</x-app-layout>