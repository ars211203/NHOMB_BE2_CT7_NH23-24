
<?php $__env->startSection('content'); ?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm chương cho sách có book_id là <?php echo e($id); ?></h1>
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
    <form action="<?php echo e(route('book.chapters.add',$id)); ?>" method="post"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm chương</h3>
            </div>
            <div class="card-body">            
              <div class="form-group">
                <Strong>Nội dung chương</Strong>
                <textarea class="form-control" id="book_description" name="book_description" rows="3" required></textarea>          
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" name="submit" value="Protypes Add" class="btn btn-success float-right">
      </div>
    </section>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\DoAnBe_2\resources\views/chapters/add.blade.php ENDPATH**/ ?>