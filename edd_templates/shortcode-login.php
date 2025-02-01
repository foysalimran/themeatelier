<?php

/**
 * This template is used to display the login form with [edd_login]
 */
global $edd_login_redirect;
if (! is_user_logged_in()) :

	// Show any error messages after form submission
	edd_print_errors(); ?>
	<form id="edd_login_form" class="edd_form" action="" method="post">

		<?php do_action('edd_login_fields_before'); ?>
		<p class="edd-login-username">
			<label for="edd_user_login"><?php _e('Username or Email', 'themeatelier'); ?></label>
			<input placeholder="<?php echo esc_html__('Username or Email', 'themeatelier') ?>" name="edd_user_login" id="edd_user_login" class="edd-required edd-input" type="text" />
		</p>
		<p class="edd-login-password">
			<label for="edd_user_pass"><?php _e('Password', 'themeatelier'); ?></label>
			<input placeholder="<?php echo esc_html__('Password', 'themeatelier') ?>" name="edd_user_pass" id="edd_user_pass" class="edd-password edd-required edd-input" type="password" />
		</p>
		<p class="edd-login-remember">
			<label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e('Remember Me', 'themeatelier'); ?></label>
		</p>
		<p class="edd-login-submit">
			<input type="hidden" name="edd_redirect" value="<?php echo esc_url($edd_login_redirect); ?>" />
			<input type="hidden" name="edd_login_nonce" value="<?php echo esc_attr(wp_create_nonce('edd-login-nonce')); ?>" />
			<input type="hidden" name="edd_action" value="user_login" />
			<input id="edd_login_submit" type="submit" class="edd-submit" value="<?php _e('Log In', 'themeatelier'); ?>" />
		</p>
		<p class="text-center">
			Forgot your password?
			<a href="<?php echo esc_url(edd_get_lostpassword_url()); ?>">
				<?php _e(' Reset Password', 'themeatelier'); ?>
			</a>
		</p>

		<?php do_action('edd_login_fields_after'); ?>

	</form>
<?php else : ?>

	<?php do_action('edd_login_form_logged_in'); ?>

<?php endif; ?>