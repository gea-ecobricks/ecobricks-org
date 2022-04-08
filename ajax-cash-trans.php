

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
$table = 'vw_cash_tran_desc';
 
// Table's primary key
$primaryKey = 'knack_record_id';
 

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
  array( 'db' => 'cash_tran_id',     'dt' => 0,
  'formatter' => function( $d, $row ) {
    return '<a href="cash-details.php?='.($d).'"><var>'.($d).'</var></a>';
}
),

  array(
    'db'        => 'datetime_sent_ts',
    'dt'        => 1,
    'formatter' => function( $d, $row ) {
        return '<var>'.date($d).'<var>';
    }
),

    array( 'db' => 'sender_for_display',     'dt' => 2 ),
    array( 'db' => 'receiver_for_display',     'dt' => 3 ),
    array( 'db' => 'tran_name_desc', 'dt' => 4 ),
    array(
        'db'        => 'native_ccy_amt',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return '<var>'.number_format($d,2).'</var>';
        }
    ),
    array(
        'db'        => 'currency_code',
        'dt'        => 6,
    ),

    array( 'db' => 'type_of_transaction',
    'dt' => 7,
),
  
);

 
// SQL server connection information
$sql_details = array(
    'user' => 'ecobricks_russs',
    'pass' => '1ecobricks!',
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
		
			
