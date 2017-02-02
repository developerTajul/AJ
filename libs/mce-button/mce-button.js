(function() {
    tinymce.PluginManager.add('wpbootscore_mce_button', function( editor, url ) {
        editor.addButton( 'wpbootscore_mce_button', {
            text: '',
            icon: 'button',
            type: 'menubutton',
            menu: [
                {
                    text: 'Main Slider Section',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Slider Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'slide_number',
                                    label: 'Slide Number',
                                    value: '3',
                                },
                                {
                                    type: 'listbox',
                                    name: 'slider_order',
                                    label: 'Choose Slider Order',
                                    'values': [
                                        {text: 'From Begining Slide', value: 'ASC'},
                                        {text: 'From Latest Slide', value: 'DESC'},
                                    ]
                                },
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt_slider count="'+e.data.slide_number+'" order="'+e.data.slider_order+'"]'
                                    );
                            }
                        });
                    }
                },                
              

                {
                    text: 'Feature Section',
                    menu:[
                        {
                            text: 'Feature Area Wrapper',
                            onclick: function(){
                                editor.insertContent('[feature_area][/feature_area] ');
                            }
                        },
                    {
                    text: 'Feature Content',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Single Feature Generator',
                            body: 
                            [
                                {
                                    type: 'textbox',
                                    name: 'f_icon',
                                    label: 'Type Icon Name',
                                    value: 'zmdi-devices',
                                },   
                                {
                                    type: 'textbox',
                                    name: 'f_title',
                                    label: 'Feature Title ',
                                    value: ''

                                },                            
                                {
                                    type: 'textbox',
                                    name: 'f_content',
                                    label: 'Feature Content',
                                    value: 'Web Design',
                                    multiline: true,
                                    minWidth: 200,
                                    minHeight: 150
                                },
                                {
                                    type: 'textbox',
                                    name: 'f_link',
                                    label: 'Feature Link',
                                    value: ''
                                }

                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[single_feature icon="'+e.data.f_icon+'" title="'+e.data.f_title+'" text="'+e.data.f_content+'" link="'+e.data.f_link+'"]'
                                    );
                            }
                        });
                        }
                    },

                    ]
                },
               

                // Section
                {
                    text: 'About Section',
                    menu: [
                        {
                    text: 'Image with Text',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'About Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'heading_text',
                                    label: 'Heading Text',
                                    value: '',
                                },
                                {
                                    type: 'textbox',
                                    name: 'about_title',
                                    label: 'About Title ',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'about_content',
                                    label: 'About content',
                                    value: 'Message here',
                                    multiline: true,
                                    minWidth: 300,
                                    minHeight: 100
                                },
                                {
                                    type: 'textbox',
                                    name: 'about_button_text',
                                    label: 'Button Text',
                                    value: ''

                                },
                                {
                                    type: 'textbox',
                                    name: 'about_button_link',
                                    label: 'Button Link',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'about_image_link',
                                    label: 'Image Link',
                                    value: ''
                                }
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[about_us_left heading="'+e.data.heading_text+'" title="'+e.data.about_title+'" content="'+e.data.about_content+'" button_text="'+e.data.about_button_text+'" button_url="'+e.data.about_button_link+'" image_left="'+e.data.about_image_link+'"]'
                                    );
                            }
                        });
                    }
                },
                {
                    text: 'Text with Image',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'About Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'heading_text',
                                    label: 'Heading Text',
                                    value: '',
                                },
                                {
                                    type: 'textbox',
                                    name: 'about_title',
                                    label: 'About Title ',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'about_content',
                                    label: 'About content',
                                    value: 'Message here',
                                    multiline: true,
                                    minWidth: 300,
                                    minHeight: 100
                                },
                                {
                                    type: 'textbox',
                                    name: 'about_button_text',
                                    label: 'Button Text',
                                    value: ''

                                },
                                {
                                    type: 'textbox',
                                    name: 'about_button_link',
                                    label: 'Button Link',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'about_image_link',
                                    label: 'Image Link',
                                    value: ''
                                }
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[about_us_right heading="'+e.data.heading_text+'" title="'+e.data.about_title+'" content="'+e.data.about_content+'" button_text="'+e.data.about_button_text+'" button_url="'+e.data.about_button_link+'" image_left="'+e.data.about_image_link+'"]'
                                    );
                            }
                        });
                    }
                }

                    ]
                },
                // counter section
                {
                    text: 'Counter Section',
                    menu: [
                    {
                        text: 'Counter Area Wrapper',
                        onclick: function(){
                            editor.insertContent('[counter_section_wrapper][/counter_section_wrapper] ');
                        }
                    },

                    {
                    text: 'Single counter Generator',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Count Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'counter_icon_name',
                                    label: 'Counter Icon Name',
                                    value: 'zmdi-alarm-check',
                                },
                                {
                                    type: 'textbox',
                                    name: 'counter_num',
                                    label: 'Counter Number ',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'counter_text_title',
                                    label: 'Counter Title',
                                    value: ''
                                }
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[single_counter counter_icon="'+e.data.counter_icon_name+'" counter_num="'+e.data.counter_num+'" counter_text="'+e.data.counter_text_title+'" ]'
                                    );
                            }
                        });
                       }
                    }
                

                    ]
                },
                // Counter Section
                 {
                    text: 'Portfolio Section',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Portfolio Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'portfolio_title',
                                    label: 'Portfolio Section Title',
                                    value: '',
                                },
                                {
                                    type: 'textbox',
                                    name: 'portfolio_sub_title',
                                    label: 'Portfolio Section Sub Title',
                                    value: '',
                                },
                                {
                                    type: 'textbox',
                                    name: 'portfolio_number',
                                    label: 'Portfolio Number',
                                    value: ''  
                                },
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt_portfolios title="'+e.data.portfolio_title+'" sub_title="'+e.data.portfolio_sub_title+'" count="'+e.data.portfolio_number+'"]'
                                    );
                            }
                        });
                    }
                }, // end of counter section
                // Why Choose us Section
                {
                    text: 'Why Choose Section',
                    menu: [
                    {
                        text: 'Section Wrapper',
                        onclick: function(){
                            editor.insertContent('[why_box][/why_box] ');
                        }
                    },

                    {
                    text: 'Header Section',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Header Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'title',
                                    label: 'Main Title',
                                    value: '',
                                },
                                {
                                    type: 'textbox',
                                    name: 'subtitle',
                                    label: 'Subtitle',
                                    value: ''
                                }
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[why_heading title="'+e.data.title+'" sub_title="'+e.data.subtitle+'" ]'
                                    );
                            }
                        });
                       }
                    },
                    {
                    text: 'Image with Text',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Image with Text Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'title_one',
                                    label: 'One Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'content_one',
                                    label: 'One Content',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'icon_one',
                                    label: 'One Icon Name',
                                    value: ''
                                },  
                                {
                                    type: 'textbox',
                                    name: 'title_two',
                                    label: 'Two Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'content_two',
                                    label: 'Two Content',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'icon_two',
                                    label: 'Two Icon Name',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'title_three',
                                    label: 'Three Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'content_three',
                                    label: 'Three Content',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'icon_three',
                                    label: 'Three Icon Name',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'image_link',
                                    label: 'Image Link',
                                    value: ''
                                }
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt-choose-image-left mt_why_title_one="'+e.data.title_one+'" mt_why_text_one="'+e.data.content_one+'" mt_why_icon_one="'+e.data.icon_one+'" mt_why_title_two="'+e.data.title_two+'" mt_why_text_two="'+e.data.content_two+'" mt_why_icon_two="'+e.data.icon_two+'" mt_why_title_three="'+e.data.title_three+'" mt_why_text_three="'+e.data.content_three+'" mt_why_icon_three="'+e.data.icon_three+'" image_link="'+e.data.image_link+'" ]'
                                    );
                            }
                        });
                       }
                    },
                    {
                    text: 'Text with Image',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Text with Image Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'title_one',
                                    label: 'One Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'content_one',
                                    label: 'One Content',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'icon_one',
                                    label: 'One Icon Name',
                                    value: ''
                                },  
                                {
                                    type: 'textbox',
                                    name: 'title_two',
                                    label: 'Two Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'content_two',
                                    label: 'Two Content',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'icon_two',
                                    label: 'Two Icon Name',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'title_three',
                                    label: 'Three Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'content_three',
                                    label: 'Three Content',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'icon_three',
                                    label: 'Three Icon Name',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'image_link',
                                    label: 'Image Link',
                                    value: ''
                                }
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt-choose-image-right mt_why_title_one="'+e.data.title_one+'" mt_why_text_one="'+e.data.content_one+'" mt_why_icon_one="'+e.data.icon_one+'" mt_why_title_two="'+e.data.title_two+'" mt_why_text_two="'+e.data.content_two+'" mt_why_icon_two="'+e.data.icon_two+'" mt_why_title_three="'+e.data.title_three+'" mt_why_text_three="'+e.data.content_three+'" mt_why_icon_three="'+e.data.icon_three+'" image_link="'+e.data.image_link+'" ]'
                                    );
                            }
                        });
                       }
                    }
                

                    ]
                }, // Why Choose us Section end

                {
                    text: 'Services Section',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Services Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'service_title',
                                    label: 'Service Section Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'service_subtitle',
                                    label: 'Service Section Subtitle',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'slide_number',
                                    label: 'Slide Number',
                                    value: '3',
                                },
                                {
                                    type: 'listbox',
                                    name: 'service_order',
                                    label: 'Choose Services Order',
                                    'values': [
                                        {text: 'From Begining Service', value: 'ASC'},
                                        {text: 'From Latest Service', value: 'DESC'},
                                    ]
                                },
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt_services title="'+e.data.service_title+'" sub_title="'+e.data.service_subtitle+'" count="'+e.data.slide_number+'" order="'+e.data.service_order+'"]'
                                    );
                            }
                        });
                    }
                }, // Services section ends

                {
                    text: 'Hire Us Section',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Hire Us Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'hire_us_title',
                                    label: 'Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'hire_us_link_text',
                                    label: 'Link Text',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'hire_us_link_url',
                                    label: 'Link Url',
                                    value: '',
                                },
                                {
                                    type: 'textbox',
                                    name: 'hire_us_icon',
                                    label: 'Icon Name',
                                    value: '',
                                }
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt_hire_us title="'+e.data.hire_us_title+'" link_text="'+e.data.hire_us_link_text+'" link_url="'+e.data.hire_us_link_url+'" icon="'+e.data.hire_us_icon+'"]'
                                    );
                            }
                        });
                    }
                }, // hire us section ends

                {
                    text: 'Team Slider Section',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Team Slider Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'team_slider_section_title',
                                    label: 'Team Slider Section Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'team_slider_section_subtitle',
                                    label: 'Team Slider Section Subtitle',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'team_slide_number',
                                    label: 'Slide Number',
                                    value: '3',
                                },
                                {
                                    type: 'listbox',
                                    name: 'team_slide_order',
                                    label: 'Choose Services Order',
                                    'values': [
                                        {text: 'From Begining Team slide', value: 'ASC'},
                                        {text: 'From Latest Team slide', value: 'DESC'},
                                    ]
                                },
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt_team_slider title="'+e.data.team_slider_section_title+'" sub_title="'+e.data.team_slider_section_subtitle+'" count="'+e.data.team_slide_number+'" order="'+e.data.team_slide_order+'"]'
                                    );
                            }
                        });
                    }
                }, // team slider 
                {
                    text: 'Work Process Section',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Work Process Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'work_process_section_title',
                                    label: 'Work Process Section Title',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'work_process_section_subtitle',
                                    label: 'Work Process Section Subtitle',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'work_process_number',
                                    label: 'Work Process Number',
                                    value: '',
                                },
                                {
                                    type: 'listbox',
                                    name: 'work_process_slide_order',
                                    label: 'Choose Services Order',
                                    'values': [
                                        {text: 'From Begining WorK Process slide', value: 'ASC'},
                                        {text: 'From Latest WorK Process slide', value: 'DESC'},
                                    ]
                                },
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt_work_process title="'+e.data.work_process_section_title+'" sub_title="'+e.data.work_process_section_subtitle+'" count="'+e.data.work_process_number+'" order="'+e.data.work_process_slide_order+'"]'
                                    );
                            }
                        });
                    }
                }, // work process end
                {
                    text: 'Pricing Table Section',
                    menu: [
                    {
                        text: 'Pricing Table Area Wrapper',
                        onclick: function(){
                            editor.insertContent('[mt_price_tabel_area][/mt_price_tabel_area] ');
                        }
                    },

                    {
                    text: 'Prcing Header Section',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Pricing Header Section Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'pricing_heading_title',
                                    label: 'Price Heading Title',
                                    value: '',
                                },
                                {
                                    type: 'textbox',
                                    name: 'pricing_heading_subtitle',
                                    label: 'Prcing Heading Subtitle',
                                    value: ''
                                }
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt_price_tabel_header title="'+e.data.pricing_heading_title+'" subtitle="'+e.data.pricing_heading_subtitle+'" ]'
                                    );
                            }
                        });
                       }
                    },
                    {
                        text: 'Pricing Table Area Wrapper',
                        onclick: function(){
                            editor.insertContent('[mt_price_tabel_wrapper][/mt_price_tabel_wrapper] ');
                        }
                    },
                    {
                    text: 'Single Prcing Table',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Single Pricing Table Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'table_title',
                                    label: 'Table Title',
                                    value: '',
                                },
                                {
                                    type: 'textbox',
                                    name: 'table_price',
                                    label: 'Price',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'table_currency',
                                    label: 'Currency Of Symble',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'table_order_text',
                                    label: 'Order Button Text',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'table_order_link',
                                    label: 'Order Button URL',
                                    value: ''
                                },
                                {
                                    type: 'listbox',
                                    name: 'table_active',
                                    label: 'Choose Services Order',
                                    'values': [
                                        {text: 'Active Table', value: 'active'},
                                        {text: 'Deactive Table', value: ''},
                                    ]
                                },
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[mt_single_price_tabel title="'+e.data.table_title+'" price="'+e.data.table_price+'" currency="'+e.data.table_currency+'" order_text="'+e.data.table_order_text+'" order_link="'+e.data.table_order_link+'" active="'+e.data.table_active+'" ][/mt_single_price_tabel]'
                                    );
                            }
                        });
                       }
                    }
                

                    ]
                }, // price table section ends
                                
            ]
        });
    });
})();

