@extends('admin/a-nav')
@section('admin/a-content')
    <div class="mt-6 grid grid-cols-2 gap-4 mx-4">
        <div>
            <div class="text-neutral-700 font-semibold text-center mb-2">Liste des utilisateurs</div>
            @foreach($users as $user)
                <div class="grid grid-cols-1 mb-2 text-sm">
                    <div class="grid grid-cols-5 items-center bg-neutral-100 px-2 py-0.5 rounded-full">
                        <div
                            class="bg-neutral-300 text-xs border border-neutral-400 flex justify-center items-center rounded-full h-4 w-4">
                            {{ $user->id }}
                        </div>
                        <div class="flex justify-center">{{ $user->name }}</div>
                        <div class="flex justify-center">{{ $user->email }}</div>
                        <div class="flex justify-center">{{ $user->role_name }}</div>
                        <a class="flex justify-end">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            <div class="text-neutral-700 font-semibold text-center mb-2">Liste des rôles</div>
            @foreach($roles as $role)
                <div class="grid grid-cols-1 mb-2 text-sm">
                    <div class="grid grid-cols-4 items-center bg-neutral-100 px-2 py-0.5 rounded-full">
                        <div
                            class="bg-neutral-300 text-xs border border-neutral-400 flex justify-center items-center rounded-full h-4 w-4">
                            {{ $role->id }}
                        </div>
                        <div>{{ $role->name }}</div>
                        <div>{{ $role->display_name }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
