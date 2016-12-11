    jQuery(document).ready(function(){
		jQuery('.creekoo_options').slideUp();
		
		jQuery('.creekoo_section h3').click(function(){		
			if(jQuery(this).parent().next('.creekoo_options').css('display')=='none')
				{	jQuery(this).removeClass('inactive');
					jQuery(this).addClass('active');
					jQuery(this).children('img').removeClass('inactive');
					jQuery(this).children('img').addClass('active');
					
				}
			else
				{	jQuery(this).removeClass('active');
					jQuery(this).addClass('inactive');		
					jQuery(this).children('img').removeClass('active');			
					jQuery(this).children('img').addClass('inactive');
				}
				
			jQuery(this).parent().next('.creekoo_options').slideToggle('slow');	
		});
});