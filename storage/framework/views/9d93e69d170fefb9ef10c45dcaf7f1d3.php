
<?php $__env->startSection('create_review'); ?>
<form action="<?php echo e(route(route('reviewer.create-review'))); ?>" method="GET">
    <label for="">Set review:</label>
    <textarea name="review" id="" cols="30" rows="10"></textarea>
    <button type="submit"> send</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.reviewer.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\khalid1\Desktop\pfe-demo - Copy (2)\resources\views/dashboard/reviewer/article/create_review.blade.php ENDPATH**/ ?>