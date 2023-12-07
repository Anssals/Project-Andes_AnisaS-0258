
<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Properties</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Property</li>
                        <li class="breadcrumb-item active"><?php if(!empty($pro)): ?>Edit <?php else: ?> Add <?php endif; ?></li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="<?php echo e(route('add_properties')); ?>">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="mt-4">
                <form class="card" style="width:90%;" id="proForm" action="<?php if(!empty($pro)): ?><?php echo e(route('properties_edited', $pro->id)); ?><?php else: ?><?php echo e(route('properties_added')); ?><?php endif; ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="card-header">
                        <div class="d-flex">
                            <h4 class=""><?php if(!empty($pro)): ?>Edit <?php else: ?> Add <?php endif; ?> Property</h4>
                            <div class="ms-auto">
                                <button
                                    class="btn
                                    <?php if(!empty($pro)): ?> btn-success
                                    <?php else: ?> btn-primary
                                    <?php endif; ?>"
                                    type="submit"><?php if(!empty($pro)): ?> Update <?php else: ?> Submit <?php endif; ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <?php echo csrf_field(); ?>

                            <div class="row border-bottom border-2 m-auto mt-3">
                                <div class="col mb-2  mx-auto">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="featured"
                                                <?php if(!empty($pro)): ?> <?php if($pro->featured == 1): ?> checked <?php endif; ?> <?php else: ?> <?php echo e(old('featured') ? 'checked' : ''); ?> <?php endif; ?>>
                                                <label class="form-check-label">
                                                    Featured
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="public"
                                                <?php if(!empty($pro)): ?> <?php if($pro->public == 1): ?> checked <?php endif; ?> <?php else: ?> <?php echo e(old('public') ? 'checked' : ''); ?> <?php endif; ?>>
                                                <label class="form-check-label">
                                                    Public
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="" class="form-label"><i class="fas fa-home"></i> Property Title</label>
                                            <input type="text" class="form-control" name="title"
                                                value="<?php if(!empty($pro)): ?><?php echo e($pro->title); ?><?php else: ?><?php echo e(old('title')); ?><?php endif; ?>" required>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label"><i class="fas fa-tag"></i> Price</label>
                                            <div class="input-group">
                                                <div class="input-group-text">₹</div>
                                                <input type="number" class="form-control" name="price" min="0"
                                                    max="99999999" value="<?php if(!empty($pro)): ?><?php echo e($pro->price); ?><?php else: ?><?php echo e(old('price')); ?><?php endif; ?>" required>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label class="form-label"><i class="fas fa-sign"></i> Purpose</label>
                                            <div class="input-group">
                                                <label class="input-group-text">Options</label>
                                                <select class="form-select" name="purpose" required>
                                                    <option value="" selected>Choose...</option>
                                                    <option <?php if(!empty($pro)): ?> <?php if($pro->purpose == 'sale'): ?> selected <?php endif; ?> <?php else: ?> <?php if(old('purpose') == 'sale'): ?> selected <?php endif; ?> <?php endif; ?> value="sale">Sale</option>
                                                    <option <?php if(!empty($pro)): ?> <?php if($pro->purpose == 'rent'): ?> selected <?php endif; ?> <?php else: ?> <?php if(old('purpose') == 'rent'): ?> selected <?php endif; ?> <?php endif; ?> value="rent">Rent</option>
                                                    <option <?php if(!empty($pro)): ?> <?php if($pro->purpose == 'pg'): ?> selected <?php endif; ?> <?php else: ?> <?php if(old('purpose') == 'pg'): ?> selected <?php endif; ?> <?php endif; ?> value="pg">PG</option>
                                                </select>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['purpose'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label"><i class="fas fa-cubes"></i> Category</label>
                                            <div class="input-group">
                                                <label class="input-group-text">Options</label>
                                                <select class="form-select" name="category" required>
                                                    <option value="" selected>Choose...</option>
                                                    <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(!empty($pro)): ?>
                                                            <?php if($pro->category == $item->id): ?>
                                                                <option selected value="<?php echo e($item->id); ?>">
                                                                    <?php echo e($item->name); ?></option>
                                                            <?php else: ?>
                                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?>

                                                                </option>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <?php if(old('category') == $item->id): ?>
                                                                <option selected value="<?php echo e($item->id); ?>">
                                                                    <?php echo e($item->name); ?></option>
                                                            <?php else: ?>
                                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?>

                                                                </option>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <div class="form-label"><i class="fas fa-bed"></i> Bed Rooms</div>
                                            <input type="number" class="form-control" value="<?php if(!empty($pro)): ?><?php echo e($pro->rooms); ?><?php else: ?><?php echo e(old('rooms') ?? 1); ?><?php endif; ?>"
                                                name="rooms" min="1" required>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['rooms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-label"><i class="fas fa-shower"></i> Bath Rooms</div>
                                            <input type="number" class="form-control" value="<?php if(!empty($pro)): ?><?php echo e($pro->bathrooms); ?><?php else: ?><?php echo e(old('bathrooms') ?? 1); ?><?php endif; ?>"
                                                name="bathrooms" min="1" required>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['bathrooms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label"><i class="fas fa-th-large"></i> Area</div>
                                            <div class="input-group">
                                                <label class="input-group-text">Sq. Ft.</label>
                                                <input type="number" class="form-control"
                                                    value="<?php if(!empty($pro)): ?><?php echo e($pro->area); ?><?php else: ?><?php echo e(old('area') ?? 700); ?><?php endif; ?>" name="area" min="700" required>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label class="form-label"><i class="fas fa-city"></i> City</label>
                                            <div class="input-group">
                                                <select class="form-select" name="city" required>
                                                    <option value="" selected>Choose...</option>
                                                    <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(!empty($pro)): ?>
                                                            <?php if($pro->city == $item->id): ?>
                                                                <option selected value="<?php echo e($item->id); ?>">
                                                                    <?php echo e($item->city); ?></option>
                                                            <?php else: ?>
                                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->city); ?>

                                                                </option>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <?php if(old('city') == $item->id): ?>
                                                                <option selected value="<?php echo e($item->id); ?>">
                                                                    <?php echo e($item->city); ?></option>
                                                            <?php else: ?>
                                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->city); ?>

                                                                </option>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <label class="form-label"><i class="fas fa-map"></i> Address</label>
                                            <input type="text" class="form-control" value="<?php if(!empty($pro)): ?><?php echo e($pro->address); ?><?php else: ?><?php echo e(old('address')); ?><?php endif; ?>"
                                                name="address" required>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label"><i class="fas fa-phone-alt"></i> Contact Phone</label>
                                            <input type="tel" name="cont_ph" value="<?php if(!empty($pro)): ?><?php echo e($pro->cont_ph); ?><?php else: ?><?php echo e(old('cont_ph')); ?><?php endif; ?>"
                                                class="form-control" required>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['cont_ph'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label"><i class="fas fa-envelope"></i> Contact Email</label>
                                            <input type="email" name="cont_em" value="<?php if(!empty($pro)): ?><?php echo e($pro->cont_em); ?><?php else: ?><?php echo e(old('cont_em')); ?><?php endif; ?>"
                                                class="form-control" required>
                                            <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['cont_em'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label mb-0"><i class="fas fa-shapes"></i> Facilities</label>
                                            <p class="text-muted form-label">Use Ctrl + Click to multi select
                                            </p>
                                            <select class="form-select" name="faci[]" multiple>
                                                <?php $__currentLoopData = $faci; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(!empty($pro_faci)): ?>
                                                        <?php if(in_array($item->slug_faci,$pro_faci)): ?>
                                                            <option selected value="<?php echo e($item->slug_faci); ?>"><?php echo e($item->faci); ?>

                                                            </option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($item->slug_faci); ?>"><?php echo e($item->faci); ?>

                                                            </option>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <option value="<?php echo e($item->slug_faci); ?>"><?php echo e($item->faci); ?>

                                                        </option>
                                                    <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <div class="text-danger fst-italic lh-1"><?php $__errorArgs = ['faci[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> * <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label"><i class="fas fa-info-circle"></i> Property Description</label>
                                            <textarea class="form-control" rows="3"
                                                name="description"><?php if(!empty($pro)): ?><?php echo e($pro->description); ?><?php else: ?><?php echo e(old('description')); ?><?php endif; ?></textarea>
                                            <div class="text-danger fst-italic lh-1"><?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> * <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label"><i class="fab fa-youtube"></i> Property Video</label>
                                            <textarea class="form-control" rows="3"
                                                name="video"><?php if(!empty($pro)): ?><?php echo e($pro->video); ?><?php else: ?><?php echo e(old('video')); ?><?php endif; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label"><i class="fas fa-map-marked-alt"></i> Property Map</label>
                                            <textarea class="form-control" rows="3"
                                                name="map"><?php if(!empty($pro)): ?><?php echo e($pro->map); ?><?php else: ?><?php echo e(old('map')); ?><?php endif; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mx-auto mb-2 ps-2 border-start">
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label mb-0"><i class="fas fa-image"></i> Property Featured Image</label>
                                        <p class="text-muted form-label">for best output upload [1903 x 513] Image
                                        </p>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="fe_image" <?php if(empty($pro->fe_image)): ?> required <?php endif; ?>>
                                        </div>
                                        <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['fe_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <?php if(!empty($pro->fe_image)): ?>
                                        <div class="mb-2">
                                            <label for="" class="form-label">Old Featured Image</label>
                                            <img class="form-control"
                                                src="<?php echo e(asset('/storage/property/' . $pro->fe_image)); ?>" alt="Error">
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label mb-0"><i class="far fa-image"></i> Property Image</label>
                                        <p class="text-muted form-label">for best output upload [1920 x 1440] [4:3] Image
                                        </p>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="image" <?php if(empty($pro->image)): ?>required <?php endif; ?>>
                                        </div>
                                        <div class="text-danger fst-italic lh-1">* <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <?php if(!empty($pro->image)): ?>
                                        <div class="mb-2">
                                            <label for="" class="form-label">Old Image</label>
                                            <img class="form-control"
                                                src="<?php echo e(asset('/storage/property/' . $pro->image)); ?>" alt="Error">
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label"><i class="fas fa-drafting-compass"></i> Flooreplan Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="floorplan">
                                        </div>
                                        <div class="text-danger fst-italic lh-1"><?php $__errorArgs = ['floorplan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> * <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <?php if(!empty($pro->floorplan)): ?>
                                        <div class="mb-2">
                                            <label for="" class="form-label">Old Flooreplan</label>
                                            <img class="form-control"
                                                src="<?php echo e(asset('/storage/property/' . $pro->floorplan)); ?>" alt="Error">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <button
                                    class="btn
                                    <?php if(!empty($pro)): ?> btn-success
                                    <?php else: ?> btn-primary
                                    <?php endif; ?>"
                                    type="submit"><?php if(!empty($pro)): ?> Update <?php else: ?> Submit <?php endif; ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Anisa\Semester 3\ANDES\RealEstate\Real_Estate_Site\resources\views/AdminPanel/properties/form.blade.php ENDPATH**/ ?>