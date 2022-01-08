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
    <div class="flex-none">
      Logout
    </div>
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
    <li>Listing</li>
    </ul>
  </div>

  <div class="flex justify-center">
    <div class="w-[74rem] flex gap-4">
      <div class="flex-none bg-white w-[24rem] card self-start rounded-xl">
        <div class="card-body p-6 border-b">
          <h2 class="">Filter your search</h2>
        </div>
        <div class="card-body p-6">
          <form action="" class="mb-6">
            <div class="form-control">
              <label class="cursor-pointer label">
                <span class="label-text text-gray-700">Recent</span>
                <input type="radio" name="opt" checked="checked" class="radio radio-primary" value="">
              </label>
            </div>
            <div class="form-control">
              <label class="cursor-pointer label">
                <span class="label-text text-gray-700">Most Liked</span>
                <input type="radio" name="opt" checked="checked" class="radio radio-primary" value="">
              </label>
            </div>
          </form>
          <button class="btn btn-primary capitalize">Apply</button>
        </div>
      </div>
      <div>
        <div class="form-control mb-4">
          <div class="flex space-x-4">
              <input type="text" placeholder="Enter a keyword to search for mountains" class="input w-full">
              <button class="btn btn-primary w-44 capitalize">Search</button>
          </div>
        </div>
        <div class="flex flex-col gap-4">
          <div class="card card-side bg-white">
            <figure class="p-6 pr-0">
              <img src="../../assets/images/mountain-1.png" alt="A mountain image" class="rounded-xl w-40 h-40">
            </figure>
            <div class="card-body">
              <h2 class="card-title flex justify-between">
                A Pikes Peak Mountain
                <span class="text-sm flex text-gray-300 hover:text-gray-400">
                  20 Likes
                  <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                  </svg>
                </span>
              </h2>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis obcaecati nulla repellendus quis corporis temporibus earum, reprehenderit dolorum voluptate eveniet minus! Minima atque natus itaque suscipit, vitae commodi nostrum exercitationem eos....</p>
              <div class="flex gap-4">
                <div class="flex items-center text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                  80 meter
                </div>
                <div class="flex items-center text-green-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  Safe
                </div>
              </div>
            </div>
          </div>
          <div class="card card-side bg-white">
            <figure class="p-6 pr-0">
              <img src="../../assets/images/mountain-1.png" alt="A mountain image" class="rounded-xl w-40 h-40">
            </figure>
            <div class="card-body">
              <h2 class="card-title flex justify-between">
                A Pikes Peak Mountain
                <span class="text-sm flex text-gray-300 hover:text-gray-400">
                  20 Likes
                  <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                  </svg>
                </span>
              </h2>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis obcaecati nulla repellendus quis corporis temporibus earum, reprehenderit dolorum voluptate eveniet minus! Minima atque natus itaque suscipit, vitae commodi nostrum exercitationem eos....</p>
              <div class="flex gap-4">
                <div class="flex items-center text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                  80 meter
                </div>
                <div class="flex items-center text-green-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  Safe
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
