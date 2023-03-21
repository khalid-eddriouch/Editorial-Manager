
<?php $__env->startSection('validation_article'); ?>
<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="<?php echo e(route('editor.update-etat')); ?>" method="GET">
    <label for="">Set etat:</label>
    <input type="text" name="etat">
    <input type="hidden" name="id" value="<?php echo e($article->id); ?>">
    <button type="submit"> change</button>
</form>
<br>
<form action="<?php echo e(route('editor.SendToReviewers')); ?>" method="GET">
    <label for="">send to reviewer 1</label> 
    <input type="text" name="reveiwer1Id">
    <br>
    <label for="">send to reviewer 2</label> 
    <input type="text" name="reveiwer2Id">

    <input type="hidden" name="id" value="<?php echo e($article->id); ?>">
    <button type="submit">send</button>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.editor.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\khalid1\Desktop\pfe-demo - Copy (2)\resources\views/dashboard/editor/article/validation_article.blade.php ENDPATH**/ ?>