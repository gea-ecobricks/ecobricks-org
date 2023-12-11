

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
$table = 'vw_rev_cash_tran_desc';
 
// Table's primary key
$primaryKey = 'cash_tran_id'; 
 

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
  array( 'db' => 'cash_tran_id',     'dt' => 0,
  'formatter' => function( $d, $row ) {
    return '<a href="details-ecobrick.php?serial_no='.($d).'" target="popup"
    onclick="window.open(\'details-cash-trans.php?cash_tran_id='.($d).'\',\'popup\',\'width=600,height=800\'); return false;">'.($d).'</a>';
}

),

  array(
    'db'        => 'transaction_date_dt',
    'dt'        => 1,
    'formatter' => function( $d, $row ) {
        return '<var>'.date($d).'<var>'; 
    }
),
    array( 'db' => 'sender_for_display',     'dt' => 2 ),
    array( 'db' => 'revenue_accounting_type',     'dt' => 3 ),
    array( 'db' => 'tran_name_desc', 'dt' => 4 ),
    array(
        'db'        => 'usd_amount',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return '<var>'.number_format($d,2).'&#8202;$ USD</var>';
        }
    ),
    array(
        'db'        => 'native_ccy_amt_display',
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
		
			
