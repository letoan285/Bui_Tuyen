<?php
include_once "header.php";
?>
    <div class="container">
        <div class="register mt-5">
            <h2 class="text-center">Registration</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pb-5">
                    <!--Form with header-->
                    <form action="check-register.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <p class="m-0">Please fill in this form to register your account.</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="User Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="fullName" name="full-name" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <label for="">Ban noi ngoai ngu nao</label>
                                        <select name="lang[]" id="" multiple>
                                            <option value="1">Anh</option>
                                            <option value="2">Nhat</option>
                                            <option value="3">Trung</option>
                                            <option value="4">Phap</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-lock text-info"></i></div>
                                        </div>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <p> Already Register  ? <a href="login.php">Login here</a> </p>
                                <div class="text-center">
                                    <input type="submit" value="Register" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->
                </div>
            </div>
        </div>
    </div>
    <?php
include_once "footer.php";
?>