


<?php $__env->startSection('content'); ?>
<title>QBM: Gestion De Stock</title>


<div class="container">
    <div class="row">
        <div class="col-md-12">
        

        
        
     <center>   <img src="<?php echo e(URL::asset("f/img/pp.png")); ?>" height="110px" weidth="100px">
        <h1>Listes De Stock Sorti</h1><br><input class="btn btn-primary" type="button" onclick="window.print()" value="Imprimer" />
        
        <br><br></center>
        
        <table id="tab"  class="table" >
        <head>
            <tr>
                
                
                <th>Type</th>
                <th>Série</th>
               <th>Modele</th>  
               <th>Fabriquant</th> 
                <th>DateD'entrée</th>
                <th>Source</th>
                <th>DateDeSortie</th>
            </tr>
        </head>
        <body>
        <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($stock->type); ?></td>
                <td><?php echo e($stock->serie); ?></td>
                <td><?php echo e($stock->modele); ?></td>
                <td><?php echo e($stock->fabriquant); ?></td>
                <td><?php echo e($stock->dateE); ?></td>
                <td><?php echo e($stock->source); ?></td>
                <td><?php echo e($stock->deleted_at); ?></td>
           
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </body>   
        </table>
        
        
        
        <center><?php echo e($stocks->links()); ?> </center>
     

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerceV1\resources\views/stock/alld.blade.php ENDPATH**/ ?>