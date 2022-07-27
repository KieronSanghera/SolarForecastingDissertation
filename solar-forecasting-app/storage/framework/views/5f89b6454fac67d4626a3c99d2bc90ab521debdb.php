<?php $__env->startSection('page-content'); ?>
                <!--Divider-->
                <?php $__currentLoopData = $plantasiaForecast; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $forecast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                <div class="pt-10"></div>
                <div class="pt-5"></div>
                <h3 class="mx-8 text-center text-3xl text-black pt-20">Plantasia Forecast for:</h3>

                <h3 class="mx-8 text-center text-black p-5"><?php echo e(Carbon\Carbon::parse($forecast->forecast_date)->format('D d M Y')); ?></h3>
                <hr class="border-b-2 border-gray-600 my-4 mx-4">
                <?php endif; ?>


                <div class="p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-500 border border-gray-800 rounded shadow">
                        <div class="border-b border-white p-3">
                            <h6 class="text-white"><?php echo e(Carbon\Carbon::parse($forecast->forecast_date)->format('H:i')); ?>:
                            </h6>
                        </div>
                        <div class="p-5">
                            <h6 class="text-white"><?php echo e($forecast->forecasted_mv); ?></h6>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/forecasts/plantasia.blade.php ENDPATH**/ ?>