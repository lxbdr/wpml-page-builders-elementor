<?php

/**
 * Class Test_WPML_Elementor_Testimonial_Carousel
 *
 * @group page-builders
 * @group elementor
 */
class Test_WPML_Elementor_Testimonial_Carousel extends OTGS_TestCase {

	/**
	 * @test
	 */
	public function it_get_fields() {

		$expected = array( 'content', 'name', 'title' );
		$subject = new WPML_Elementor_Testimonial_Carousel();
		$this->assertEquals( $expected, $subject->get_fields() );
	}

	/**
	 * @test
	 */
	public function it_get_items_field() {
		$subject = new WPML_Elementor_Testimonial_Carousel();
		$this->assertEquals( 'slides', $subject->get_items_field() );
	}
}