
<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Facilities</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Facilities</li>
                        <li class="breadcrumb-item active"><?php if(!empty($faci)): ?>Edit <?php else: ?> Add <?php endif; ?></li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="<?php echo e(route('add_category')); ?>">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class=""><?php if(!empty($faci)): ?>Edit <?php else: ?> Add <?php endif; ?> Facility</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="<?php if(!empty($faci)): ?><?php echo e(route('facilities_edited', $faci->id)); ?><?php else: ?><?php echo e(route('facilities_added')); ?><?php endif; ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-8">
                                <label for="" class="form-label">Facility</label>
                                <input type="text" class="form-control" name="faci" value="<?php if(!empty($faci)): ?><?php echo e($faci->faci); ?><?php else: ?><?php echo e(old('faci')); ?><?php endif; ?>"
                                    required>
                                <div class="text-danger">* <?php $__errorArgs = ['faci'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Font Awesome</label>
                                <input type="text" class="form-control" name="fa" value="<?php if(!empty($faci)): ?><?php echo e($faci->fa); ?><?php else: ?><?php echo e(old('fa')); ?><?php endif; ?>">
                                <div class="text-danger"><?php $__errorArgs = ['fa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> * <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Color</label>
                                <div class="input-group">
                                    <select class="form-select" name="color">
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == '' ? 'selected' : ''); ?><?php endif; ?> value="">Choose...</option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'primary' ? 'selected' : ''); ?><?php endif; ?> class="bg-primary" value="primary">Blue
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'secondary' ? 'selected' : ''); ?><?php endif; ?> class="bg-secondary" value="secondary">Grey
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'success' ? 'selected' : ''); ?><?php endif; ?> class="bg-success" value="success">Green
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'danger' ? 'selected' : ''); ?><?php endif; ?> class="bg-danger" value="danger">Red</option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'warning' ? 'selected' : ''); ?><?php endif; ?> class="bg-warning" value="warning">Yellow
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'info' ? 'selected' : ''); ?><?php endif; ?> class="bg-info" value="info">Teal Blue
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'light' ? 'selected' : ''); ?><?php endif; ?> class="bg-light" value="light">Light
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'dark' ? 'selected' : ''); ?><?php endif; ?> class="bg-dark text-white"
                                            value="dark">Dark</option>
                                    </select>
                                </div>
                                <div class="text-danger">* <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                            </div>
                            <div class="col-12">
                                <button
                                    class="btn
                                <?php if(!empty($faci)): ?> btn-success
                                <?php else: ?> btn-primary
                                <?php endif; ?>"
                                    type="submit"><?php if(!empty($faci)): ?> Update <?php else: ?> Submit <?php endif; ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Anisa\Semester 3\ANDES\RealEstate\Real_Estate_Site\resources\views/AdminPanel/facilities/form.blade.php ENDPATH**/ ?>