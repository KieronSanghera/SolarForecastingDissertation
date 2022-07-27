<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Solar Forecasting</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
</head>

<body class="bg-neutral-100 text-black">
  <header>
    <div class="fixed bg-neutral-200 top-0 left-0 right-0 z-50">
      <nav>
        <div class="container mx-auto px-6 py-4 flex justify-between items-center pt-10">
          <a class="font-bold text-2xl lg:text-4xl" href=" <?php echo e(route('index.show')); ?> ">
            Solar Forecasts
          </a>
          <div class="block lg:hidden">
            <button onclick=""
              class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none mobile-menu-button">
              <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" x-show="!showMenu">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>
            </button>

            <div class="hidden border-4 border-neutral-400 bg-neutral-200 fixed mobile-menu top-40 transform -translate-x-1/2 -translate-y-1/2 rounded">
              <ul class="">
                <li class="active"><a href="<?php echo e(route('index.show')); ?>" class="block text-sm px-2 py-4 hover:bg-neutral-400">Home</a></li>
                <li><a href="<?php echo e(route('about.show')); ?>" class="block text-sm px-2 py-4 hover:bg-neutral-400 transition duration-300">About</a></li>
                <li><a href=" <?php echo e(route('forecast.show')); ?> " class="block text-sm px-2 py-4 hover:bg-neutral-400 transition duration-300">Forecasts</a></li>
              </ul>
            </div>
            <script>
              const btn = document.querySelector("button.mobile-menu-button");
              const menu = document.querySelector(".mobile-menu");
      
              btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
              });
            </script>


          </div>
          <div class="hidden lg:block">
            <ul class="inline-flex">
              <li><a class="px-4 font-bold" href="<?php echo e(route('index.show')); ?>">Home</a></li>
              <li><a class="px-4 hover:text-gray-800" href="<?php echo e(route('about.show')); ?>">About</a></li>
              <li><a class="px-4 hover:text-gray-800" href=" <?php echo e(route('forecast.show')); ?> ">Forecasts</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <section class="relative min-h-screen flex items-center">
      <div class="flex flex-row flex-wrap flex-grow mt-2">
        <div class="container w-full mx-auto">
          <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <?php echo $__env->yieldContent('page-content'); ?>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="bg-neutral-200">
    <div class="container mx-auto px-6 pt-10 pb-6">
      <div class="flex flex-wrap">
        <div class="w-full md:w-1/4 text-center md:text-left">
          <h5 class="uppercase mb-6 text-slate-800 font-bold">Links</h5>
          <ul class="mb-4">
            <li class="mt-2">
              <a href="<?php echo e(route('faq.show')); ?>" class="hover:underline text-gray-600 hover:text-orange-500">FAQ</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Help</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Support</a>
            </li>
          </ul>
        </div>
        <div class="w-full md:w-1/4 text-center md:text-left">
          <h5 class="uppercase mb-6 text-slate-800 font-bold">Legal</h5>
          <ul class="mb-4">
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Terms</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Privacy</a>
            </li>
          </ul>
        </div>
        <div class="w-full md:w-1/4 text-center md:text-left">
          <h5 class="uppercase mb-6 text-slate-800 font-bold">Social</h5>
          <ul class="mb-4">
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Facebook</a>
            </li>
            <li class="mt-2">
              <a href="https://www.linkedin.com/in/kieron-sanghera-1755b4231/"
                class="hover:underline text-gray-600 hover:text-orange-500">Linkedin</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Twitter</a>
            </li>
          </ul>
        </div>
        <div class="w-full md:w-1/4 text-center md:text-left">
          <h5 class="uppercase mb-6 text-slate-800 font-bold">Company</h5>
          <ul class="mb-4">
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Official Blog</a>
            </li>
            <li class="mt-2">
              <a href="<?php echo e(route('about.show')); ?>" class="hover:underline text-gray-600 hover:text-orange-500">About Us</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>

</html><?php /**PATH /var/www/html/resources/views/layouts/default.blade.php ENDPATH**/ ?>