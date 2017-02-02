<?php 

add_action('cmb2_admin_init', 'mt_custom_metabox');

function mt_custom_metabox(){
	
	/**
	*
	* Portolio Section
	*
	*/
	$portfolio_info = new_cmb2_box(array(
		'title'		=> 'Portfolio Full Image',
		'id'		=> 'slider-info',
		'object_types'		=> array('aj_portfolios')
	) );
	
	$portfolio_info->add_field(array(
		'name'	=> 'Portfolio Full Image',
		'id'	=> 'slider-title',
		'desc'	=> 'You can upload portoflio full image from here',
		'type'	=> 'file'
	));
	

	
	$portfolio_info->add_field(array(
	    'name'             => 'Select Product Column',
	    'desc'             => 'Select Product Width Size',
	    'id'               => 'slider_column',
	    'type'             => 'select',
	    'show_option_none' => false,
	    'default'          => 'one',
	    'options'          => array(
	        'one' =>'Column One',
	        'two' =>'Column Two',
	        'three' =>'Column Three',
	        
	    )
	));
	

	
		
	
	/**
	*
	* Service Section
	*
	*/
	$service = new_cmb2_box(array(
		'title'		=> 'Service Info',
		'id'		=> 'service-info',
		'object_types'=> array('mt_services')
	));
	
	$service->add_field(array(
		'name'	=> 'Service Icon',
		'id'	=> 'service-icon',
		'desc'	=> 'You can add service icon from here',
		'type'	=> 'text'
	));

	
	$service->add_field(array(
		'name'		=> 'Service Title',
		'id'		=> 'service-title',
		'desc'		=> 'You can add service title here',
		'type'		=> 'text'
		
	));
	
	$service->add_field(array(
		'name'	=> 'Service Content',
		'id'	=> 'service-content',
		'desc'	=> 'You can add service content here',
		'type'	=> 'textarea_code'
	));
	
	
	
	/**
	*
	*
	* Team Area Section
	*
	*/
	$team = new_cmb2_box( array(
		'title'		=> 'Crazy Team Member Info',
		'id'		=> 'mt-crazy-team-info',
		'object_types'=> array('mt_members')
	) );
	
	$team->add_field(array(
		'name'		=> 'Name',
		'id'		=> 'mt_member_name',
		'desc'		=> 'Add Team Member name from here',
		'type'		=> 'text'
	) );
	
	$team->add_field(array(
		'name'		=> 'Designation',
		'id'		=> 'mt_member_designation',
		'desc'		=> 'Add Team Member Designation from here',
		'type'		=> 'text'
	) );
	
	$team->add_field(array(
		'name'		=> 'Biogrphy',
		'id'		=> 'mt_member_info',
		'desc'		=> 'Add Team Member Info from here',
		'type'		=> 'textarea_small'
	) );
		
	$team->add_field(array(
		'name'		=> 'Button Text',
		'id'		=> 'mt_member_button_text',
		'desc'		=> 'Add Button Text from here',
		'type'		=> 'text'
	) );
	
			
	$team->add_field(array(
		'name'		=> 'Button Link',
		'id'		=> 'mt_member_button_link',
		'desc'		=> 'Add Button Link from here',
		'type'		=> 'text'
	) );
	
	/**
	*
	* Social Profiles for Team
	*
	*/ 
	$team_socail = new_cmb2_box( array(
		'title'		=> 'Socail Profile Links',
		'id'		=> 'mt-socail-icons',
		'object_types'=> array('mt_members')
	) );
	
	$team_socail->add_field( array(
		'name'		=> 'Facebook',
		'id'		=> 'mt_facebook',
		'desc'		=> 'You can add Facebook link From here',
		'type'		=> 'text_url'
	) );
	
	
	$team_socail->add_field( array(
		'name'		=> 'Twitter',
		'id'		=> 'mt_twitter',
		'desc'		=> 'You can add Twitter link From here',
		'type'		=> 'text_url'
	) );
	
	$team_socail->add_field( array(
		'name'		=> 'Dribbble',
		'id'		=> 'mt_dribbble',
		'desc'		=> 'You can add Dribbble link From here',
		'type'		=> 'text_url'
	) );
	
		
	$team_socail->add_field( array(
		'name'		=> 'Behance',
		'id'		=> 'mt_behance',
		'desc'		=> 'You can add Behance link From here',
		'type'		=> 'text_url'
	) );
	
	$team_socail->add_field( array(
		'name'		=> 'Pinterest',
		'id'		=> 'mt_pinterest',
		'desc'		=> 'You can add Pinterest link From here',
		'type'		=> 'text_url'
	) );
	
	/**
	*
	* Work Process
	*
	*/
	$work_process = new_cmb2_box( array(
		'title'		=> 'Work Process Info',
		'id'		=> 'work-process-info',
		'object_types'	=> array('mt_work_process')
	) );
	
	$work_process-> add_field( array(
		'name'		=> 'Icon name',
		'id'		=> 'mt-icon-name',
		'desc'		=> 'Get <a href="http://zavoloklom.github.io/material-design-iconic-font/v1/"> Icon Name</a> from this link',
		'type'		=> 'text'	
	) );
	
	$work_process -> add_field( array(
		'name'		=> 'Title',
		'id'		=> 'mt-work-process-title',
		'desc'		=> 'Add Work Process Title From Here',
		'type'		=> 'text',
		
	) );
	
	$work_process -> add_field( array(
		'name'		=> 'Content',
		'id'		=> 'mt-work-process-content',
		'desc'		=> 'Add Work Process Content From Here',
		'type'		=> 'textarea_small',
		
	) );
	
	/**
	*
	* Clients Testimonial
	*
	*/
	$mt_clients = new_cmb2_box( array(
		'title'	=> 'Clients Testimonial Info',
		'id'	=> 'mt-clients-info',
		'object_types'	=> array('mt_clients')
	) );
	
	$mt_clients->add_field( array(
		'name'		=> 'Name',
		'id'		=> 'mt-client-name',
		'desc'		=> 'Add Client Name From Here',
		'type'		=> 'text'
	));
		
	$mt_clients->add_field( array(
		'name'		=> 'Designation',
		'id'		=> 'mt-client-designation',
		'desc'		=> 'Add Client Designation From Here',
		'type'		=> 'text'
	));
	
	$mt_clients->add_field( array(
		'name'		=> 'Message',
		'id'		=> 'mt-client-message',
		'desc'		=> 'Add Client Message From Here',
		'type'		=> 'textarea_code'
	));
	
	
}

