<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3><?php echo e($photo->title); ?></h3>
        <p><?php echo e($photo->description); ?></p>
        <form action="<?php echo e(route('photo-destroy', $photo->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" name="button" class="btn btn-danger float-right">DELETE</button>
        </form>
        <a href="<?php echo e(route('album-show', $photo->album_id)); ?>" class="btn btn-info">Go Back</a>
        <br>
        <small>Size: <?php echo e($photo->size); ?></small>
        <hr>
        <img src="<?php echo e(asset('storage/albums/'. $photo->album_id)); ?>/<?php echo e($photo->photo); ?>" alt="<?php echo e($photo->photo); ?>" height="100px">            
        <hr>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/photoshow/resources/views/photos/show.blade.php ENDPATH**/ ?>