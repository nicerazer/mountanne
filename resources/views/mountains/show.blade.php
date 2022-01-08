<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-slate-100 min-h-screen">

  <div class="navbar px-16 py-4 bg-white shadow-md z-10 relative">
    <div class="flex-1 hidden lg:flex">
      <span class="text-lg font-bold flex items-center gap-2">
        <svg width="45" height="32" viewBox="0 0 45 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.58849 10.295L0.821426 29.157C0.205237 30.4827 1.17318 32 2.63509 32H42.6451C44.16 32 45.1249 30.3814 44.4045 29.0488L29.6353 1.73066C28.8312 0.243356 26.6589 0.362874 26.0228 1.92941L20.2909 16.0463C19.6654 17.5869 17.5423 17.7358 16.7079 16.2976L13.1321 10.1344C12.3204 8.73541 10.2702 8.82837 9.58849 10.295Z" fill="#CDE9E7"/>
        </svg>
        <span class="text-gray-600">Mountanne</span>
      </span>
    </div>
    @auth
        <div class="flex-none flex gap-16">
            <a href="/mountains/create">
                Add a new mountain
            </a>
            <form action="/logout" method="POST">
                @csrf
                <button>
                    Logged in as {{ auth()->user()->name }}
                </button>
            </form>
        </div>
    @endauth
    @guest
        <div class="flex-none flex gap-8">
            <a href="/login">
                Login
            </a>
            <a href="/register">
                Register
            </a>
        </div>
    @endguest
  </div>
  <div class="mb-8 text-sm breadcrumbs px-16 py-4 bg-white z-0 relative">
    <ul>
    <li>
        <a class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
          Mountains
        </a>
    </li>
    <li>{{ $mountain->name }}</li>
    </ul>
  </div>

    <div class="flex justify-center">
        <div class="w-[74rem] flex flex-col gap-8">
            <div class="bg-white w-full rounded-xl px-12 py-12">
                <div class="flex gap-10 items-start">
                    <img src="https://source.unsplash.com/random/300x300" alt="" class="rounded-2xl">
                    <div class="flex flex-col gap-8 w-full">
                        <div class="flex justify-between w-full">
                            <h1 class="text-4xl"><a href="/mountains/{{ $mountain->id }}/edit">{{ $mountain->name }}</a></h1>
                            <div class="text-gray-400 hover:text-red-500 flex items-center gap-2 transition duration-150 ease-out hover:ease-in cursor-pointer">
                                20 Likes
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                            {{ $mountain->altitude }}
                            </div>
                            <div class="flex items-center text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Safe
                            </div>
                        </div>
                        <div>
                            {{ $mountain->description }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white w-full rounded-xl px-12 py-12">
                <div class="form-control mb-8">
                    <div class="flex space-x-4">
                        <input type="text" placeholder="Comment this mountain" class="input input-bordered w-full">
                        <button class="btn btn-primary w-44 capitalize">Post</button>
                    </div>
                </div>
                <div class="flex w-full justify-between mb-8">
                    <span class="text-3xl">Comments</span>
                    <span class="text-sm text-gray-500">20 Comments</span>
                </div>
                <div class="flex flex-col gap-8">
                    @foreach($mountain->comments as $comment)
                        <div class="flex gap-5">
                            <div class="flex-none">
                                <img src="https://i.pravatar.cc/50" alt="" class="rounded-full">
                            </div>
                            <div>
                                <div class="flex justify-between">
                                    <p class="mb-2 text-gray-600 font-bold">{{ $comment->author->name }}</p>
                                    <form action="/" method="DELETE">
                                        <button class="text-red-300 hover:text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                <p class="">
                                    {{ $comment->body }}
                                </p>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
