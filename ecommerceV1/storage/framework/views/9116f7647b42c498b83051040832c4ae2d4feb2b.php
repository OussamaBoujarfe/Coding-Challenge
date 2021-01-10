
<?php $__env->startSection('content'); ?>
<title>QBM: Gestion De Stock</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
        <center><img src="<?php echo e(URL::asset("f/img/pu2.png")); ?>" height="245px" weidth="245px">  
        <h1>la liste de stocks</h1>
         <div class="pull-right">
          <a href="<?php echo e(url('stocks/create')); ?>" class="btn btn-success">Nouveau Materiels? </a>
         </div>
         <div class="pull-left">
        <a href="<?php echo e(url('stocks/alld')); ?>" class="btn btn-danger">Archive Stocks Sorti </a>

         </div>
         
        <table class="table">
        <head>
            <tr>
                <th>ID</th>            
                <th>Genre</th>         
                <th>Date D'entrée</th>
                <th>source</th> 
                <th>Série</th>         
                <th>Modele</th>
                <th>Fabr</th> 
				<th>Actions</th>
            </tr>
        </head>
        <body>
        <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($stock->id); ?></td>
                <td><?php echo e($stock->type); ?></td>           
                <td><?php echo e($stock->dateE); ?></td>
                <td><?php echo e($stock->source); ?></td>
                <td><?php echo e($stock->serie); ?></td>           
                <td><?php echo e($stock->modele); ?></td>
                <td><?php echo e($stock->fabriquant); ?></td>
                <td>
                <form action="<?php echo e(url('stocks/'.$stock->id)); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <a  href="<?php echo e(url('stocks/'.$stock->id.'/show')); ?>" class="btn btn-primary">Details</a>
                <a  href="<?php echo e(url('stocks/'.$stock->id.'/edit')); ?>" class="btn btn-default">Editer</a>
                
                <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                </td>
               
               


            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </body>    
        </table>
     
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerceV1\resources\views/stock/index.blade.php ENDPATH**/ ?>