<?php
require_once('connection.php');
?>

<?php require_once ('header.php') ?>
        <div class="col-md-12">
            <h3><i class="glyphicon glyphicon-user"></i> Add Record</h3>
            <hr>


            <div class="col-md-12">
                <?php if(isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger"><?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?></div>
                <?php endif;  ?>


            </div>


            <form action="http://www.php5pmclass.com/insert.php" method="post" enctype="multipart/form-data">

                <div class="col-md-6">
                    <div class="input-group form-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-user"></i></span>
                        <input type="text" name="name" required class="form-control" placeholder="Username"
                               aria-describedby="sizing-addon3">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="input-group form-group  input-group-sm">
                        <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-envelope"></i></span>
                        <input type="text" name="email" class="form-control" placeholder="enter your email "
                               aria-describedby="sizing-addon3">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group form-group  input-group-sm">
                        <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="enter your password "
                               aria-describedby="sizing-addon3">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group form-group  input-group-sm">
                                <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-globe"></i></span>
                                <select name="country" id="" class="form-control">
                                    <option value="nepal">Nepal</option>
                                    <option value="china">China</option>
                                    <option value="india">India</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group form-group  input-group-sm">
                                <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-image"></i></span>
                                <input type="file" name="upload" class="form-control" aria-describedby="sizing-addon3">
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary btn-sm">
                            <input type="checkbox" name="gender" value="male" autocomplete="off"><i
                                    class="fa fa-male"></i> Male
                        </label>
                        <label class="btn btn-primary btn-sm">
                            <input type="checkbox" name="gender" value="female" autocomplete="off"><i
                                    class="fa fa-female"></i> Female
                        </label>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="input-group form-group  input-group-sm">
                        <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-language"></i></span>
                        <input type="text" name="language" value="english,nepali" class="form-control"
                               data-role="tagsinput" aria-describedby="sizing-addon3">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="form-group">
                        <button class="btn btn-primary"><i class="glyphicon glyphicon-plus "></i> Add Record</button>
                    </div>
                </div>
            </form>


        </div>


<?php require_once ('footer.php') ?>

