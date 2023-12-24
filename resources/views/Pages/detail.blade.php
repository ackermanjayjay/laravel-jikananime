@extends('layouts.index')
@section('kontent')
    <h1 class="text-3xl font-bold mt-5 container mx-5">
        Detail Anime
    </h1>
        <div class="flex justify-center">
        <div 
            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src={{ $result['images']['jpg']['image_url'] }} alt="">
            <div class="flex flex-col justify-content-between p-4 leading-normal items-center">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$result['title']}}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{$synopsis}}</p>
                <div class="flex justfiy-content-center">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">
                        <p>Score: {{$result['score']}}</p>
                    </span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-blue-800 ms-3">
                        <p>Rank: {{$result['rank']}}</p>
                    </span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded ms-3">
                        <p>{{$result['year']}}</p>
                    </span>
                </div>
            </div>
        </div>

    </div>
@endsection
