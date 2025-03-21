<?php

/**
 *  EDD Template File for [edd_subscriptions] shortcode
 *
 * @description: Place this template file within your theme directory under /my-theme/edd_templates/
 *
 * @copyright  : http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since      : 2.4
 */

//For logged in users only
if (is_user_logged_in()):

	if (! empty($_GET['updated']) && '1' === $_GET['updated']) :

?>
		<div class="edd-alert edd-alert-success">
			<?php _e('<strong>Success:</strong> Subscription payment method updated', 'edd-recurring'); ?>
		</div>
	<?php

	endif;

	//Get subscription
	$subscriber    = new EDD_Recurring_Subscriber(get_current_user_id(), true);
	$subscriptions = $subscriber->get_subscriptions(0, array('active', 'expired', 'cancelled', 'failing', 'trialling'));

	if ($subscriptions) :
		do_action('edd_before_purchase_history'); ?>

		<table id="edd_user_history" class="edd-table">
			<thead class="bg-secondary">
				<tr class="edd_purchase_row">
					<?php do_action('edd_recurring_history_header_before'); ?>
					<th><?php _e('Subscription', 'edd-recurring'); ?></th>
					<th><?php _e('Status', 'edd-recurring'); ?></th>
					<th><?php _e('Renewal Date', 'edd-recurring'); ?></th>
					<th><?php _e('Initial Amount', 'edd-recurring'); ?></th>
					<th><?php _e('Actions', 'edd-recurring'); ?></th>
					<th><?php _e('Billing Info', 'edd-recurring'); ?></th>
					<?php do_action('edd_recurring_history_header_after'); ?>
				</tr>
			</thead>
			<?php foreach ($subscriptions as $subscription) :
				$frequency    = EDD_Recurring()->get_pretty_subscription_frequency($subscription->period);
				$renewal_date = ! empty($subscription->expiration) ? date_i18n(get_option('date_format'), strtotime($subscription->expiration)) : __('N/A', 'edd-recurring');
			?>
				<tr>
					<?php do_action('edd_recurring_history_row_start', $subscription); ?>
					<td>
						<?php
						$download = edd_get_download($subscription->product_id);

						if ($download instanceof EDD_Download) {
							$product_name = $download->get_name();

							if (! is_null($subscription->price_id) && $download->has_variable_prices()) {
								$prices = $download->get_prices();
								if (isset($prices[$subscription->price_id]) && ! empty($prices[$subscription->price_id]['name'])) {
									$price_name = $prices[$subscription->price_id]['name'];
								}
							}
						}

						$download_image =  get_post_meta($subscription->product_id, 'edd_download_images', true);
						if($download_image) {
							$download_image = $download_image[0]['image'];
						}
						
						?>
						<div class="flex gap-2 items-center">
							<?php if($download_image) {
?>
								<img class="w-16 h-16 rounded-md" src="<?php echo esc_url($download_image); ?>" alt="">
								<?php
							} ?>
							<div class="">
								<h4 class="edd_subscription_name"><?php echo esc_html($product_name); ?></h4>
								<p class="edd_subscription_name"><?php echo esc_html($price_name) . ' &mdash; ' .
																		edd_currency_filter(edd_format_amount($subscription->recurring_amount), edd_get_payment_currency_code($subscription->parent_payment_id)) . ' / ' . $frequency; ?></p>
							</div>
						</div>
					</td>
					<td>
						<span class="edd_subscription_status <?php echo esc_attr($subscription->get_status_label()) ?>"><?php echo $subscription->get_status_label(); ?></span>
					</td>
					<td>
						<?php if ('trialling' == $subscription->status) : ?>
							<?php _e('Trialling Until:', 'edd-recurring'); ?>
						<?php endif; ?>
						<span class="edd_subscription_renewal_date"><?php echo $renewal_date; ?></span>
					</td>
					<td>
						<span class="edd_subscription_initial_amount"><?php echo edd_currency_filter(edd_format_amount($subscription->initial_amount), edd_get_payment_currency_code($subscription->parent_payment_id)); ?></span>
					</td>
					<td>
						<?php if ($subscription->can_renew()) : ?>
							<a href="<?php echo esc_url($subscription->get_renew_url()); ?>" class="edd_subscription_renew"><?php _e('Renew', 'edd-recurring'); ?></a>
						<?php endif; ?>
						<?php if ($subscription->can_cancel()) : ?>
							<a href="<?php echo esc_url($subscription->get_cancel_url()); ?>" class="edd_subscription_cancel">
								<?php echo edd_get_option('recurring_cancel_button_text', __('Cancel', 'edd-recurring')); ?>
							</a>
						<?php endif; ?>
						<?php if ($subscription->can_reactivate()) : ?>
							<a href="<?php echo esc_url($subscription->get_reactivation_url()); ?>" class="edd-subscription-reactivate"><?php _e('Reactivate', 'edd-recurring'); ?></a>
						<?php endif; ?>
					</td>
					<td>
						<?php if ($subscription->can_update()) : ?>
							<a href="<?php echo esc_url($subscription->get_update_url()); ?>" class="edd_update_info"><?php _e('Update Info', 'edd-recurring'); ?></a>
						<?php endif; ?>
					</td>
					<?php do_action('edd_recurring_history_row_end', $subscription); ?>

				</tr>
			<?php endforeach; ?>
		</table>

		<?php do_action('edd_after_recurring_history'); ?>

	<?php else : ?>

		<p class="edd-no-purchases rounded-md px-10 py-10 shadow-lg text-red-500 font-normal border border-solid border-secondary"><?php _e('You have not made any subscription purchases.', 'edd-recurring'); ?></p>

	<?php endif; //end if subscription 
	?>

<?php endif; //end is_user_logged_in() 
?>