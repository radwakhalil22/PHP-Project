<?php require '../../../Classes/Group.php'; ?>

<?php
if (isset($_GET['id'])) {
	
        // $id = $_GET['id'];
        $id = 1;
        // $group = new Group();   
        // $edit_group = $group->readPostById($id);    
    } 
    $id = 1;
      
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<section>
    <div class="container py-4 border my-5 mx-auto">
        <form action="update.php" method="POST" class="w-75 mx-auto">
            <div class=" mb-3">
                <label for="name" class="form-label">Group Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Description</label>
                <input type="email" class="form-control" name="description" id="description">
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label">Avatar</label>
                <input type="file" class="form-control" name="avatar" id="avatar">
            </div>

            <div class="mb-3 text-center mt-5">
                <input type="submit" class="btn btn-primary me-1 rounded-1" name="update">
                <a href="index.php" class="btn btn-danger">cancel</a>
            </div>
        </form>
    </div>
</section>