
<?php $__env->startSection('content'); ?>
<title>QBM: Gestion De Stock</title>
<style>
.d{margin-left:527px;
   
   
}
</style>



 <div class="container">
    <div class="row">
        <div class="col-md-12">
        
           <form action="<?php echo e(url('stocks')); ?>" method="post"> 

                <?php echo e(csrf_field()); ?>


				
				
               <div class="form-group">
                <center><img src="<?php echo e(URL::asset("f/img/pu.png")); ?>" height="300px" weidth="300px">  
                <h1>Informations De Stock</h1></center>
                <br><br>
			 
               <div class="form-group col-md-4">
                <label for="inputState">Type :</label>
                <select id="inputState" class="form-control" name="type" value="<?php echo e(old('type')); ?>">
                <option selected>ORDINATEUR PORTABLE</option>
                <option>TELEPHONE</option>
		        		<option>TABLETTE</option>    
                </select>
               </div>

               <div class="form-group col-md-4">
                <label for="inputState">Fabriquant :</label>
                <select id="inputState" class="form-control" name="fabriquant" value="<?php echo e(old('fabriquant')); ?>">
                <option>ACER</option>
                <option>ALCATEL</option>
                <option>ASUS</option>       
                <option>BLACKBERRY</option>
                <option>DELL</option>                
                <option>HP</option>
                <option>HTC</option>
                <option>HUAWEI</option>
                <option>IBM</option>
                <option>INFINIX</option>
                <option>IPHONE Apple</option>
                <option>LENOVO</option> 
                <option>LG</option>
                <option>MOTOROLA</option>
                <option>NOKIA</option> 
                <option>OPPO</option>  
                <option>PHILIPS</option>
                <option selected>SAMSUNG</option>
                <option>SONY</option>
                <option>TOSHIBA</option>
                <option>WINDOWSPhone</option>                 
                <option>ZTE</option>
                </select>
               </div>
                <div class="form-group <?php if($errors->get('serie')): ?> has-error <?php endif; ?>">
                <br><br><br><br><br><label for="">Serie :</label>
                 <input type="text" name="serie" class="form-control" value="<?php echo e(old('serie')); ?>" >
                 <?php if($errors->get('serie')): ?>
                 <?php $__currentLoopData = $errors->get('serie'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li><?php echo e($message); ?></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
                </div>

               <div class="form-group <?php if($errors->get('modele')): ?> has-error <?php endif; ?>">
                <label for="">Modele :</label>
                <input type="text" name="modele" class="form-control" value="<?php echo e(old('modele')); ?>">
                <?php if($errors->get('modele')): ?>
                 <?php $__currentLoopData = $errors->get('modele'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li><?php echo e($message); ?></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
               </div>
              
               <div class="form-group ">
                <label for="">Date D'entree :</label>
                <input type="date"  name="dateE" class="form-control" value="<?php echo e(old('dateE')); ?>">
               </div>

               <div class="form-group <?php if($errors->get('source')): ?> has-error <?php endif; ?>">
                <label for="">Source :</label>
                <input type="text" name="source" class="form-control" value="<?php echo e(old('source')); ?>">
                <?php if($errors->get('source')): ?>
                 <?php $__currentLoopData = $errors->get('source'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li><?php echo e($message); ?></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
               </div>
			 
	        	
             
               <br><br><br>
               <div class="form-group" >
             
                   <!--  <a href="<?php echo e(url('materiels')); ?>" type="submit"  class="btn btn-success d">suivant</a>--> 
                <input type="submit" href="<?php echo e(url('stocks')); ?>"  class="form-control btn btn-primary" value="Enregistrer"> 
               </div

           </form>
              
        </div>
    </div>
 </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Oussama Boujarfe\ecommerceV1\resources\views/stock/create.blade.php ENDPATH**/ ?>