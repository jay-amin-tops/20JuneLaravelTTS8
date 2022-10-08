<div id="page-wrapper">
    <div class="main-page">
        <div class="col_3">
            <div class="clearfix"> </div>
        </div>

        <div class="charts">
            <div class="mid-content-top charts-grids">
                <div class="middle-content">
                    <h4 class="title">Edit User</h4>
                    <div class="row">
                        <form enctype="multipart/form-data" method="post">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <label for="username">User Name</label>
                                        <input class="form-control" type="text" value="<?php echo $UsersDataById['Data'][0]->username; ?>" name="username" id="username">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="fullname">Full Name</label>
                                        <input class="form-control" type="text" value="<?php echo $UsersDataById['Data'][0]->fullname; ?>" name="fullname" id="fullname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="email">email</label>
                                        <input class="form-control" type="text" value="<?php echo $UsersDataById['Data'][0]->email; ?>" name="email" id="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="mobile">mobile</label>
                                        <input class="form-control" type="text" value="<?php echo $UsersDataById['Data'][0]->mobile; ?>" name="mobile" id="mobile">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="gender">gender</label> <br>
                                        <input type="radio" <?php if ($UsersDataById['Data'][0]->gender == "Male") {
                                                                echo "checked";
                                                            }; ?> value="Male" name="gender" id="Male"> <label for="Male"> Male</label>
                                        <input type="radio" <?php if ($UsersDataById['Data'][0]->gender == "Female") {
                                                                echo "checked";
                                                            }; ?> value="Female" name="gender" id="Female"> <label for="Female"> Female</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="hobbies">Hobby</label> <br>
                                        <input type="checkbox" value="Cricket" name="chk[]" id="Cricket"> <label for="Cricket"> Cricket</label>
                                        <input type="checkbox" value="Music" name="chk[]" id="Music"> <label for="Music"> Music</label>
                                        <input type="checkbox" value="Reading" name="chk[]" id="Reading"> <label for="Reading"> Reading</label>
                                        <input type="checkbox" value="Travelling" name="chk[]" id="Travelling"> <label for="Travelling"> Travelling</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="city">City</label> <br>
                                        <select name="city" id="city">
                                            <option value="">Select City</option>
                                            <?php foreach ($allCitiesData['Data'] as $key => $value) { ?>
                                                <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="prof_pic">Profile Pic</label> <br>
                                        <input type="file" name="prof_pic" id="prof_pic">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--//sreen-gallery-cursual---->
            </div>
        </div>
    </div>
</div>