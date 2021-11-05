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
    <?php if(count($album->photos) > 0): ?>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $album->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <img src="<?php echo e(asset('storage/albums/'. $album->id)); ?>/<?php echo e($photo->photo); ?>" alt="$photo->photo" height="200px">            
                            <div class="card-body">
                            <p class="card-text"><?php echo e($photo->title); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="<?php echo e(route('photo-show', $photo->id)); ?>" class="btn btn-sm btn-outline-secondary">View</a>
                                        </div>
                                    <small class="text-muted"><?php echo e($photo->size); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
            </div>
        </div>
    <?php else: ?>   
        <h3>No photos yet.!</h3>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/photoshow/resources/views/albums/show.blade.php ENDPATH**/ ?>