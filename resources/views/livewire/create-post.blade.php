<div>
    <form action="" class="mt-5 ml-4">
        <label for="body">Input Post</label>
        <br>
        {{ $body }}
        <textarea wire:model="body" placeholder="Masukkan Post" id="body" cols="30" rows="10"
            class="shadow appearance-none border rounded w-full h-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2">
     </textarea>

        <div class="flex justify-end mb-2">
            <button wire:click="createPost"
                class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded-md">Post</button>
        </div>
    </form>
</div>
