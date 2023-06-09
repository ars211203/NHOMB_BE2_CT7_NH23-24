
<?php $__env->startSection('content'); ?>
<form  method="POST" action="<?php echo e(route('book.update',$book->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="book_name" class="form-label">Book Name</label>
        <input type="text"  class="form-control" id="book_name" name="book_name" value="<?php echo e($book->book_name); ?>" required>
    </div>

    <div class="form-group">
        <label for="book_author" class="form-label">Book Author</label>
        <input type="text" class="form-control" id="book_author" name="book_author" value="<?php echo e($book->book_author); ?>" required>
    </div>

    <div class="form-group">    
        <label for="book_type" class="form-label">Book Type</label>
        <input type="text" class="form-control" id="book_type" name="book_type" value="<?php echo e($book->book_type); ?>" required>
    </div>

    <div class="form-group">
        <label for="book_source" class="form-label">Book Source</label>
        <input type="text" class="form-control" id="book_source" name="book_source" value="<?php echo e($book->book_source); ?>" required>
    </div>
<!-- 
    <div class="form-group">
        <label for="book_status" class="form-label">Book Status</label>
        <select class="form-control" id="book_status" name="book_status" required>
            <option value="">Select a status</option>
            <option value="Available">Available</option>
            <option value="Unavailable">Unavailable</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="book_description" class="form-label">Book Description</label>
        <textarea class="form-control" id="book_description" name="book_description" rows="3" required><?php echo e($book->book_description); ?></textarea>
    </div>
<!-- 
    <div class="form-group">
        <label for="book_version" class="form-label">Book Version</label>
        <input type="text" class="form-control" id="book_version" name="book_version" required>
    </div> -->

    <!-- <div class="form-group">
        <label for="book_view" class="form-label">Book View</label>
        <input type="number" class="form-control" id="book_view" name="book_view" required>
    </div> -->

    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2\resources\views/books/edit.blade.php ENDPATH**/ ?>