<?php
#Ajax need seperate php to handle the requests cz it returns all php elements including html as the server response

#Starting sessions
session_start();

#Including DB Connection
include_once 'resources/db.php';

#PHP for send data to the DB
    
    $sql = "SELECT * FROM products,users,category where c_id=p_c_id and p_s_id = u_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $num=1;

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>
            <th scope='row'>".$num++."</th>
            <td>".$row["p_name"]."</td>
            <td>".$row["c_name"]."</td>
            <td>".$row["description"]."</td>
            <td>".$row["price"]."</td>
            <td>@mdo</td>
            <td>".$row["name"]."</td>
            <td class='tools'>
            <button id='p".$row["p_id"]."' type='button' class='btn btn-primary bg-warning' data-toggle='modal' data-target='#exampleModalCenter".$row["p_id"]."'>
            <i class='fa fa-pencil-square-o edit px-2 text-dark'></i>
            </button>

            <div class='modal fade' id='exampleModalCenter".$row["p_id"]."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Edit Product Details</h5>
                    <button type='button' class='close btn btn-secondary bg-danger' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    ".$row["p_id"]."
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='button' class='btn btn-primary'>Save changes</button>
                </div>
                </div>
            </div>
            </div>
            
            <button id='c".$row["p_id"]."' type='button' class='btn btn-primary bg-danger' value='".$row["p_id"]."''>
            <i class='fa fa-window-close-o delete px-2 text-light'></i></td>
            </button>
            <script>
            $(document).ready(function(){
              $('#c".$row["p_id"]."').click(function(){
                if(confirm('Are you sure you want to delete product : ".$row["p_name"]."')){
                    var val = $('#c".$row["p_id"]."').val();
                    $.ajax({
                        type: 'GET',
                        url: './admin-productsDelete.php',
                        data: { id: val },
                        success: function(response) {
                            alert('product removed');
                            window.location.href = './products.php';

                        }
                    });
                }
              });
            });
            </script>
            </div>
        </tr>
    
        ";
    }

?> 

