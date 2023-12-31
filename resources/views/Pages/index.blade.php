@extends('layouts.index')
@section('kontent')
    <h1 class="text-3xl font-bold mt-5 container mx-5">
        Popular Anime
    </h1>
    <div class="grid xl:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-4 mt-5 mx-5">
            
        {{-- <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$items[0]}}</span> --}}
        @foreach ($result as $item)
            <div class="max-w-xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">

                    <img class=" xl:w-96 h-96 md:w-70 h-70 w-30 h-30 rounded-t-lg object-cover"
                        src={{ $item['images']['jpg']['large_image_url'] }} alt="" />
                </a>
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item['title'] }}
                    </h5>
                    <a href="/show/{{ $item['mal_id'] }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
