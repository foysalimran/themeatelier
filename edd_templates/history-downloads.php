<?php

/**
 * Shortcode: Download History - [download_history]
 *
 * @package EDD
 * @category Template
 *
 * @since 3.0 Uses new `edd_get_orders()` function and associated helpers.
 *            Checks status on individual order items when determining download link visibility.
 */

if (! empty($_GET['edd-verify-success'])) : ?>
	<p class="edd-account-verified edd_success">
		<?php esc_html_e('Your account has been successfully verified!', 'themeatelier'); ?>
	</p>
<?php
endif;
/**
 * This template is used to display the download history of the current user.
 */
$customer = edd_get_customer_by('user_id', get_current_user_id());
$page     = get_query_var('paged') ? get_query_var('paged') : 1;

if (! empty($customer)) {
	$orders = edd_get_orders(
		array(
			'customer_id'    => $customer->id,
			'number'         => 20,
			'offset'         => 20 * (intval($page) - 1),
			'type'           => 'sale',
			'status__not_in' => array('trash', 'refunded', 'abandoned'),
		)
	);
} else {
	$orders = array();
}

if ($orders) :
	do_action('edd_before_download_history'); ?>
	<table id="edd_user_history" class="edd-table w-full">
		<?php
		foreach ($orders as $order) :
			foreach ($order->get_items_with_bundles() as $key => $item) :


				$product_meta = get_post_meta($item->product_id);
				$edd_sl_version = isset($product_meta['_edd_sl_version'][0]) ? $product_meta['_edd_sl_version'][0] : null;
		?>

				<tr class="flex items-center justify-between edd_download_history_row">
					<?php
					$name           = $item->product_name;
					$price_id       = $item->price_id;
					$download_files = edd_get_download_files($item->product_id, $price_id);
					$download_name = edd_get_download_name($item->product_id);
					$price_name = edd_get_price_option_name($item->product_id, $price_id);

					do_action('edd_download_history_row_start', $order->id, $item->product_id);
					?>
					<td class="edd_download_download_name">
						<?php
						$download_image =  get_post_meta($item->product_id, 'edd_download_images', true);
						if($download_image) {
							$download_image = $download_image[0]['image'];
						}
						?>
						<div class="flex gap-2 items-center">
							<?php
							if($download_image) {
								?>
								<img class="w-16 h-16 rounded-md" src="<?php echo esc_url($download_image); ?>" alt="">
								<?php
							}
							?>
							<div class="">
								<h4><?php echo esc_html($download_name); ?></h4>
								<p><?php echo esc_html($price_name); ?></p>
							</div>
						</div>

					</td>

					<?php if (! edd_no_redownload()) : ?>
						<td class="edd_download_download_files">
							<?php
							if ($item->is_deliverable()) :

								if ($download_files) :

									foreach ($download_files as $filekey => $file) :

										$download_url = edd_get_download_file_url($order, $order->email, $filekey, $item->product_id, $price_id);
							?>

										<div class="edd_download_file">
											<a href="<?php echo esc_url($download_url); ?>" class="edd_download_file_link">
												<?php echo esc_html__('Download', 'themeatelier'); ?>
											</a>
										</div>

								<?php
										do_action('edd_download_history_download_file', $filekey, $file, $item, $order);
									endforeach;

								else :
									esc_html_e('No downloadable files found.', 'themeatelier');
								endif; // End if payment complete

							else : ?>
								<span class="edd_download_payment_status">
									<?php
									printf(
										/* translators: the order item's status. */
										esc_html__('Status: %s', 'themeatelier'),
										esc_html(edd_get_status_label($item->status))
									);
									?>
								</span>
							<?php
							endif; // End if $download_files
							?>
						</td>
					<?php endif; // End if ! edd_no_redownload()

					do_action('edd_download_history_row_end', $order->id, $item->product_id);
					?>
				</tr>
		<?php
			endforeach; // End foreach get_items()
		endforeach;
		?>
	</table>
	<?php
	if (! empty($customer->id)) {
		$count = edd_count_orders(
			array(
				'customer_id'    => $customer->id,
				'type'           => 'sale',
				'status__not_in' => array('trash', 'refunded', 'abandoned'),
			)
		);
		echo edd_pagination(
			array(
				'type'  => 'download_history',
				'total' => ceil($count / 20), // 20 items per page
			)
		);
	}
	?>
	<?php do_action('edd_after_download_history'); ?>
<?php else : ?>
	<p class="edd-no-downloads rounded-md px-10 py-10 shadow-lg text-red-500 font-normal border border-solid border-secondary"><?php esc_html_e('You have not purchased any downloads', 'themeatelier'); ?></p>
<?php endif; ?>