@extends("layouts.layout")
@section("title","kontak")


@section('konten')
   
<div class="relative overflow-x-auto shadow-md sm:rounded-lg my-16 mx-16 mt-32">
    <table class="w-full text-xs text-left rtl:text-right text-blue-100 dark:text-blue-100">
        <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
            <tr>
                <th scope="col" class="px-3 py-2 bg-blue-500">
                    No
                </th>
                <th scope="col" class="px-3 py-2">
                    Nama
                </th>
                <th scope="col" class="px-3 py-2 bg-blue-500">
                    Email
                </th>
                <th scope="col" class="px-3 py-2">
                    No HP
                </th>
                <th scope="col" class="px-3 py-2 bg-blue-500">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kontaks as $kontak)
                <tr class="bg-blue-600 border-b border-blue-400">
                    <th scope="row" class="px-3 py-2 font-medium bg-blue-500 text-blue-50 whitespace-nowrap dark:text-blue-100">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-3 py-2">
                        {{ $kontak['nama'] }}
                    </td>
                    <td class="px-3 py-2 bg-blue-500">
                        {{ $kontak['email'] }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $kontak['no'] }}
                    </td>
                    <td class="px-3 py-2 bg-blue-500">
                        <a href="#" class="font-medium text-white hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection


