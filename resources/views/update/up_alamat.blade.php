@extends('layouts.app')

@section('main_content')
@auth
    @if (Auth::check() && Auth::user()->status == 'member')
    <form action="{{ route('alamat.update', $address->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="p-12">
            <div class="mb-6">
                <label for="label" class="block mb-2 text-sm font-medium text-gray-900 ">Label</label>
                <input type="text" name="label" value="{{ $address['label'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-sky-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Label" required>
            </div>
    
            <div class="mb-6">
                <label for="penerima" class="block mb-2 text-sm font-medium text-gray-900 ">Penerima</label>
                <input type="text" name="penerima" value="{{ $address['penerima'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-sky-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penerima" required>
            </div>
    
            <div class="mb-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="floating_phone" class="block mb-2 text-sm font-medium text-gray-900 ">Phone number (081123234....)</label>
                    <input type="text" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" name="phone" value="{{ $address['no_hp'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-sky-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Phone number" required />
                </div>
            </div>
    
            <div class="mb-6">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                <input type="text" name="alamat" value="{{ $address['alamat'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-sky-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penerima" required>
            </div>
    
            <div class="mb-6">
                <label for="kecamatan" class="block mb-2 text-sm font-medium text-gray-900 ">kecamatan</label>
                <input type="text" name="kecamatan" value="{{ $address['kecamatan'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-sky-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penerima" required>
            </div>
    
            <div class="mb-6">
                <label for="kota" class="block mb-2 text-sm font-medium text-gray-900 ">Kota</label>
                <input type="text" name="kota" value="{{ $address['kota'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-sky-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penerima" required>
            </div>
    
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi Alamat Lengkap</label>
                <textarea name="deskripsi_alamat" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-sky-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Deskripsi Alamat Lengkap...">{{ $address['deskripsi_alamat'] }}</textarea>
            </div>
    
            <div class="mb-6">
                <label for="pos" class="block mb-2 text-sm font-medium text-gray-900 ">Kode Pos</label>
                <input type="text" name="pos" value="{{ $address['pos'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-sky-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kode Pos" required>
            </div>
    
            <div class="mb-6">
                <button type="submit"
                    class="text-white bg-sky-500 hover:bg-sky-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-sky-500 dark:hover:bg-sky-300 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
    @endif
@endauth
@endsection
