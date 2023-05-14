
<?php $__env->startSection('content'); ?>
                <div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quản Chương của sách <?php echo e($book_name); ?></h3>
                </div>
                <div class="col-md-6">
                    <a href="<?php echo e(route('book.chapters.create',$id)); ?>" class="btn btn-primary
                        float-end">Thêm chương mới</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bodered">
                <thead>
                    <th>STT</th>
                    <th>Tên chương</th>
                    <th>Nội dung chương</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($data->book_id == $id): ?>
                    <tr>
                    <td><?php echo e($data->id); ?></td>
                        <td><?php echo e($data->chapter_name); ?></td>
                        <td><?php echo e($data->chapter_content); ?></td>  
                        <td>
                        <form action="<?php echo e(route('book.chapter.destroy', ['book_id' => $id, 'id' => $data->id])); ?>" method="POST">
                        <a href="#" class="btn btn-info">Sửa sách</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Xóa chương</button>
                        </form>
                        </td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2\resources\views/chapters/index.blade.php ENDPATH**/ ?>