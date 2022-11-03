@extends('layout')
@section('title', 'Get a Quote')
@section('content')

    {{--    <div class="container mx-auto px-6 flex flex-col justify-between items-center relative py-4">--}}
    <div class="px-6 py-12 h-full w-full">
        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
            <div class="md:w-8/12 lg:w-5/12">
                <form action="{{route('post-quote') }}" method="post">
                {{ csrf_field() }}
                <!-- Email input -->
                    <div class="mb-6">
                        <input
                            type="text"
                            name="name"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Name"
                        />
                    </div>

                    <!-- Password input -->
                    <div class="mb-6">
                        <input
                            name="email"
                            type="email"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Email"
                        />
                    </div>
                    <div class="mb-6">
                        <textarea name="message"
                                  placeholder="message"
                                  class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                  cols="50"></textarea>
                    </div>
                    <!-- Submit button -->
                    <button
                        type="submit"
                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                    >
                        Get a Quote
                    </button>
                </form>
            </div>
        </div>
        {{--    </div>--}}
        @endsection

        @section('scripts')
            @if(session()->has('success'))
                <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: '{{ session('success') }}',
                        showConfirmButton: false,
                        timer: 2000
                    });
                </script>
    @endif
@endsection
