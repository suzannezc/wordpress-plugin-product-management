<?php
/*
* Plugin Name: WordPress Product Management
* Plugin URI: https://github.com/wrdsb/wordpress-plugin-product-management
* Description: WordPress plugin for WordPress product management.
* Author: WRDSB
* Author URI: https://github.com/wordpress-plugin-product-management
* Version: 0.0.1
* License: GPLv2 or later
* GitHub Plugin URI: wrdsb/wordpress-plugin-product-management
* GitHub Branch: master
*/
require_once dirname( __FILE__ ) . "/cases/case_post_type.php";
require_once dirname( __FILE__ ) . "/cases/case_categories.php";
require_once dirname( __FILE__ ) . "/cases/case_tags.php";

require_once dirname( __FILE__ ) . "/installs/install_post_type.php";
require_once dirname( __FILE__ ) . "/installs/install_categories.php";
require_once dirname( __FILE__ ) . "/installs/install_tags.php";

require_once dirname( __FILE__ ) . "/plugins/plugin_post_type.php";
require_once dirname( __FILE__ ) . "/plugins/plugin_categories.php";
require_once dirname( __FILE__ ) . "/plugins/plugin_tags.php";

require_once dirname( __FILE__ ) . "/projects/project_post_type.php";
require_once dirname( __FILE__ ) . "/projects/project_categories.php";
require_once dirname( __FILE__ ) . "/projects/project_tags.php";

require_once dirname( __FILE__ ) . "/repositories/repository_post_type.php";
require_once dirname( __FILE__ ) . "/repositories/repository_categories.php";
require_once dirname( __FILE__ ) . "/repositories/repository_tags.php";
