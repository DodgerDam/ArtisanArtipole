@extends('admin/a-nav')
@section('admin/a-content')

    <div class="grid grid-cols-3 gap-4 p-4">
        @foreach($posts as $post)
            <form>
                <div class="flex flex-col rounded p-3 border border-neutral-300 shadow-xs">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Nom</label>
                    <input disabled value="{{ $post->edition_name }}" type="text" id="small-input"
                           class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500">

                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Résumé</label>
                    <input value="{{ $post->summary }}" type="text" id="base-input"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Contenu 1</label>
                    <textarea id="message" rows="3"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Leave a comment...">{{ $post->content_1 }}</textarea>

                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Contenu 2</label>
                    <textarea id="message" rows="3"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Leave a comment...">{{ $post->content_2 }}</textarea>

                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Contenu 3</label>
                    <textarea id="message" rows="3"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Leave a comment...">{{ $post->content_3 }}</textarea>
                    <div class="flex justify-center mt-4">
                    <button type="submit" class="py-2 px-3 text-xs font-medium text-center w-1/3 text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Enregistrer</button>
                    </div>
                </div>

            </form>
        @endforeach
    </div>
@stop
