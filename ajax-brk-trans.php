

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
$table = 'vw_brk_tran_ledgerid_desc';
 
// Table's primary key
$primaryKey = 'chain_ledger_id';
 

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes



$columns = array(

    array(    'db' => 'chain_ledger_id',     
    'dt' => 0,
    'formatter' => function( $d, $row ) {
        return '📂 <a href="details-brk-trans.php?tran_id='.($d).'" target="popup"
        onclick="window.open(\'details-brk-trans.php?tran_id='.($d).'\',\'popup\',\'width=600,height=800\'); return false;">'.($d).'</a>';
    }
),

array(
    'db'        => 'send_dt',
    'dt'        => 1,
    'formatter' => function( $d, $row ) {
        return ''.date($d).''; 
    }
),
    array( 'db' => 'sender',     'dt' => 2 ),
    //array( 'db' => 'receiver_or_receivers',     'dt' => 3 ),
    array( 'db' => 'block_tran_type', 'dt' => 3 ),
   
   // array(
     //   'db'        => 'block_amt',
     //   'dt'        => 5,
     //   'formatter' => function( $d, $row ) {
     //       return '<var>'.number_format($d,2).'&#8202;ß</var>';
     //   }
   // ),
    array(
        'db'        => 'individual_amt',
        'dt'        => 4,
        'formatter' => function( $d, $row ) {
            return '<var>'.number_format($d,2).'&#8202;ß</var>';
        }
    ),



    array( 'db' => 'ecobrick_serial_no',     
'dt' => 5,
'formatter' => function( $d, $row ) {
    return '🔎 <a href="details-ecobrick-page.php?serial_no='.($d).'">'.($d).'</a>';
}
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
	
