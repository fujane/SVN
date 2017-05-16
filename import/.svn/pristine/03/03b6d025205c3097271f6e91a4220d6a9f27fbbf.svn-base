<div <?php echo $attributes; ?>>
    <ul class="nav nav-tabs">

        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li <?php echo e($id == 0 ? 'class=active' : ''); ?>><a href="#tab_<?php echo e($tab['id']); ?>" data-toggle="tab"><?php echo e($tab['title']); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if(!empty($dropDown)): ?>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Dropdown <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <?php $__currentLoopData = $dropDown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e($link['href']); ?>"><?php echo e($link['name']); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
        <?php endif; ?>
        <li class="pull-right header"><?php echo e($title); ?></li>
    </ul>
    <div class="tab-content">
        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="tab-pane <?php echo e($id == 0 ? 'active' : ''); ?>" id="tab_<?php echo e($tab['id']); ?>">
            <?php echo $tab['content']; ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>