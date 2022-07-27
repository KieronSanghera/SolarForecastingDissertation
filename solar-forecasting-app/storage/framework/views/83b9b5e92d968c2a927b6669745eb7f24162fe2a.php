<?php $__env->startSection('page-content'); ?>
<div class="static top-20 pt-10">
    <div class="pt-20"></div>
    <h3 class="mx-8 text-center text-3xl text-black">Welcome</h3>

    <hr class="border-gray-600 my-8 ">

    <div class="flex flex-row flex-wrap flex-grow mt-2">
        <div>
            <p class="text-center">Welcome to the Solar Forecast. Our aim is to provide accurate forecasts for everyone,
                with no barriers or confusing information. Come and see our forecasts, created using local data.</p>
                <div class="pt-5"></div>
            <div class="py-10">
                <div
                    class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-1/3 bg-transparent text-center font-semibold hover:bg-neutral-400 py-2 px-4 border border-netrual-300 hover:border-transparent rounded shadow">
                    <a class="flex flex-row text-center justify-center" href="forecasts">See Forecasts</a>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mx-8 text-center text-3xl text-black pt-20">The Why</h3>

    <hr class="border-gray-600 my-8 mx-4">

    <div class="flex flex-row flex-wrap flex-grow mt-2">
        <div>
            <p class="text-center">We want people to be able to utilise thier energy in ways that suits them best. What better way to use your energy that planning. We aim to give you the ability to plan when to use your solar energy.</p>
            <div class="py-10">
                <div class="flex justify-center flex-row ">
                    <div
                        class="w-1/3 bg-transparent text-center font-semibold hover:bg-neutral-400 py-2 px-4 border border-netrual-300 hover:border-transparent rounded shadow">
                        <a class="flex flex-row text-center justify-center" href="<?php echo e(route('faq.show')); ?>">FAQ</a>
                    </div>
                    <div class="m-5"></div>
                    <div
                        class="w-1/3 bg-transparent text-center font-semibold hover:bg-neutral-400 py-2 px-4 border border-netrual-300 hover:border-transparent rounded shadow">
                        <a class="flex flex-row text-center justify-center" href="aboutus">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/index.blade.php ENDPATH**/ ?>