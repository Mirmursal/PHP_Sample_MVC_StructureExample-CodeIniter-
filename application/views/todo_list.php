<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php $this->load->view("dependencies/style.php");?>

</head>
<body>
<div class="container">
    <h3 class="text-center">TODO List</h3>
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url("todo/insert");?>" method="post">
                <div class="form-group col-md-11">
                    <input type="text" class="form-control" name="todo_title">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary">SAVE</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                   <th class="text-center">Description</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Remove</th>
                </thead>
                <tbody>
                <?php foreach ($todos as $todo){?>
                   <tr>
                       <td class="text-left"><?php echo $todo->title ; ?></td>
                       <td class="text-left" style="width:120px">
                           <input type="checkbox"
                                  class="js-switch"
                                  data-url="<?php echo base_url("todo/iscompletedsetter/$todo->id");?>"
                               <?php echo ($todo->isCompleted == true) ? "checked" : "";?> />
                       </td>
                       <td class="text-left" style="width:120px">
                           <a href="<?php echo base_url("todo/delete/$todo->id");?>" class="btn btn-danger">Remove</a>
                       </td>
                   </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<?php $this->load->view("dependencies/script.php");?>
</body>
</html>