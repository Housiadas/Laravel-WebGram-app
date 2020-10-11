<?php $__env->startSection('content'); ?>
<div class="container">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="row">
                  <div class="col-8 offset-2">
                     <div class="d-flex align-items-center">
                        <div class="p-1">
                           <img src="<?php echo e($post->user->profile->profileImage()); ?>" class=' rounded-circle' 
                              style="max-width:50px"
                              alt="">
                        </div>
                           <a href="/profile/<?php echo e($post->user->id); ?>">
                              <div class='font-weight-bold text-dark'><?php echo e($post->user->username); ?></div>
                           </a>
                        
                     </div>
                     <img src="/storage/<?php echo e($post->image); ?>" alt="" class="w-100">
                  </div>
               </div>
               <div class="row">
                  <div class="col-8 offset-2">
                     <div class='pt-2'> 
                        <p>
                        <span class="font-weight-bold">
                              <a href="p/profile/<?php echo e($post->user->id); ?>" class="text-dark pr-2">
                                 <?php echo e($post->user->username); ?></a>
                        </span>  <?php echo e($post->caption); ?>

                        </p>
                     </div>
                  </div>
               </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
               <div class="col-12 d-flex justify-content-center">
               <?php echo e($posts->links("pagination::bootstrap-4")); ?>

               </div>
            </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Χρηστος\Desktop\webGram\resources\views/posts/index.blade.php ENDPATH**/ ?>