<x-app-layout>
    <x-slot name="header" >
        <div class="font-semibold text-s text-gray-800 leading-tight ">
            <a class="link text-blue-800 " href="{{ route('medicalrecords.index') }}">Medical Records > </a>View</span>
        </div>
    </x-slot>
        <div class="container-fluid">
        <iframe src ="{{ asset('/storage/medicalrecords/1629184893.pdf') }}" class="responsive-iframe" width="1600px" height="600px"></iframe>
        </div>
    
    
</x-app-layout>