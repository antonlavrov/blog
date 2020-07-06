<div class="col-md-9 order-md-1">
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


<?php /**PATH /home/vagrant/code/blog/resources/views/test/layouts/contact.blade.php ENDPATH**/ ?>