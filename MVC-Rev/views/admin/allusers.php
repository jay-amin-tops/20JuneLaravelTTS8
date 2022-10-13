<div id="page-wrapper">
    <div class="main-page">
        <div class="col_3">
            <div class="clearfix"> </div>
        </div>

        <div class="charts">
            <div class="mid-content-top charts-grids">
                <div class="middle-content">
                    <h4 class="title">All Users</h4>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>User Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Pic</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($AllUsersData['Data'] as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $value->username; ?></td>
                                    <td><?php echo $value->gender; ?></td>
                                    <td><?php echo $value->email; ?></td>
                                    <td><img src="uploads/<?php echo $value->prof_pic; ?>" alt="" width="80px"> </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="edituser?userid=<?php echo $value->id; ?>"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-sm btn-danger" href="deleteuser?userid=<?php echo $value->id; ?>"><i class="fa fa-trash"></i></a>
                                        
                                    </td>
                                </tr>
                            <?php  $i++; } ?>
                        </tbody>
                    </table>

                </div>
                <!--//sreen-gallery-cursual---->
            </div>
        </div>
    </div>
</div>