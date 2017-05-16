<div class="form-group <?php echo !$errors->has($errorKey) ?: 'has-error'; ?>">

<label for="<?php echo e($id); ?>" class="col-sm-<?php echo e($width['label']); ?> control-label"><?php echo e($label); ?></label>

    <div class="col-sm-<?php echo e($width['field']); ?>">

        <?php echo $__env->make('admin::form.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <input type="hidden" name="<?php echo e($name); ?>"/>

        <select class="form-control <?php echo e($class); ?>" style="width: 100%;" name="<?php echo e($name); ?>" <?php echo $attributes; ?> >
            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($select); ?>" <?php echo e($select == old($column, $value) ?'selected':''); ?>><?php echo e($option); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <?php echo $__env->make('admin::form.help-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</div>
