@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">

                    Posts
                </header>

                <div class="w-full p-6">

                    @foreach($posts as $p)
                        <div class="container container max-w-full m-auto flex flex-wrap flex-col md:flex-row items-center justify-start">
                            <div class="w-full lg:w-1/2 p-3">
                                <div class="flex flex-col lg:flex-row rounded overflow-hidden h-auto lg:h-32 border shadow shadow-lg">
                                    <div  class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between">
                                        <a href="{{ $p -> path}}" class="text-center text-black font-bold text-xl mb-2">
                                            {{ $p -> title }}
                                        </a>
                                        <p class="text-grey-darker text-base">{{ $p -> message }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection


