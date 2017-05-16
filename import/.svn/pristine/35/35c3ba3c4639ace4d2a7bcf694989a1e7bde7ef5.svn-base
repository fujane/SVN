<?php if(Session::has('error')): ?>
    <?php $error = Session::get('error');?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i><?php echo e(array_get($error->get('title'), 0)); ?></h4>
        <p><?php echo array_get($error->get('message'), 0); ?></p>
    </div>
<?php endif; ?>