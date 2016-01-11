<?php
    require_once 'paginator.php';
    $conn = new mysqli("localhost", 'root', 'aftermath7');
 
    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 5;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query      = "SELECT * FROM  members"; 
    $Paginator  = new Paginator( $conn, $query );
 
    $results    = $Paginator->getData( $limit , $page );
?>
<!DOCTYPE html>
    <head>
        <title>PHP Pagination</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
                <div class="col-md-10 col-md-offset-1">
                <h1>PHP Pagination</h1>
                <table class="table table-striped table-condensed table-bordered table-rounded">
                        <thead>
                            <tr>
                                <th>City</th>
                                <th width="20%">Name</th>
                                <th width="20%">Email</th>
                                <th width="25%">Contact</th>
                                <th width="25%">Status</th>
                            </tr>
                        <tbody>
                        <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                        <tr>
                                    <td><?php echo $results->data[$i]['name']; ?></td>
                                    <td><?php echo $results->data[$i]['email']; ?></td>
                                    <td><?php echo $results->data[$i]['about']; ?></td>
                                    <td><?php echo $results->data[$i]['contact']; ?></td>
                                    <td><?php echo $results->data[$i]['status']; ?></td>
                        </tr>
                        <?php endfor; ?>
                        </tbody>
                </table>
                <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?>
                </div>
        </div>
        </body>
</html>