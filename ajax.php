

        <?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'brk_transaction';
 
// Table's primary key
$primaryKey = 'tran_id';
 

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
  array( 'db' => 'tran_id',     'dt' => 0 ),
  array(
    'db'        => 'send_dt',
    'dt'        => 1,
    'formatter' => function( $d, $row ) {
        return date( 'jS M y', strtotime($d));
    }
),
    array( 'db' => 'sender_ecobricker',     'dt' => 2 ),
    array( 'db' => 'receiver_or_receivers',     'dt' => 3 ),
    array( 'db' => 'block_tran_type', 'dt' => 4 ),
   
    array(
        'db'        => 'block_amt',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return number_format($d,2).'ß';
        }
    ),
    array( 'db' => 'serial',     'dt' => 6 )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'ecobricks_russs',
    'pass' => '12345',
    'db'   => 'ecobricks_gobrik_msql_db',
    'host' => 'localhost'
);
 


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

?>
		
			
