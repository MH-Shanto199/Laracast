
@auth()
    <form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 p-4
                rounded-xl">
        @csrf
        <header class="flex items-center space-x-3">
            <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}" width="40" height="40"
                 class="rounded-full">
            <h2>Write a comment......</h2>
        </header>

        <div class="mt-2">
            <textarea class="w-full text-xs focus:outline-none border border-gray-300 p-2"
                      name="body"
                      rows="5"
                      placeholder="Quick, thing of something to to say"
            ></textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit"
                    class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
            Post</button>
        </div>
    </form>
@else
    <a href="/register"> <span class="font-bold hover:underline">Register</span> </a>OR<a
        href="/login"> <span
            class="font-bold hover:underline">Login</span> </a>to leave a
    comment...
@endauth
