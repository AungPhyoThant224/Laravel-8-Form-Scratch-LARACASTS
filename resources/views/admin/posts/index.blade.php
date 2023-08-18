<x-layout>
    <x-setting heading="Dashboard">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody>
                    @foreach($posts as $post)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="text-base font-semibold"><a href="/posts/{{$post->slug}}">{{$post->title}}</a></div>
                            </th>
                            <td class="px-6 py-4">
                                <a href="/admin/posts/{{$post->id}}/edit" class="font-medium text-blue-500 dark:text-blue-500 hover:text-blue-600">Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <form method="POST" action="/admin/posts/{{$post->id}}">
                                    @csrf
                                    @method('DELETE')

                                    <button class="text-xs text-red-500 hover:text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </x-setting>
</x-layout>
