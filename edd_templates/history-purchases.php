<?php
/**
 * Shortcode: Purchase History - [purchase_history]
 *
 * @package EDD
 * @category Template
 *
 * @since 3.0 Allow details link to appear for `partially_refunded` orders.
 */

if ( ! empty( $_GET['edd-verify-success'] ) ) : ?>
	<p class="edd-account-verified edd_success">
		<?php esc_html_e( 'Your account has been successfully verified!', 'themeatelier' ); ?>
	</p>
	<?php
endif;
/**
 * This template is used to display the purchase history of the current user.
 */
if ( ! is_user_logged_in() ) {
	return;
}
$page    = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$user_id = get_current_user_id();
$orders  = edd_get_orders(
	array(
		'user_id'        => $user_id,
		'number'         => 20,
		'offset'         => 20 * ( intval( $page ) - 1 ),
		'type'           => 'sale',
		'status__not_in' => array( 'trash' ),
	)
);

/**
 * Fires before the order history, whether or not orders have been found.
 *
 * @since 3.0
 * @param array $orders  The array of order objects for the current user.
 * @param int   $user_id The current user ID.
 */
do_action( 'edd_pre_order_history', $orders, $user_id );

if ( $orders ) :
	do_action( 'edd_before_order_history', $orders );
	?>
	<table id="edd_user_history" class="edd-table">
		<thead>
			<tr class="edd_purchase_row">
				<?php do_action( 'edd_purchase_history_header_before' ); ?>
				<th class="edd_purchase_id"><?php esc_html_e( 'Order ID', 'themeatelier' ); ?></th>
				<th class="edd_purchase_date"><?php esc_html_e( 'Date', 'themeatelier' ); ?></th>
				<th class="edd_purchase_amount"><?php esc_html_e( 'Amount', 'themeatelier' ); ?></th>
				<th class="edd_purchase_status"><?php esc_html_e( 'Status', 'themeatelier' ); ?></th>
				<?php do_action( 'edd_purchase_history_header_after' ); ?>
			</tr>
		</thead>
		<?php foreach ( $orders as $order ) : ?>
			<tr class="edd_purchase_row">
				<?php do_action( 'edd_order_history_row_start', $order ); ?>
				<td class="edd_purchase_id">#<?php echo esc_html( $order->get_number() ); ?></td>
				<td class="edd_purchase_date"><?php echo esc_html( edd_date_i18n( EDD()->utils->date( $order->date_created, null, true )->toDateTimeString() ) ); ?></td>
				<td class="edd_purchase_amount">
					<span class="edd_purchase_amount"><?php echo esc_html( edd_display_amount( $order->total, $order->currency ) ); ?></span>
				</td>
				<td class="edd_purchase_status <?php echo esc_attr( $order->status ); ?>"><?php echo esc_html( $order->status ); ?></td>
				<?php do_action( 'edd_order_history_row_end', $order ); ?>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php
	$count = edd_count_orders(
		array(
			'user_id' => get_current_user_id(),
			'type'    => 'sale',
		)
	);
	echo edd_pagination(
		array(
			'type'  => 'purchase_history',
			'total' => ceil( $count / 20 ), // 20 items per page
		)
	);
	do_action( 'edd_after_order_history', $orders );
	?>
<?php else : ?>
	<p class="edd-no-purchases rounded-md px-10 py-10 shadow-lg text-red-500 font-normal border border-solid border-secondary"><?php esc_html_e( 'You have not made any purchases.', 'themeatelier' ); ?></p>
	<?php
endif;
