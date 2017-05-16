<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            <?php echo e(isset($header) ? $header : trans('admin::lang.title')); ?>

            <small><?php echo e(isset($description) ? $description : trans('admin::lang.description')); ?></small>
        </h1>

    </section>

    <section class="content">

        <?php echo $__env->make('admin::partials.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('admin::partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('admin::partials.exception', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('admin::partials.toastr', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $content; ?>


    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin::index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>