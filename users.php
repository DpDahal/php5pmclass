<?php
require_once('connection.php');
/*
 * show students data
 */
$query = "SELECT * FROM tbl_students ORDER BY  sid DESC ";
$result = mysqli_query($conn, $query);
$numberOfColumns = mysqli_num_rows($result);

/*
 *  this is for search data
 */
if (isset($_POST['searchData']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['search_data'];
    $query = "SELECT * FROM tbl_students WHERE name LIKE '%$data%' OR email
              LIKE '%$data%'  OR gender LIKE '%$data%'
              OR 
               country LIKE '%$data%'
               OR 
                language LIKE '%$data%'
              
               ";
    $result = mysqli_query($conn, $query);
    $numberOfColumns = mysqli_num_rows($result);

}


?>

<?php require_once('header.php') ?>

<div class="col-md-12">
    <h3><i class="glyphicon glyphicon-eye-open"></i> Users </h3>
    <hr>

    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group pull-right">
                <input type="text" name="search_data">
                <button name="searchData">Search</button>
            </div>
        </form>
    </div>


    <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success"><?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?></div>
    <?php endif; ?>

    <table class="table table-hover">
        <tr>
            <th>s.n</th>
            <th>name</th>
            <th>email</th>
            <th>gender</th>
            <th>language</th>
            <th>country</th>
            <th>image</th>
            <th>action</th>
        </tr>
        <?php if ($numberOfColumns > 0) : ?>
            <?php foreach ($result as $key => $students) : ?>

                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $students['name'] ?></td>
                    <td><?= $students['email'] ?></td>
                    <td><?= $students['gender'] ?></td>
                    <td><?= $students['language'] ?></td>
                    <td><?= $students['country'] ?></td>
                    <td><img src="userimages/<?= $students['image'] ?>" alt="image not found" width="30" data-action="zoom"></td>
                    <td>
                        <a href="" class="btn btn-info btn-xs"> <i class="fa fa-eye"></i> </a>
                        <a href="" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> </a>
                        <a href="" class="btn btn-danger btn-xs" onclick="return confirm('are you sure delete')">
                            <i class="fa fa-trash" ></i> </a>
                    </td>
                </tr>

            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7"><a href="">Data not found</a></td>
            </tr>

        <?php endif; ?>

    </table>


</div>


<?php require_once('footer.php') ?>




