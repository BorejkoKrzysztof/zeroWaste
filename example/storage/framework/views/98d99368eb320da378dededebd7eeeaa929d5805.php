

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/jakis.css')); ?>" />

<div class="row" style="padding-top:120px">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h1>Przepisy</h1>
    </div>
    <div class="pull-right">
      <center><a class="btn btn-warning" href="<?php echo e(route('recipes.create')); ?>" title="Dodaj przepis">Dodaj nowy przepis</a></center><br>
    </div>
  </div>
</div>

<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
  <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>

<!-- <table class="table table-bordered table-responsive-lg">
  <thead>
    <tr>
      <th scope="col">Nazwa potrawy</th>
      <th scope="col">Zdjęcie</th>
      <th scope="col">Składniki</th>
      <th scope="col">Urządzenia kuchenne</th>
      <th scope="col">Czas przygotowania</th>
      <th scope="col">Trudność przygotowania</th>
      <th width="240px">Akcja</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($recipe->title); ?></td>
      <td>
        <img src="<?php echo e(asset('uploads/recipes/'.$recipe->photo)); ?>" width="200px" height="200px" alt="">
      </td>
      <td><?php echo e($recipe->products); ?></td>
      <td><?php echo e($recipe->food_processors); ?></td>
      <td><?php echo e($recipe->time); ?> min</td>
      <td><?php echo e($recipe->level); ?>/5</td>
      <td>
        <form action="<?php echo e(route('recipes.destroy', $recipe->recipe_id)); ?>" method="POST">

          <a href="<?php echo e(route('recipes.show', $recipe->recipe_id)); ?>" title="wyświetl" class="btn btn-success">Wyświetl</a>

          <?php if(auth()->guard()->check()): ?>
          <?php if(Auth::user()->role=='admin' or Auth::user()->name==$recipe->owner): ?>
          <a href="<?php echo e(route('recipes.edit', $recipe->recipe_id)); ?>" title="edytuj" class="btn btn-primary">Edytuj</a>

          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>

          <button type="submit" title="delete" title="usuń" class="btn btn-danger">Usuń</button>

          </button>
          <?php endif; ?>
          <?php endif; ?>
        </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table> -->
<!-- cards -->
<div class="row">
  <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-3 mt-auto h-100 cards mt-2 mb-3">
    <div class="card  " style="width: 18rem;">
      <img src="<?php echo e(asset('uploads/recipes/'.$recipe->photo)); ?>" class="card-img-top" height="300px" width="400px" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($recipe->title); ?></h5>
        <p class="card-text text-limit "><?php echo e($recipe->products); ?></p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

        <form action="<?php echo e(route('recipes.destroy', $recipe->recipe_id)); ?>" method="POST">

          <a href="<?php echo e(route('recipes.show', $recipe->recipe_id)); ?>" title="wyświetl" class="btn btn-success">Wyświetl</a>

          <?php if(auth()->guard()->check()): ?>
          <?php if(Auth::user()->role=='admin' or Auth::user()->name==$recipe->owner): ?>
          <a href="<?php echo e(route('recipes.edit', $recipe->recipe_id)); ?>" title="edytuj" class="btn btn-primary">Edytuj</a>

          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>

          <button type="submit" title="delete" title="usuń" class="btn btn-danger">Usuń</button>

          </button>
          <?php endif; ?>
          <?php endif; ?>
        </form>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<!-- cards  -->

<?php echo $recipes->links("pagination::bootstrap-4"); ?>-

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ZeroWaste\zeroWaste\example\resources\views/recipes/recipes.blade.php ENDPATH**/ ?>