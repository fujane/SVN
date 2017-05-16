<div class="form-inline pull-right">
    <form action="<?php echo $action; ?>" method="get" pjax-container>
        <fieldset>

            <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $filter->render(); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="btn-group btn-group-sm">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                <a href="<?php echo $action; ?>" class="btn btn-warning" ><i class="fa fa-undo"></i></a>
            </div>

        </fieldset>
    </form>
</div>
