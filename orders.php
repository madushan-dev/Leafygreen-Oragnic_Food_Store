<!-- Including Header -->
<?php include_once 'resources/header.php'; ?>
<!---------------------->
<section class="bottom-header ">
    <div class="user-bar d-flex justify-content-between align-items-center">
        <h2 class="dashboard-username">Welcome Admin!</h2>
        <a href="#" class="btn btn-danger" role="button">Logout</a>
    </div>
</section>

<section class="mt-5 dashboard">
    <div class="row">
        <div class="col-3">
            <div class="dashboard-menu">

                <div class="list-group">

                    <button type="button" class="list-group-item list-group-item-action ">Dashboard</button>
                    <button type="button" class="list-group-item list-group-item-action ">Products</button>
                    <button type="button" class="list-group-item list-group-item-action menu-active ">Orders</button>
                    <button type="button" class="list-group-item list-group-item-action">Users</button>
                    <button type="button" class="list-group-item list-group-item-action">Stores</button>
                    <button type="button" class="list-group-item list-group-item-action">Inquires</button>
                    <button type="button" class="list-group-item list-group-item-action">Edit Profile</button>


                </div>


            </div>


        </div>
        <div class="col-9 dashboard-orders dashboard-table">

            <table class="table table-hover order-table ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Total Payment</th>
                        <th scope="col">Payment Type</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td class="tools"><i class="fa fa-pencil-square-o edit px-2"></i> <i class="fa fa-window-close-o delete px-2"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td class="tools"><i class="fa fa-pencil-square-o edit px-2"></i> <i class="fa fa-window-close-o delete px-2"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td class="tools"><i class="fa fa-pencil-square-o edit px-2"></i> <i class="fa fa-window-close-o delete px-2"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td class="tools"><i class="fa fa-pencil-square-o edit px-2"></i> <i class="fa fa-window-close-o delete px-2"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td class="tools"><i class="fa fa-pencil-square-o edit px-2"></i> <i class="fa fa-window-close-o delete px-2"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td class="tools"><i class="fa fa-pencil-square-o edit px-2"></i> <i class="fa fa-window-close-o delete px-2"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>



</section>




<!-- Including Footer -->
<?php include_once 'resources/footer.php'; ?>
<!---------------------->