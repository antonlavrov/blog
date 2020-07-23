<div class="col-md-9 order-md-1">

            

    <h4 class="mb-3">Test form</h4>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <?php echo e($error); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        
    <?php endif; ?>

    <form class="needs-validation" method="POST" action="<?php echo e(route('save-contact')); ?>" novalidate>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" value="<?php echo e(old('firstName')); ?>" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="" value="<?php echo e(old('lastName')); ?>" required>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com"  value="<?php echo e(old('email')); ?>">
            <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" name="text" id="textBox" rows="3"> <?php echo e(old('text')); ?></textarea>
        </div>

        <div class="m-x-auto">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>
</div>
<?php /**PATH /home/vagrant/code/blog/resources/views/test/layouts/contact.blade.php ENDPATH**/ ?>