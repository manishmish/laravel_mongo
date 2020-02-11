<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Index Page</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
</head>

<body>
  <div class="container">
    <br />

    <?php if(\Session::has('success')): ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
      <strong><?php echo e(\Session::get('success')); ?></strong>
    </div><br />
    <?php endif; ?>
    <h6 class="m-0 font-weight-bold text-primary"><a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="float: right;" href="<?php echo e(action('CarController@create')); ?>"><i class="fa fa-plus"></i> Add </a></h6>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Company</th>
          <th>Model</th>
          <th>Price</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($car->id); ?></td>
          <td><?php echo e($car->carcompany); ?></td>
          <td><?php echo e($car->model); ?></td>
          <td><?php echo e($car->price); ?></td>
          <td><a href="<?php echo e(action('CarController@edit', $car->id)); ?>" class="btn btn-warning">Edit</a></td>
          <td>
            <form action="<?php echo e(action('CarController@destroy', $car->id)); ?>" method="post">
              <?php echo csrf_field(); ?>
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</body>

</html><?php /**PATH D:\Extra_Projects\mongo\resources\views/carindex.blade.php ENDPATH**/ ?>