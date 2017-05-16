<div class="row">
    <div class="col-md-9">
        <div class="chart-responsive">
            <canvas id="<?php echo e($id); ?>" style="height: 100%; width: 100%;"></canvas>
        </div><!-- ./chart-responsive -->
    </div><!-- /.col -->
    <div class="col-md-3">
        <ul class="chart-legend clearfix">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><i class="fa fa-circle-o" style="color: <?php echo e($item['color']); ?> !important;"></i> <?php echo e($item['label']); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>