<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <title>Panel administratif</title>
</head>
<body class="bg-neutral-200">
<div class="bg-neutral-50 w-screen py-4 text-center border-b border-neutral-300 font-semibold text-lg">Panel
    administratif
</div>
<div class="bg-neutral-100 w-screen py-2 flex justify-start gap-8 pl-32 border-b border-neutral-300">
    <a href="{{route('admin')}}" class="hover:underline">Accueil admin</a>
    <a href="{{route('a-posts')}}" class="hover:underline">Posts</a>
    <a href="{{route('a-users')}}" class="hover:underline">Utilisateurs</a>
    <a href="{{route('home')}}" class="hover:underline">Retour au site</a>
</div>

@section('admin/a-content')
@show

<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>
</html>
