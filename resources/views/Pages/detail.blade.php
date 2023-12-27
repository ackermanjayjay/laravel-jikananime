@extends('layouts.index')
@section('kontent')
    <h1 class="text-3xl font-bold mt-5 container mx-5">
        Detail Anime
    </h1>

    <div class="flex md:flex-nowrap flex-wrap justify-start mx-5 mt-5">
        <div
            class="max-w-sm flex md:flex-wrap flex-wrap items-center rounded-lg  md:max-w-xl  ">
            <img class="
             shadow  hover:scale-110 transition duration-500 cursor-pointer object-cover
             "
             style="width: 50cm" height="50cm"
                src={{ $result['images']['jpg']['image_url'] }} alt="">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 mt-5 mx-3">
                        <p>Score: {{$result['score']}}</p>
                    </span>
                    <span class="bg-green-100 text-dark-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-dark-800 mt-5 mx-3">
                        <p>Rank: {{$result['rank']}}</p>
                    </span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded mt-5 mx-3">
                        <p>{{$result['year']}}</p>
                    </span>
        </div>
        <div class="justify-content-center mx-5">
            <p class="text-justify">{{ $synopsis }}</p>
        </div>
        
        {{-- <div class="flex flex-col justify-content-between p-4 leading-normal items-center">
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
            </div> --}}

    </div>
    
@endsection
