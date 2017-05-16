<div class="form-group <?php echo !$errors->has($errorKey) ?: 'has-error'; ?>">

    <label for="<?php echo e($id); ?>" class="col-sm-<?php echo e($width['label']); ?> control-label"><?php echo e($label); ?></label>

    <div class="col-sm-<?php echo e($width['field']); ?>">

        <?php echo $__env->make('admin::form.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="input-group">

            <?php if($prepend): ?>
            <span class="input-group-addon"><?php echo $prepend; ?></span>
            <?php endif; ?>

            <input <?php echo $attributes; ?> />

            <?php if($append): ?>
                <span class="input-group-addon clearfix"><?php echo $append; ?></span>
            <?php endif; ?>

        </div>

        <?php echo $__env->make('admin::form.help-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</div>