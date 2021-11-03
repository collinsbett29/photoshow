<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(count($albums) > 0): ?>
        <div class="row">
            <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="<?php echo e(asset('storage/album_covers/'. $album->cover_image)); ?>" alt="$album->cover_image" height="200px">            
                        <div class="card-body">
                        <p class="card-text"><?php echo e($album->name); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                <small class="text-muted"><?php echo e($album->description); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
        </div>
    <?php else: ?>   
        <h3>No Album yet.!</h3>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/photoshow/resources/views/albums/index.blade.php ENDPATH**/ ?>