<?php
if ( ! class_exists( 'WP_UnitTestCase' ) ) {
    return;
}

/**
 * Theme test case.
 *
 * @package Bmpa_Viteseo_Child
 * @subpackage Tests
 */
class ThemeTest extends WP_UnitTestCase {

	/**
	 * Test that the site title is not empty.
	 */
	public function test_site_title_exists() {
		$this->assertNotEmpty( get_bloginfo( 'name' ) );
	}

	/**
	 * Test that true is true.
	 */
	public function test_true_is_true() {
		$this->assertTrue( true );
	}
}
