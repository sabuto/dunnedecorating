@extends('layout')
@section('title', 'Index')
@section('content')
    <div class="container mx-auto px-6 flex flex-col justify-between items-center relative py-4">
        <div class="flex flex-col">
            <img src="{{asset('img/boss.jpg')}}" class="rounded-3xl w-40 mx-auto"/>
            <p class="text-3xl my-6 text-center dark:text-white">
                Stanley Dunne
            </p>
            <div class="flex flex-col">
                <span class="max-w-3xl mx-auto dark:text-white text-gray-800 text-center">
                    Stanley has over 40 years experience as a joiner, painter and decorator. No Job is too small he can refit doors, add new locks, refit doors, assembly of flatpack furniture (fitting available), refit old skirting or fit new skirting, architraves around doors. All indoor decorating, painting and wall papering
                </span>
                <span class="max-w-3xl mx-auto dark:text-white text-gray-800 text-center items-center pt-6">
                    <span class="text-3xl underline">Services we offer</span>
                </span>
                <ul class="max-w-3xl mx-auto dark:text-white text-gray-800 text-center items-center py-3">
                    <li>Refitting of Doors</li>
                    <li>Add new locks</li>
                    <li>Assemble and fit flatpack furniture</li>
                    <li>Refit old or fit new skirting</li>
                    <li>Fit architraves around doors</li>
                    <li>All indoor decorating, including but not limited to painting, wallpapering</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
