<?php
/**
 * Tumblr Crosspostr uninstaller
 *
 * @package plugin
 */

// Don't execute any uninstall code unless WordPress core requests it.
if (!defined('WP_UNINSTALL_PLUGIN')) { exit(); }

// Delete options.
delete_option('tumblr_crosspostr_settings');

delete_post_meta_by_key('tumblr_crosspostr_crosspost');
/**
 * TODO: Should we really delete this post meta?
 *       That'll wipe Tumblr post IDs and blog hostnames. :\
 *       We need these to be able to re-associate WordPress posts
 *       with the Tumblr posts that they were cross-posted to.
 */
// delete_post_meta_by_key('tumblr_post_id');
// delete_post_meta_by_key('tumblr_base_hostname');
