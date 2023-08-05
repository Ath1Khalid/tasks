
<div class="patterns pt1">
<h1>To Do Tasks</h1>
<div class="tasks">

<ol>
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($task->title); ?> - Due: <?php echo e($task->due_date); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
</div>
<div class="footer">
     <p>2023</p>
    </div>
</div>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\knaaj\finalboss\resources\views/tasks/todo.blade.php ENDPATH**/ ?>