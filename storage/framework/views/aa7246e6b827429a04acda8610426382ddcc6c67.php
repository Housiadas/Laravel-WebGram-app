<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row ">
       <div class="col-4 p-5 text-center"><img src="<?php echo e($user->profile->profileImage()); ?>" style="max-width:150px;height:150px;" class="rounded-circle w-100" alt=""></div>
       <div class="col-8 pt-5">
          
           <div class="d-flex justify-content-between align-items-baseline">

            <div class="d-flex align-items-center pb-4"> 
            <div class="h2 font-text-bold"><?php echo e($user->username ?? ''); ?></div>

            <!-- Vue.js component -->
               <follow-button user_id="<?php echo e($user->id); ?>" follows="<?php echo e($follows); ?>"></follow-button>
            </div>
          
           </div>

           <div class="d-flex">
                <div class="pr-5"><strong><?php echo e($postCount); ?> </strong>posts</div>
                <div class="pr-5"><strong><?php echo e($followersCount); ?> </strong>followers</div>
                <div class="pr-5"><strong><?php echo e($followingCount); ?> </strong>following</div>
           </div>
           <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title ?? ''); ?></div>
           <div class=""><?php echo e($user->profile->description ?? ''); ?></div>
           <div><a href="#"><?php echo e($user->profile->url ?? ''); ?></a></div>
        </div>
   </div>
   <div class="row pt-4">
      <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-4 pb-4">
            <a href="/p/<?php echo e($post->id); ?>">
               <img src="/storage/<?php echo e($post->image); ?>" style="object-fit: cover;" class="w-100">
            </a>
         </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Χρηστος\Desktop\webGram\resources\views/profiles/index.blade.php ENDPATH**/ ?>