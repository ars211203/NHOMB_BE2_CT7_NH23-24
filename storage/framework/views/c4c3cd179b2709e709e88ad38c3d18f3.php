
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thêm chương sách</h3>
                </div>
                
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('book.chapters.store',$id)); ?>" method="post"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md">
                    <div class="form-group">
                        <Strong>Tên chương</Strong>
                            <input type="text" name="chapter_name"
                                class="form-control" placeholder="Nhập tên chương">
                        </div>
                        <div class="form-group">
                        <Strong>Nội dung chương</Strong>
                            <input type="text" name="chapter_content"
                                class="form-control" placeholder="Nhập nội dung chương">
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2\resources\views/chapters/create.blade.php ENDPATH**/ ?>