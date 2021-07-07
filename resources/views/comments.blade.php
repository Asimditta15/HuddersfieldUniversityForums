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

                <header class="font-bold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{$comments[0] -> title}}
                </header>
                <div class="w-full p-6">
                    @foreach($comments as $c)
                        <div class="container container max-w-full m-auto flex flex-wrap flex-col md:flex-row items-center justify-start">
                            <div class="w-full lg:w-1/2 p-3">
                                <div class="flex flex-col lg:flex-row rounded overflow-hidden h-auto lg:h-32 border shadow shadow-lg">
                                    <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between">
                                        <a class="text-left text-black font-semibold text-xl mb-2">
                                            {{ $c -> name }}
                                        </a>
                                        <p class="text-grey-darker text-base">{{ $c -> message }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <form class="ml-4" method="post" action="{{$comments[0] -> path}}">
                        {{ csrf_field() }}
                        <div class="flex flex-wrap">
                            <div class="w-1/2">
                                <label class="block mb-2 mt-2" for="message">
                                    Comment
                                </label>
                                <input name="memberid" type="hidden" value={{$id = Auth::id()}} />
                                <input name="postsid" type="hidden" value={{$comments[0] -> postsid}} />
                                <input class="block border border-black w-full w-auto h-auto"
                                       type="text" name="message"
                                       autocomplete="off" />
                                <button type="submit" class="mr-2 hover:bg-blue-300 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                                    Submit
                                </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection


