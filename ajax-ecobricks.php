

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
$table = 'vw_ecobricks_desc';
 
// Table's primary key
$primaryKey = 'serial_no';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'ecobrick_full_photo_url',
    'dt' => 0,
'formatter' => function( $d, $row ) {
    return '<img src="'.($d).'" width="100" alt="Ecobrick basic pic"/>';
}
),

  array(
    'db'        => 'date_logged_ts',
    'dt'        => 1,
    'formatter' => function( $d, $row ) {
        return '<var>'.date( 'jS M y', strtotime($d)).'</var>';
    }
),

    array( 'db' => 'ecobricker_maker',
            'dt' => 2,
            'formatter' => function( $d, $row ) {
                return '<var>'.($d).'</var>';
            }
        ),


    array( 'db' => 'weight_g', 
           'dt'        => 3,
           'formatter' => function( $d, $row ) {
            return '<var>'.($d).'&#8202;g</var>';
        }
    ),
    
    array( 'db' => 'ecobrick_brk_amt',   
            'dt'        => 4,
            'formatter' => function( $d, $row ) {
               return '<var>'.number_format($d,2).'&#8202;ß</var>';
        } 
    ),
   
    array(
        'db'        => 'volume_ml',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return '<var>'.number_format($d).'&#8202;mL</var>';
        }
    ),

    array(
        'db'        => 'CO2_kg',
        'dt'        => 6,
        'formatter' => function( $d, $row ) {
            return '<var>'.number_format($d,2).'&#8202;kg</var>';
        }
    ),
    array( 'db' => 'serial_no',     
        'dt' => 7,
        'formatter' => function( $d, $row ) {
            return '<a href="details-ecobrick.php?serial_no='.($d).'" target="popup"
            onclick="window.open(\'details-ecobrick.php?serial_no='.($d).',\'popup\',\'width=600,height=600\'); return false;" rel="nooperner">'.($d).'</a>';
        }
    ),
  
);



/*    

     array( 'db' => 'serial_no',     
        'dt' => 7,
        'formatter' => function( $d, $row ) {
            return '<a href="details-ecobrick.php?serial_no='.($d).'">'.($d).'</a>';
        }
    ),

    */

 
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
		
			
