### Disable specific notices
@since 5.2.4

Notices are shown within a paragraph element ( <p> ) with an id, example: <p id="high_mp_user_admin_notice">

If you want to dismiss this permanently you will need to hook into this: $is_dismissed = apply_filters( $key, false );
Resulting in: 
add_filter( 'mp_dismiss_notice_high_mp_user_admin_notice', '__return_true' );

