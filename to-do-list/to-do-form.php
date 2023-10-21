<?php
         include("create-to-do.php");
         include("edit-to-do.php");
         include("update-to-do.php");

        $editTask = editTaskById();
        $createTask = createTask();

        if(isset($_GET['edit-task'])) {
            $createTask = updateTaskById();

        }

?>
  <form method="post">    
    <p class="text-danger">
        <?php 
         echo $createTask['success']??'';
         echo $createTask['taskMsg']??''; 
         ?>
    </p>
 
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Enter Something..." name="task" value="<?php echo $editTask['task']??''; ?>">
      <button type="submit" class="btn btn-primary" name="<?php echo count($editTask)?'update':'add'; ?>"><?php echo count($editTask)?'update':'add'; ?></button>
    </div>

  </form>