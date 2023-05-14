<link rel="stylesheet" href="<?php echo e(asset('./css/chitiet.css')); ?>">
<section>
    <h1 style="text-align: center;"><?php echo e($book->book_name); ?></h1>
    <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <details open>
      <summary><?php echo e($chapters->chapter_name); ?></summary>
      <div>
      <?php if($loop->first): ?>
        <img src="<?php echo e(asset('storage/images/books/'.$book->book_image)); ?>" alt="">
      <?php endif; ?>
        <p><?php echo e($chapters->chapter_content); ?></p>
      </div>
    </details>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </section>
  <div class="action">
    <a href="<?php echo e(route('index')); ?>">Quay lai</a>
  </div><?php /**PATH G:\Xampp\htdocs\DoAnBe_2\resources\views/books/chitiet.blade.php ENDPATH**/ ?>