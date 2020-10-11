

<?php $__env->startSection('content'); ?>
<div class="container">
<div class="card">
  <div class="row p-4" style='max-width:80%;'>
    <div class="col-8">
      <img src="/storage/<?php echo e($post->image); ?>" alt="" class="w-100">
    </div>
    <div class="col-4">
      <div class="d-flex align-items-center">
        <div class="pr-3">
          <img src="<?php echo e($post->user->profile->profileImage()); ?>" class=' rounded-circle' 
          style="max-width:50px"
          alt="">
        </div>
        <a href="/profile/<?php echo e($post->user->id); ?>">
          <div class='font-weight-bold text-dark'><?php echo e($post->user->username); ?></div>
        </a>
        <a href="#" class="pl-2 text-primary">follow</a>
    </div>
      <div class='pt-4'> 
      <hr style='border: 1px #ddf solid;'>

      <p>
        <span class="font-weight-bold">
          <a href="p/profile/<?php echo e($post->user->id); ?>" class="text-dark pr-2"><?php echo e($post->user->username); ?></a>
        </span>
        <?php echo e($post->caption); ?>

      </p>
    </div>
    </div>
  </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Χρηστος\Desktop\webGram\resources\views/posts/show.blade.php ENDPATH**/ ?>