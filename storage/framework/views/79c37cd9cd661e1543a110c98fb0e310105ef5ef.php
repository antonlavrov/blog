<div class="col-md-9 order-md-1">
<<<<<<< HEAD
   <h4 class="mb-3">Test form</h4>
   <form method="post" action="<?php echo e(route('contact')); ?>">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"  placeholder="Jane Doe">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="site">Site</label>
        <input type="text" class="form-control" id="site"  name="site" placeholder="Site">
      </div>
      <div class="form-group">
        <label for="text">Text</label>
        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
=======
    <h4 class="mb-3">Test form</h4>
    <form class="needs-validation" method="POST" action="<?php echo e(route('save-contact')); ?>" novalidate>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" name="lastName" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
            </div>
        </div>
>>>>>>> eca97a06b798b03c4e9bc71b1538e72f27ccb214

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" name="text" id="textBox" rows="3"></textarea>
        </div>

        <div class="m-x-auto">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>
</div>
<?php /**PATH /home/vagrant/code/blog/resources/views/test/layouts/contact.blade.php ENDPATH**/ ?>