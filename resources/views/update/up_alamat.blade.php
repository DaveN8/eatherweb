@extends('layout.main_layout')

@section('main_content')
<form action="">
    <div class="p-12">
        <div class="mb-6">
            <label for="label" class="block mb-2 text-sm font-medium text-gray-900 ">Label</label>
            <input type="text" id="label" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Label" required>
        </div>

        <div class="mb-6">
            <label for="penerima" class="block mb-2 text-sm font-medium text-gray-900 ">Penerima</label>
            <input type="text" id="penerima" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penerima" required>
        </div>

        <div class="mb-6">
            <div class="relative z-0 mb-6 w-full group">
                <label for="floating_phone" class="block mb-2 text-sm font-medium text-gray-900 ">Phone number (123-456-7890)</label>
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Phone number" required />
            </div>
        </div>

        <div class="mb-6">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
            <input type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penerima" required>
        </div>

        <div class="mb-6">
            <label for="kecamatan" class="block mb-2 text-sm font-medium text-gray-900 ">kecamatan</label>
            <input type="text" id="kecamatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penerima" required>
        </div>

        <div class="mb-6">
            <label for="kota" class="block mb-2 text-sm font-medium text-gray-900 ">Kota</label>
            <input type="text" id="kota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penerima" required>
        </div>

        <div class="mb-6">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi Alamat Lengkap</label>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Deskripsi Alamat Lengkap..."></textarea>
        </div>

        <div class="mb-6">
            <label for="pos" class="block mb-2 text-sm font-medium text-gray-900 ">Kode Pos</label>
            <input type="text" id="pos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kode Pos" required>
        </div>

        <div class="mb-6">
            <a href="#" type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</a>
        </div>
    </div>
</form>
@endsection
