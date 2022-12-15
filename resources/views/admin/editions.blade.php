@extends('admin/a-nav')
@section('admin/a-content')



    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <script>
        function initEditor(id) {
            ClassicEditor
                .create(document.querySelector('#editor-' + id), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
                    heading: {
                        options: [
                            {model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph'},
                            {model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1'},
                            {model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2'},
                            {model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3'},
                            {model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4'}
                        ]
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>

    <script>
        function remove(id) {
            document.getElementById('remove-' + id).value = "deleted";
        }

        function replace(id) {
            document.getElementById('remove-' + id).value = "home_actu";
        }
    </script>

    {{--  Home  --}}
    <div class="grid grid-cols-3 gap-4 p-4 col-sp">
        <form action="{{ route('admin.update') }}" method="POST" class="col-start-2 col-span-1 bg-neutral-100">
            @csrf
            <div class="flex flex-col rounded p-3 border border-neutral-300 shadow-xs">
                <input name="id" hidden value="{{ $editions[0]->id }}">

                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Identifieur</label>
                <input name="identifier" value="{{ $editions[0]->identifier }}" type="text" id="small-input"
                       class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Contenu</label>
                <textarea name="content_1" id="editor-{{ $editions[0]->id }}" rows="3"
                          class="editor block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Leave a comment...">{{ $editions[0]->content_1 }}</textarea>
                <div class="flex justify-center mt-4">
                    <button type="submit"
                            class="py-2 px-3 text-xs font-medium text-center w-1/3 text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Enregistrer
                    </button>
                </div>
            </div>
        </form>
        <script>
            initEditor({!! $editions[0]->id !!})
        </script>
    </div>

    {{--  Edito  --}}
    <div class="grid grid-cols-3 gap-4 p-4">
        <form action="{{ route('admin.update') }}" method="POST" class="bg-neutral-100">
            @csrf
            <div class="flex flex-col rounded p-3 border border-neutral-300 shadow-xs">
                <input name="id" hidden value="{{ $editions[1]->id }}">

                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Identifieur</label>
                <input name="identifier" value="{{ $editions[1]->identifier }}" type="text" id="small-input"
                       class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Contenu</label>
                <textarea name="content_1" id="editor-{{ $editions[1]->id }}" rows="3"
                          class="editor block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Leave a comment...">{{ $editions[1]->content_1 }}</textarea>
                <div class="flex justify-center mt-4">
                    <button type="submit"
                            class="py-2 px-3 text-xs font-medium text-center w-1/3 text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Enregistrer
                    </button>
                </div>
            </div>
        </form>
        <script>
            initEditor({!! $editions[1]->id !!})
        </script>
    </div>

    {{--  Nos metiers  --}}
    <div class="grid grid-cols-3 gap-4 p-4">
        <form action="{{ route('admin.update') }}" method="POST" class="bg-neutral-100">
            @csrf
            <div class="flex flex-col rounded p-3 border border-neutral-300 shadow-xs">
                <input name="id" hidden value="{{ $editions[2]->id }}">

                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Identifieur</label>
                <input name="identifier" value="{{ $editions[2]->identifier }}" type="text" id="small-input"
                       class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Contenu</label>
                <textarea name="content_1" id="editor-{{ $editions[2]->id }}" rows="3"
                          class="editor block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Leave a comment...">{{ $editions[2]->content_1 }}</textarea>
                <div class="flex justify-center mt-4">
                    <button type="submit"
                            class="py-2 px-3 text-xs font-medium text-center w-1/3 text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Enregistrer
                    </button>
                </div>
            </div>
        </form>
        <script>
            initEditor({!! $editions[2]->id !!})
        </script>
    </div>

    {{--  Actus  --}}
    <div class="grid grid-cols-3 gap-4 p-4">
        @foreach($editions as $edition)
            @if($edition->identifier == "home_actu")
                <form action="{{ route('admin.update') }}" method="POST" class="bg-neutral-100">
                    @csrf
                    <div class="flex flex-col rounded p-3 border border-neutral-300 shadow-xs">
                        <input name="id" hidden value="{{ $edition->id }}">
                        <label for="small-input"
                               class="block mb-2 text-sm font-medium text-gray-900">Identifieur</label>
                        <input name="identifier" value="{{ $edition->identifier }}" type="text"
                               id="remove-{{ $edition->id }}"
                               class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Contenu</label>
                        <textarea name="content_1" id="editor-{{ $edition->id }}" rows="3"
                                  class="editor block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                  placeholder="Leave a comment...">{{ $edition->content_1 }}</textarea>
                        <div class="flex justify-center mt-4 gap-8">
                            <button type="submit"
                                    class="py-2 px-3 text-xs font-medium text-center w-1/3 text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Enregistrer
                            </button>

                            <button onclick="validateDelete()"
                                class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button">
                                Supprimer
                            </button>

                            <button class="choice">Oui</button>
                            <button class="choice">Non</button>

                        </div>
                    </div>
                </form>
                <script>
                    initEditor({!! $edition->id !!})
                </script>
            @endif
        @endforeach
    </div>

    <script>
        function validateDelete() {
            console.log(document.getElementsByClassName('choice'))
            document.getElementById('choice').className = 'invisible';
        }
    </script>
@stop
