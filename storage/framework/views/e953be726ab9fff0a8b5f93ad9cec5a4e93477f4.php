<?php $__env->startSection('main'); ?>
<div class="row">

<div class="col-sm-12">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success text-center">
      <?php echo e(session()->get('success')); ?>  
    </div>
  <?php endif; ?>
</div>

<div class="col-sm-12">
<br />
<h3 class="display-5 text-center">Student List</h3>    
  <table class="table table-striped">
    <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$count); ?></td>
            <td><a href="<?php echo e(route('students.show',$student->id)); ?>"><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></a></td>
            <td><?php echo e($student->email); ?></td>
            <td class="text-center">
                <a href="<?php echo e(route('students.edit',$student->id)); ?>" class="btn btn-primary btn-block">Edit</a>
            </td>
            <td class="text-center">
                <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger btn-block" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <div class="text-center">
    <a style="margin: 19px;" href="<?php echo e(route('students.create')); ?>" class="btn btn-primary">New Student Details</a>
  </div>
<div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\students\resources\views/students/index.blade.php ENDPATH**/ ?>