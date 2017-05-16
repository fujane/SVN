<select class="form-control <?php echo e($class); ?>" style="width: 100%;" name="<?php echo e($name); ?>">
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($select); ?>" <?php echo e((string)$select === request($name, $value) ?'selected':''); ?>><?php echo e($option); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>