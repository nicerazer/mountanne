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
    <li>Add a Mountain</li>
    </ul>
  </div>

  <div class="flex justify-center">
    <div class="w-[74rem] flex justify-center bg-white card">
        <div class="card-body">
          <h1 class="text-2xl mb-4">Edit {{ $mountain->name }}</h1>

          <form action="/" method="">
            <div class="flex items-end gap-16">
              <div class="flex-1">
                <!-- Name Input -->
                <div class="form-control">
                  <label class="label">
                    <span class="label-text">Mountain Name</span>
                  </label>
                  <input type="text" placeholder="Enter the mountain name" class="input input-bordered">
                  <label class="label">
                    <span class="label-text-alt">Please enter the mountain name</span>
                  </label>
                </div>

                <!-- Description TextArea -->
                <div class="form-control">
                  <label class="label">
                    <span class="label-text">Description</span>
                  </label>
                  <textarea placeholder="Enter the mountain name" class="textarea h-24 textarea-bordered"></textarea>
                  <label class="label">
                    <span class="label-text-alt">Please enter the mountain description</span>
                  </label>
                </div>

                <!-- Altitude Input -->
                <div class="form-control">
                  <label class="label">
                    <span class="label-text">Altitude</span>
                  </label>
                  <label class="input-group">
                    <input type="number" value="500" min="1" class="input input-bordered">
                    <span>meters (height)</span>
                  </label>
                  <label class="label">
                    <span class="label-text-alt">Please enter the mountain's altitude</span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary capitalize mt-4">Publish</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</body>
</html>
