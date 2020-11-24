<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wp_project' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%Tnq1PG]V|3ICRBDr,vkTtow(?J1#R`r7BalTr-&og8T;kbrp>}j |e;P==/W8}D' );
define( 'SECURE_AUTH_KEY',  '-eR?j4?W)Y,$d rpJS6Ta_{kYW`(B~[qp`1nw2T~lvt0v[{lCN0LF;Laq:qjd&z3' );
define( 'LOGGED_IN_KEY',    'abyDj7bLf9@s8BaUMxg<AN(#gHn=Y0v)^@z&P5M`N}4S6jIz0eEtX_I=PCbXg|gO' );
define( 'NONCE_KEY',        '%kdS)/)U;;#si@KZtPzE]isW0OKSM`3+Sl8)TC`z 2,Ehq[2#Sr9elM1s=(px9u^' );
define( 'AUTH_SALT',        ':z3Wwlfm~t5tVa2|dMvHS`Wj|V95jl(D:DF?e`k!gDsc&Q56+O1&TFL<j+9=.7{H' );
define( 'SECURE_AUTH_SALT', '?1[RQLnK`2Y;NVZoNF6Z{[TG}o*KS[]EQsG^]HQ3b%!$/.2Y<kqsi%].DvZaDkPo' );
define( 'LOGGED_IN_SALT',   '{ik>uw} ?=~hAZnNpxduzz_)6pt@ D9Y]yl1+xAnl%f@-gf2(yh0?,2>!x6[e^ ?' );
define( 'NONCE_SALT',       '2CL|=8%!&>Dw<t0uG((<&hmxM/{-Pz^gA`fpXWIb,fD]%1Y&bBT.dkAZ%SY@q5Vb' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
