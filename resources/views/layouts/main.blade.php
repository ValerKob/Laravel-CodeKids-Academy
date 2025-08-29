<!DOCTYPE html>
<html lang="RU-ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../assets/img/favicon.png" type="image/png" />
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link  rel= "apple-touch-icon"  sizes= "57x57"  href= "./assets/images/favicon/apple-icon-57x57.png" > 
    <link  rel= "apple-touch-icon"  sizes= "60x60"  href= "./assets/images/favicon/apple-icon-60x60.png" > 
    <link  rel= "apple-touch-icon"  sizes= "72x72"  href= "./assets/images/favicon/apple-icon-72x72.png" > 
    <link  rel= "apple-touch-icon"  sizes= "76x76"  href= "./assets/images/favicon/apple-icon-76x76.png" > 
    <link  rel= "apple-touch-icon"  sizes= "114x114"  href= "./assets/images/favicon/apple-icon-114x114.png" > 
    <link  rel= "apple-touch-icon"  sizes= "120x120"  href= "./assets/images/favicon/apple-icon-120x120.png" > 
    <link  rel= "apple-touch-icon"  sizes= "144x144"  href= "./assets/images/favicon/apple-icon-144x144.png" > 
    <link  rel= "apple-touch-icon"  sizes= "152x152"  href= "./assets/images/favicon/apple-icon-152x152.png" > 
    <link  rel= "apple-touch-icon"  sizes= "180x180"  href= "./assets/images/favicon/apple-icon-180x180.png" > 
    <link  rel= "icon"  type= "image/png"  sizes= "192x192"   href= "./assets/images/favicon/android-icon-192x192.png" > 
    <link  rel= "icon"  type= "image/png"  sizes= "32x32"  href= "./assets/images/favicon/favicon-32x32.png" > 
    <link  rel= "icon"  type= "image/png"  sizes= "96x96"  href= "./assets/images/favicon/favicon-96x96.png" > 
    <link  rel= "icon"  type= "image/png"  sizes= "16x16"  href= "./assets/images/favicon/favicon-16x16.png" > 
    <link  rel= "manifest"  href= "./assets/images/favicon/manifest.json" > 
    <meta  name= "msapplication-TileColor"  content= "#ffffff" > 
    <meta  name= "msapplication-TileImage"  content= "./assets/images/favicon/ms-icon-144x144.png" > 
    <meta  name= "theme-color"  content= "#ffffff" >

    <!-- My Style DeepSite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- Style Readdy -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Nunito:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
    />
</head>

<body class="bg-white dark:bg-gray-900 font-sans text-gray-800 dark:text-gray-200">
  <!-- Header -->
  @include('includes.main.header')

  <!-- Main -->
  @yield('content')

  <!-- Fooret -->
  @include('includes.main.footer')


  <!-- Modal -->
  @if(session('success'))
  <div 
      x-data="{ show: true }" 
      x-show="show"
      x-init="setTimeout(() => show = false, 3000)" 
      x-transition:enter="transform ease-out duration-500" 
      x-transition:enter-start="opacity-0 -translate-y-4" 
      x-transition:enter-end="opacity-100 translate-y-0" 
      x-transition:leave="transform ease-in duration-500" 
      x-transition:leave-start="opacity-100 translate-y-0" 
      x-transition:leave-end="opacity-0 -translate-y-4"
      class="fixed top-[75px] right-[200px] bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg z-50"
  >
      {{ session('success') }}
      <button @click="show = false" class="ml-4 font-bold">✕</button>
  </div>
  @endif

  <!-- Scroll -->
  <div class="scroll-up">
    <svg class="scroll-up__svg" viewBox="-2 -2 52 52">
      <path
        class="scroll-up__svg-path"
        d="
                              M24,0
                              a24,24 0 0,1 0,48
                              a24,24 0 0,1 0,-48
                          "
      />
    </svg>
  </div>
  <!-- Scripts JS -->
  <script src="./assets/js/script.js"></script>
  <!-- Alpine JS -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>