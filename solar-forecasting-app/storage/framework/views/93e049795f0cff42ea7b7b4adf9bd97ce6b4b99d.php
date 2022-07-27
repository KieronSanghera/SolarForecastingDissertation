<?php $__env->startSection('page-content'); ?>
<div class="static top-20 pt-10">
    <div class="pt-20"></div>
    <h3 class="mx-8 text-center text-3xl text-black">About Us</h3>

    <hr class="border-gray-600 my-8 ">

    <div class="flex flex-row flex-wrap flex-grow mt-2">
        <div>
            <p class="text-center">
                This is project created by Kieron Sanghera. This project was created
                to forecast solar energy production. Using machine learning and historic
                data we are able to forecast the future.
            </p>
            <p class="text-center pt-2">
                This model was made for a dissertation project and will be shown at the
                project faire. This will be judged based on the model and the website.
            </p>
            <div class="pt-5"></div>
            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/details/about.blade.php ENDPATH**/ ?>