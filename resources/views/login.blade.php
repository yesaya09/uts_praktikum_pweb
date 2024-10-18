@extends('layouts.layout1')
@section('title', 'login')

@section('konten')
    <div class="min-h-screen flex items-center justify-center bg-amber-700 dark:bg-gray-900">
        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto mt-16">
            <form class="space-y-6" action="/kontak">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">
                    <center>login</center>
                </h5>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="fufufafa@gamilcom" />
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
                    <input placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                </div>
                <div class="flex items-start">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input type="checkbox"
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                        </div>
                        <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                    </div>
                    <a href="#" class="ms-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lupa
                        Password?</a>
                </div>
                <button
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">login
                    </button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Belum punya akun? <a href="/pendaftaran" class="text-blue-700 hover:underline dark:text-blue-500">Buat akun baru
                        </a>
                </div>
            </form>
        </div>
    @endsection
