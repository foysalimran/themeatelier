<?php

/**
 * Frontend Dashboard Template
 *
 * @package Themeatelier\page-templates
 * @subpackage Dashboard
 * @author ThemeAtelier<themeatelierbd@gmail.com>
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


$user_id    = get_current_user_id();
if ($user_id) {
    $user = get_userdata($user_id);

    $display_name = $user->display_name;
    $username = $user->user_login;
    $email = $user->user_email;
    $first_name = get_user_meta($user_id, 'first_name', true);


    // Get the user's avatar
    $avatar_url = get_avatar_url($user_id, array('size' => 100)); // Specify size as needed

?>
    <div class="flex">
        <img src="<?php echo esc_url($avatar_url); ?>" alt="User Avatar" class="border rounded-full avatar avatar-100 photo border-secondary">
        <div class="ml-8">
            <h3 class="mb-2 text-2xl font-medium"><?php echo esc_html__('Hello!') . ' ' . esc_html($first_name) ?></h3>
            <p class="text-[15px]"><?php echo esc_html__('From your account dashboard you can view your purchases, manage your billing addresses, edit your password and account details.', 'themeatelier') ?></p>
        </div>
    </div>
    <h3 class="mt-10 mb-0 text-lg font-semibold"><?php echo esc_html__('Account details', 'themeatelier') ?></h3>
    <div class="mt-6">
        <div class="border border-secondary">
            <h4 class="text-primary text-base font-medium border-b border-border-color bg-secondary py-3 px-8 mb-0">Personal Info
                <a class="float-right hover:text-primary" href="<?php echo get_home_url() ?>/account/edit-profile/">Edit</a>
            </h4>
            <ul class="px-8 py-6 text-base">
                <li><strong><?php echo esc_html__('Email:', 'themeatelier') ?> </strong><?php echo esc_html($email) ?></li>
                <li class="mt-1"><strong><?php echo esc_html__('Display name:', 'themeatelier') ?> </strong><?php echo esc_html($display_name) ?></li>
                <li class="mt-1"><strong><?php echo esc_html__('Username:', 'themeatelier') ?> </strong><?php echo esc_html($username) ?></li>
            </ul>
        </div>
    </div>
<?php
}
