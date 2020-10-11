

<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">Edit Profile</div>

               <div class="card-body">
                  <form method="POST" action="/profile/<?php echo e($user->id); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field("PATCH"); ?>

                    <div class="form-group row">
                           <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                           <div class="col-md-6">
                              <input id="title" type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e(old('title') ?? $user->profile->title ?? ''); ?>" autocomplete="title" autofocus>

                              <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                 </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                           </div>
                    </div>
                    <div class="form-group row">
                           <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                           <div class="col-md-6">
                              <input id="description" type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" value="<?php echo e(old('description') ?? $user->profile->description ?? ''); ?>" autocomplete="description" autofocus>

                              <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                 </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                           </div>
                    </div>
                    <div class="form-group row">
                           <label for="url" class="col-md-4 col-form-label text-md-right">Link</label>

                           <div class="col-md-6">
                              <input id="url" type="text" class="form-control <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="url" value="<?php echo e(old('url') ?? $user->profile->url ?? ''); ?>" autocomplete="url" autofocus>

                              <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                 </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                           </div>
                    </div>

                    <div class="form-group row">
                           <label for="image" class="col-md-4 col-form-label text-md-right">Profile Image</label>

                           <div class="col-md-6">
                              <input id="image" type="file" class=" <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" value="<?php echo e(old('image')); ?>" autocomplete="image">

                              <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($message); ?></strong>
                                 </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                           </div>
                     </div>

                    <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                 Save Profile
                              </button>
                           </div>
                    </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Χρηστος\Desktop\webGram\resources\views/profiles/edit.blade.php ENDPATH**/ ?>