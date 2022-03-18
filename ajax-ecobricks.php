

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
$table = 'tb_ecobricks';
 
// Table's primary key
$primaryKey = 'serial_no';
 

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'basic_pic_url',
    'dt' => 0,
'formatter' => function( $d, $row ) {
    return '<img src="'.($d).'" width="100" alt="Ecobrick basic pic"/>';
}
),

  array(
    'db'        => 'date_logged_ts',
    'dt'        => 1,
    'formatter' => function( $d, $row ) {
        return date( 'jS M y', strtotime($d));
    }
),

    array( 'db' => 'ecobricker_maker',     'dt' => 2 ),


    array( 'db' => 'weight_g', 
           'dt'        => 3,
           'formatter' => function( $d, $row ) {
            return ($d).'g';
        }
    ),
    
    array( 'db' => 'ecobrick_brikcoin_value',   
            'dt'        => 4,
            'formatter' => function( $d, $row ) {
            return $d.'ß';
        } 
    ),

   
    array(
        'db'        => 'volume_ml',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return number_format($d,2).'mL';
        }
    ),

    array(
        'db'        => 'CO2_kg',
        'dt'        => 6,
        'formatter' => function( $d, $row ) {
            return number_format($d,2).'kg';
        }
    ),
    array( 'db' => 'serial_no',     
        'dt' => 7,
        'formatter' => function( $d, $row ) {
            return '<a href="details.php?='.($d).'">'.($d).'</a>';
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
		
			
