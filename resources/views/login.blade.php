<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <title>Persuratan BAPENDA | Login</title>
</head>
<body class="w-full h-screen bg-merahNavbar relative flex justify-center items-center">

    <div class="bg-biruFooter absolute h-1/3 w-11/12"></div>
    @if (Session::has('status'))
        <div>
            {{Session::get('message')}}
        </div>
    @endif
    <div class="z-10 h-2/3 w-11/12 flex justify-evenly">
        <div class="bg-white h-full w-5/12 px-10 py-14 rounded-lg">
            <p class="font-inter text-5xl font-bold">LOGIN</p>
            <form class=" mt-14 grid gap-y-14" action="" method="POST">
                @csrf
                <div class="">
                    <input class="border-b-2 border-black h-12 w-full focus:outline-none text-lg" type="text" placeholder="masukkan username" name="namapemakai">
                </div>
                <div>
                    <input class="border-b-2 border-black h-12 w-full focus:outline-none text-lg" type="password" placeholder="masukkan password" name="password">
                </div>
                <div class="flex">
                    <button class="bg-greenButton font-inter px-10 py-3 text-lg text-white rounded-xl" type="submit">Masuk</button>
                </div>
            </form>
        </div>
        <div class="bg-green-400        h-full  w-5/12  "></div>
    </div>
</body>
</html>