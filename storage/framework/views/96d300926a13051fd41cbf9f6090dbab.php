
<?php $__env->startSection('creation-review'); ?>
<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="<?php echo e(route('reviewer.SendToEditor')); ?>" method="GET">
    <label for="">Set review:</label>
    <textarea name="review"  cols="30" rows="10"></textarea>
    <button type="submit"> send</button>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.reviewer.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\khalid1\Desktop\pfe-demo - Copy (2)\resources\views/dashboard/reviewer/article/creation_review.blade.php ENDPATH**/ ?>