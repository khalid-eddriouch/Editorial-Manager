
<?php $__env->startSection('libre_article'); ?>
<div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Etat</th>
      <th scope="col">Author Email</th>
      <th scope="col">Editor Email</th>
      <th scope="col"> Fisrt Reviewer Email</th>
      <th scope="col"> Seconde Reviewer Email</th>
      <th scope="col"> Edit</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($article->title); ?></th>
      <td><?php echo e($article->category); ?></td>
      <td><?php echo e($article->etat); ?></td>
      <td><?php echo e($article->authorId); ?></td>
      <td><?php echo e($article->editorId); ?></td>
      <td><?php echo e($article->reviewer1Id); ?></td>
      <td><?php echo e($article->reviewer2Id); ?></td>
      <td>
        <div>
        <!--<li><a href="<?php echo e(route('editor.validation-article')); ?>" >edit</a></li>!-->

        <form action="<?php echo e(route('editor.send-to-reviewers')); ?>"  method="get" enctype="multipart/form-data" >         
          <?php echo csrf_field(); ?>         
          <input type="hidden" value="<?php echo e($article->id); ?>" name="id">
          <input type="hidden" value="<?php echo e(auth::guard('editor')->user()->email); ?>" name="e" id="e">
          <button type="submit" name="submit">tacke it</button>
        </form>
        </div>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.editor.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\khalid1\Desktop\pfe-demo - Copy (2)\resources\views/dashboard/editor/article/show_libre_article.blade.php ENDPATH**/ ?>