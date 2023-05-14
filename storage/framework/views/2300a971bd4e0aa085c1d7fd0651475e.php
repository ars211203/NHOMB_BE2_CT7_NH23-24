
<?php $__env->startSection('content'); ?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary
                        float-end">Danh sách user</a></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="#"></i>Protypes</a></li>            
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form action="<?php echo e(route('user.update',$user->id)); ?>" method="post"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa user</h3>
            </div>
            <div class="card-body">            
              <div class="form-group">
                <Strong>Tên người dùng</Strong>
                <input type="text" name="user_fullname" value="<?php echo e($user->user_fullname); ?>" class="form-control" placeholder="Nhập tên người dùng">              
              </div>
            </div>
            <div class="card-body">            
              <div class="form-group">
                <Strong>Tên đăng nhập</Strong>
                <input type="text" name="username" value="<?php echo e($user->username); ?>" class="form-control" placeholder="Nhập tên đăng nhập">              
              </div>
            </div>
            <div class="card-body">            
              <div class="form-group">
                <Strong>Email</Strong>
                <input type="text" name="email" value="<?php echo e($user->email); ?>" class="form-control" placeholder="Nhập email">              
              </div>
            </div>
            <div class="card-body">            
              <div class="form-group">
                <Strong>Mật khẩu</Strong>
                <input type="password" name="user_password" value="<?php echo e($user->user_password); ?>" class="form-control" placeholder="Nhập password">              
              </div>
            </div>
            <div class="card-body">            
              <div class="form-group">
                <Strong>Avatar</Strong>
                <input type="file" placeholder="image" id="user_image" class="form-control" name="user_image">      
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="products.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" name="submit" value="Protypes Add" class="btn btn-success float-right">
      </div>
    </section>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2\resources\views/edit.blade.php ENDPATH**/ ?>