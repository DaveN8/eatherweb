@extends('layouts.app')
@section('main_content')
    @auth
        @if (Auth::check() && Auth::user()->status == 'admin')
            <div class="overflow-x-auto relative rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Id
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Comment
                            </th>
                            <th scope="col" class="py-3 px-6">
                                User Id
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Product Id
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pentol as $use)
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $use['id'] }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $use['comment'] }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $use['user_id'] }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $use['product_id'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @elseif(Auth::check() && Auth::user()->status == 'member')
            @php
                redirect('/');
            @endphp
        @endif
    @endauth
    @guest
        @php
            redirect('/');
        @endphp
    @endguest
@endsection
