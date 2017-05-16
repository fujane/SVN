<form <?php echo $attributes; ?>>
    <div class="box-body fields-group">

        <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $field->render(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <!-- /.box-body -->
    <div class="box-footer">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-2">
            <div class="btn-group pull-left">
                <button type="reset" class="btn btn-warning pull-right"><?php echo e(trans('admin::lang.reset')); ?></button>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="btn-group pull-right">
                <button type="submit" class="btn btn-info pull-right"><?php echo e(trans('admin::lang.submit')); ?></button>
            </div>
        </div>

    </div>
</form>