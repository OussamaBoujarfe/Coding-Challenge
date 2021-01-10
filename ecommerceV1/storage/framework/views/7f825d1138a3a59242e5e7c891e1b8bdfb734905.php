<?php if(session()->has('success')): ?>
        <div class="alert alert-success">
       <?php echo e(session()->get('success')); ?>

        </div>
        <?php endif; ?><?php /**PATH C:\xampp\htdocs\ecommerceV1\resources\views/partials/flash.blade.php ENDPATH**/ ?>