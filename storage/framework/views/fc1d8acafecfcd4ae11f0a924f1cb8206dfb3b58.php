<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Create new album</h2>
        <form method="post" action="./store" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
            </div>
            <div class="form-group">
                <label for="cover-image">Cover image</label>
                <input type="file" class="form-control" name="cover-image" id="cover-image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/photoshow/resources/views/albums/create.blade.php ENDPATH**/ ?>