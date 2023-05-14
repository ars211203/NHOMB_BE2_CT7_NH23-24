
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thêm người dùng</h3>
                </div>
                <div class="col-md-6">
                    <a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary
                        float-end">Danh sách user</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('user.store')); ?>" method="post"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <Strong>Tên người dùng</Strong>
                            <input type="text" name="user_fullname"
                                class="form-control" placeholder="Nhập tên người dùng">
                        </div>
                        <div class="form-group">
                            <Strong>Tên đăng nhập</Strong>
                            <input type="text" name="username"
                                class="form-control" placeholder="Nhập tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <Strong>Email</Strong>
                            <input type="text" name="email"
                                class="form-control" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <Strong>mật khẩu</Strong>
                            <input type="password" name="user_password"
                                class="form-control" placeholder="Nhập password">
                        </div>
                        <div class="form-group mb-3">
                        <Strong>Avatar</Strong>
                            <input type="file" placeholder="image"
                                id="user_image"
                                class="form-control"
                                name="user_image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2\resources\views/create.blade.php ENDPATH**/ ?>