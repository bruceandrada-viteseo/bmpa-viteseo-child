<?php
/**
 * Basic functions test case.
 *
 * @package Bmpa_Viteseo_Child
 */

class BasicFunctionsTest extends WP_UnitTestCase {

	/**
	 * Test that true is true.
	 */
	public function test_true_is_true() {
		$this->assertTrue( true );
	}

	/**
	 * Test that false is false.
	 */
	public function test_post_creation() {
		$post_id = self::factory()->post->create(
			array(
				'post_title' => 'Test Post',
			)
		);

		$this->assertNotEmpty( $post_id );
	}
}
