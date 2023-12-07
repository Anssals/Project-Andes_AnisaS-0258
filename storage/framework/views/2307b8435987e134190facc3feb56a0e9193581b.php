
<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Category</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Category</li>
                        <li class="breadcrumb-item active"><?php if(!empty($cate)): ?>Edit <?php else: ?> Add <?php endif; ?></li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="<?php echo e(route('add_category')); ?>">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class=""><?php if(!empty($cate)): ?>Edit <?php else: ?> Add <?php endif; ?> Category</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="<?php if(!empty($cate)): ?><?php echo e(route('category_edited', $cate->id)); ?><?php else: ?><?php echo e(route('category_added')); ?><?php endif; ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col">

                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php if(!empty($cate)): ?><?php echo e($cate->name); ?><?php else: ?><?php echo e(old('name')); ?><?php endif; ?>"
                                        required>
                                    <div class="text-danger">* <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Category Image</label>
                                    <p class="text-muted form-label">for best output upload [400 x 225] Image</p>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" id=""
                                            <?php if(empty($cate)): ?>required <?php endif; ?>>
                                    </div>
                                    <div class="text-danger mt-0">* <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <?php if(!empty($cate)): ?>
                                    <label for="" class="form-label">Old Image</label>
                                    <img class="form-control" src="<?php echo e(asset('/storage/images/' . $cate->image)); ?>"
                                        alt="Error">
                                <?php endif; ?>
                            </div>
                            <div class="col-12">
                                <button class="btn <?php if(!empty($cate)): ?> btn-success <?php else: ?> btn-primary <?php endif; ?>" type="submit"><?php if(!empty($cate)): ?> Update <?php else: ?> Submit <?php endif; ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Anisa\Semester 3\ANDES\RealEstate\Real_Estate_Site\resources\views/AdminPanel/category/form.blade.php ENDPATH**/ ?>