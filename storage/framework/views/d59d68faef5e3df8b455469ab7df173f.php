
<?php $__env->startSection('sed_to_reviewer'); ?>
<form action="<?php echo e(route('editor.SendToReviewers')); ?>" method="GET">
    <label for="">send to reviewer 1</label> 
    <input type="text" name="reveiwer1Id">
    <br>
    <label for="">send to reviewer 2</label> 
    <input type="text" name="reveiwer2Id">

    <input type="hidden" name="id" value="<?php echo e($id); ?>">
    <button type="submit">send</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.editor.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\khalid1\Desktop\pfe-demo - Copy (2)\resources\views/dashboard/editor/article/send_to_reviewers.blade.php ENDPATH**/ ?>