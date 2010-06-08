<?php

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );
 
function extra_user_profile_fields( $user ) { ?>
<h3><?php _e("Extra profile information", "blank"); ?></h3>
 
<table class="form-table">
<tr>
<th><label for="twitter"><?php _e("Twitter"); ?></label></th>
<td>
<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your Twitter name."); ?></span>
</td>
</tr>
<?php if ( current_user_can('manage_options') ): ?>
<tr>
<th><label for="oneweek_role"><?php _e("Role at One Week"); ?></label></th>
<td>
<select name="oneweek_role" id="oneweek_role">
    <option>Select a role</option>
    <option value="organizer"<?php if($user->oneweek_role == 'organizer') echo ' selected="selected"'; ?>>Organizer</option>
    <option value="attendee"<?php if($user->oneweek_role == 'attendee') echo ' selected="selected"'; ?>>Attendee</option>
    
</select>

<br />
<span class="description"><?php _e("Select the user's role for One Week"); ?></span>
</td>
</tr>
<?php endif; ?>
</table>
<?php }
 
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );
 
function save_extra_user_profile_fields( $user_id ) {
 
if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
 
update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
update_usermeta( $user_id, 'oneweek_role', $_POST['oneweek_role'] );

}

// function bracero_append_to_items_query($parameter, $value) {
//     $params = @$_GET;
//     $params[$parameter] = $value;
//     http_build_query($params, '', '&amp;');
// }

function get_users_ordered_by_last_name() {    
    global $wpdb;
	
    $userQuery  =  "SELECT u.ID
	                FROM $wpdb->users u 
                    JOIN $wpdb->usermeta um 
	                ON u.ID = um.user_id
                    WHERE um.meta_key = 'last_name'            
                    GROUP BY ID
                    ORDER BY um.meta_value ASC";
	
	return $wpdb->get_results($userQuery);
}

function oneweek_display_people($role = 'organizer') {
    ?>
<div id="people">
    <?php 
    $users = get_users_ordered_by_last_name();
    foreach ($users as $user):
        $person = get_userdata($user->ID);
        if(($person->user_login == 'chnmadmin' || $person->user_login == 'amandafrench')) continue;
    ?>
    <div class="person group">
        <?php echo get_avatar($person->user_email); ?>
        <div class="person-info">
        <h2><?php echo $person->first_name .' '. $person->last_name; ?></h2>
        <?php echo wpautop($person->user_description, 0); ?>
        <ul>
            <?php if($twitter = $person->twitter): ?>
            <li>Twitter: <a href="http://twitter.com/<?php echo $twitter; ?>"><?php echo $twitter; ?></a></li>
            <?php endif; ?>
            <?php if ($website = $person->user_url): ?>
            <li>Website: <a href="<?php echo $website; ?>"><?php echo $website; ?></a></li>
            <?php endif; ?>
        </ul>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php
}
?>