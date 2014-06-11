<?php
/**
 * cornerstone Theme Customizer
 *
 * @package cornerstone
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cs_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'cs_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cs_customize_preview_js() {
	wp_enqueue_script( 'cs_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'cs_customize_preview_js' );




define( 'NO_HEADER_TEXT', true );



/* Hale refugees */

function huskypress_parentSite_register( $wp_customize )
{
    $wp_customize->add_section( 'parentSite', 
         array(
            'title' => __( 'Parent Site', 'mytheme' ), //Visible title of section
            'priority' => 35, //Determines what order this appears in
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Optional. Enter the title and web address of a parent School, College, Divison, or Department.', 'huskypress'), //Descriptive tooltip
         ) 
      );

    $wp_customize->add_setting( 'parentSiteTitle',
         array(
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh' 
         ) 
      ); 
	$wp_customize->add_control('parentSiteTitle', 
		array(
	        'type' => 'text',
	        'label' => 'Title',
	        'section' => 'parentSite'
        )
	);
	$wp_customize->add_setting( 'parentSiteLink',
         array(
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh' 
         ) 
      ); 
	$wp_customize->add_control('parentSiteLink', 
		array(
	        'type' => 'text',
	        'label' => 'Link',
	        'section' => 'parentSite'
        )
	);

	$wp_customize->add_setting( 'parentColor',
		array(
			'default' => 'blue', //Default setting/value to save
			'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport' => 'refresh'
			)
		);

	
	$wp_customize->add_control('parentColor', 
		array(
	        'type' => 'radio',
	        'label' => 'Parent Title Color',
	        'section' => 'parentSite',
	        'choices' => array(
				'blue'=>'Blue',
				'grey' => 'Grey',
				'black' => 'Black',
				'white' => 'White'
	       		)
	    	/**/
    	)
    );
	/**/

	$wp_customize->get_section( 'title_tagline'     )->title     = 'Site Title';
	$wp_customize->remove_control('blogdescription');// removes tagline form field. 

	$wp_customize->add_setting( 'headingColor', //Give it a SERIALIZED name (so all theme settings can live under one db record)
		array(
			'default' => 'blue', //Default setting/value to save
			'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport' => 'refresh'
			)
		);
	$wp_customize->add_control('headingColor', array(
        'type' => 'radio',
        'label' => 'Site Title Color',
        'section' => 'title_tagline',
        'choices' => array(
			'blue'=>'Blue',
			'grey' => 'Grey',
			'black' => 'Black',
			'white' => 'White'
        	)
    	)
	);


}
add_action( 'customize_register', 'huskypress_parentSite_register' );

/**/



function huskypress_customize_register( $wp_customize )
{
	//1. Define a new section (if desired) to the Theme Customizer
	$wp_customize->add_section( 'huskypress_options', 
         array(
            'title' => __( 'Template Options', 'mytheme' ), //Visible title of section
            'priority' => 35, //Determines what order this appears in
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to customize header color and school, college, or division settings for Hale', 'huskypress'), //Descriptive tooltip
         ) 
      );
    $wp_customize->add_setting( 'secondarytitle', //Give it a SERIALIZED name (so all theme settings can live under one db record)
         array(
            'type' => 'option', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport' => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      ); 
	$wp_customize->add_control('secondarytitle', array(
        'type' => 'text',
        'label' => 'School, College, Division, Department, etc.',
        'section' => 'huskypress_options'
    	)
	);
    $wp_customize->add_setting( 'secondarylink', //Give it a SERIALIZED name (so all theme settings can live under one db record)
         array(
            'type' => 'option', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport' => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      ); 
	$wp_customize->add_control('secondarylink', array(
        'type' => 'text',
        'label' => 'Link To School, College, Division, Department (Must be UConn.edu or UCHC.edu)',
        'section' => 'huskypress_options'
    	)
	);
    $wp_customize->add_setting( 'homepagelayout', //Give it a SERIALIZED name (so all theme settings can live under one db record)
         array(
            'default' => '3-3', //Default setting/value to save
            'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport' => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      ); 
	  
	// new stuff added
	$wp_customize->add_setting( 'themeColor', //Give it a SERIALIZED name (so all theme settings can live under one db record)
		array(
			'default' => 'blue', //Default setting/value to save
			'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport' => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
			)
		);
	$wp_customize->add_control('themeColor', array(
        'type' => 'radio',
        'label' => 'Theme Color',
        'section' => 'huskypress_options',
        'choices' => array(
			'blue'=>'Blue',
			'red' => 'Red',
			'orange' => 'Orange',
			'green' => 'Green',
			'purple'=>'Purple'
        	)
    	)
	);
	$wp_customize->add_control('homepagelayout', array(
        'type' => 'radio',
        'label' => 'Homepage Layout',
        'section' => 'huskypress_options',
        'choices' => array(
            '2L'=>'Large left',
			'2L_sub' => 'Large left, subdivided',
			'2R'=>'Large right',
			'2R_sub'=>'Large right, subdivided',
			'3'=>'Three even',
			'3W'=>'Three columns, wide center',
			'3W_sub'=>'Three columns, wide center, subdivided',
			'1-2'=>'Large top, two bottom',
			'1-3'=>'Large top, three bottom',
			'2L-3'=>'Large top left, three bottom',
			'2R-3'=>'Large top right, three bottom',
			'3-3'=>'Large center top, large center bottom',
			'3-4'=>'Large center top, four bottom'			
        	)
    	)
	);
}
add_action( 'customize_register', 'huskypress_customize_register' );




function huskypress_navoption_register( $wp_customize )
{
    $wp_customize->add_setting( 'navoption1', //Give it a SERIALIZED name (so all theme settings can live under one db record)
         array(
            'default' => 'textnav', //Default setting/value to save
            'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport' => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      ); 
	$wp_customize->add_control('navoption1', array(
        'type' => 'select',
        'label' => 'Navigation Option 1',
        'section' => 'nav',
        'choices' => array(
            'textnav'=>'Text',
			'bar' => 'Bar',
			'stack-top'=>'Tabs'		
        	)
    	)
	);
    $wp_customize->add_setting( 'navoption2', //Give it a SERIALIZED name (so all theme settings can live under one db record)
         array(
            'default' => 'with-drop', //Default setting/value to save
            'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport' => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      ); 
	$wp_customize->add_control('navoption2', array(
        'type' => 'select',
        'label' => 'Navigation Option 2',
        'section' => 'nav',
        'choices' => array(
            'with-drop'=>'Dropdowns',
			'with-left' => 'Left Nav'	
        	)
    	)
	);
}
add_action( 'customize_register', 'huskypress_navoption_register' );


?>