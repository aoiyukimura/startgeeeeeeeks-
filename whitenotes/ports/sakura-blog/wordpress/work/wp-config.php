<?php
/**
 * The base configurations of the WordPress.
 *
 * ���Υե�����ϡ�MySQL���ơ��֥���Ƭ������̩�������졢ABSPATH �������ޤߤޤ���
 * ���ܤ�������� {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php ���Խ�} �򻲾Ȥ��Ƥ���������MySQL ���������ϥۥ��ƥ�����������Ǥ��ޤ���
 *
 * ���Υե�����ϥ��󥹥ȡ������ wp-config.php �������������ɤ����Ѥ��ޤ���
 * ���������ɤ�𤵤������Υե������ "wp-config.php" �Ȥ���̾���ǥ��ԡ�����ľ���Խ����ͤ�
 * ���Ϥ��Ƥ⤫�ޤ��ޤ���
 *
 * @package WordPress
 */

// ����: 
// Windows �� "���Ģ" �Ǥ��Υե�������Խ����ʤ��Ǥ������� !
// ����ʤ��Ȥ���ƥ����ȥ��ǥ���
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 ����)
// ����Ѥ���ɬ�� UTF-8 �� BOM �ʤ� (UTF-8N) ����¸���Ƥ���������

// ** MySQL ���� - ������ξ���ϥۥ��ƥ����褫�����ꤷ�Ƥ��������� ** //
/** WordPress �Τ���Υǡ����١���̾ */
define('DB_NAME', 'whitenotes_startgeeks');

/** MySQL �ǡ����١����Υ桼����̾ */
define('DB_USER', 'whitenotes');

/** MySQL �ǡ����١����Υѥ���� */
define('DB_PASSWORD', 'Shogo1234');

/** MySQL �Υۥ���̾ */
define('DB_HOST', 'mysql723.db.sakura.ne.jp');

/** �ǡ����١����Υơ��֥���������ݤΥǡ����١����Υ���饯�������å� */
define('DB_CHARSET', 'utf8');

/** �ǡ����١����ξȹ��� (�ۤȤ�ɤξ���ѹ�����ɬ�פϤ���ޤ���) */
define('DB_COLLATE', '');

/**#@+
 * ǧ���ѥ�ˡ�������
 *
 * ���줾���ۤʤ��ˡ��� (���) ��ʸ������ѹ����Ƥ���������
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org ����̩�������ӥ�} �Ǽ�ư�������뤳�Ȥ�Ǥ��ޤ���
 * ��Ǥ��ĤǤ��ѹ����ơ���¸�Τ��٤Ƥ� cookie ��̵���ˤǤ��ޤ�������ˤ�ꡢ���٤ƤΥ桼��������Ū�˺ƥ������󤵤��뤳�Ȥˤʤ�ޤ���
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress �ǡ����١����ơ��֥����Ƭ��
 *
 * ���줾��˥�ˡ��� (���) ����Ƭ����Ϳ���뤳�Ȥǰ�ĤΥǡ����١�����ʣ���� WordPress ��
 * ���󥹥ȡ��뤹�뤳�Ȥ��Ǥ��ޤ���Ⱦ�ѱѿ����Ȳ����Τߤ���Ѥ��Ƥ���������
 */
$table_prefix  = 'wp3c0ad9';

/**
 * ����������� - ���Υѥå������ǤϽ���ͤȤ��� 'ja' (���ܸ� UTF-8) �����ꤵ��Ƥ��ޤ���
 *
 * WordPress �Υ��������������ꤷ�ޤ������ꤷ��������б����� MO �ե����뤬
 * wp-content/languages �˥��󥹥ȡ��뤵��Ƥ���ɬ�פ�����ޤ����㤨�� de_DE.mo ��
 * wp-content/languages �˥��󥹥ȡ��뤷 WPLANG �� 'de_DE' �����ꤹ�뤳�Ȥǥɥ��ĸ줬���ݡ��Ȥ���ޤ���
 */
define('WPLANG', 'ja');

/**
 * ��ȯ�Ԥ�: WordPress �ǥХå��⡼��
 *
 * �����ͤ� true �ˤ���ȡ���ȯ������� (notice) ��ɽ�����ޤ���
 * �ơ��ޤ���ӥץ饰����γ�ȯ�Ԥˤϡ����γ�ȯ�Ķ��ˤ����Ƥ��� WP_DEBUG ����Ѥ��뤳�Ȥ򶯤��侩���ޤ���
 */
define('WP_DEBUG', false);

/* �Խ���ɬ�פʤΤϤ����ޤǤǤ� ! WordPress �ǥ֥����򤪳ڤ��ߤ��������� */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');