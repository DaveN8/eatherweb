@extends('layouts.app')

@section('main_content')
<form action="" class="p-12">
    <div class=" mb-6">
        <label for="ingredient" class="block mb-2 text-sm font-medium text-gray-900 ">Ingredients</label>
        <textarea id="ingredient" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Masukan Ingredient Makanan..."></textarea>
    </div>
    <div class="mb-6">
        <a href="#" type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</a>
    </div>
</form>
@endsection
