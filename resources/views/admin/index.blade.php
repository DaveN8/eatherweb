<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

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
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Email
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Password
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pentol as $use)
                            @if ($use['status'] == 'member')
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $use['id'] }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $use['name'] }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $use['email'] }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $use['password'] }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $use['status'] }}
                                    </td>
                                </tr>
                            @endif
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
