

<?php $__env->startSection('content'); ?>
<div class = "content-form"> 
    <h1 class="info-input">Enter some information</h1>
    <form action = "/page" method= "POST"> 
        <?php echo csrf_field(); ?>
        <label for = "name">Your Name: </label> 
        <input type = "text" id="name" name="name"> 
        <label for= "type">Choose your best option:</label> 
        <select name="type" id="type"> 
            <option value= "pizza">Pizza</option>
            <option value= "burger">Burger</option>
            <option value= "pasta">Pasta</option>
        </select> 
 
        <input type="submit" value="Submit" id="submit-button"> 

    </form> 
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Site\laravel\resources\views/page.blade.php ENDPATH**/ ?>