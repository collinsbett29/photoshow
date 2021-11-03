<?php $__env->startSection('content'); ?>
<section class="jumbotron text-center">
    <div class="container">
            <h1 class="jumbotron-heading"><?php echo e($album->name); ?></h1>
            <p class="lead text-muted"><?php echo e($album->description); ?></p>
            <p>
                <a href="<?php echo e(route('photo-create',$album->id)); ?>" class="btn btn-primary my-2">Upload Photo</a>
                <a href="./" class="btn btn-secondary my-2">Go Back</a>
            </p>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/photoshow/resources/views/albums/show.blade.php ENDPATH**/ ?>