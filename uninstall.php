<?php
global $wpdb;

	$table_name = $wpdb->prefix . "mlw_results";

	$sql = "DROP TABLE IF EXISTS ".$table_name;

	$results = $wpdb->query( $sql );

	$table_name = $wpdb->prefix . "mlw_quizzes";

	$sql = "DROP TABLE IF EXISTS ".$table_name;

	$results = $wpdb->query( $sql );

	$table_name = $wpdb->prefix . "mlw_questions";

	$sql = "DROP TABLE IF EXISTS ".$table_name;
	
	$results = $wpdb->query( $sql );
	
	$table_name = $wpdb->prefix . "mlw_qm_audit_trail";

	$sql = "DROP TABLE IF EXISTS ".$table_name;
	
	$results = $wpdb->query( $sql );
?>
