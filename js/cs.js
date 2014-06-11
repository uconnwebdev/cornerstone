jQuery(document).ready(function($) {

	/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
		
		Link Flags
		Scans all the links in the main content area, and adds icons to any links that lead to other websites, or to downloadable documents. 
		by Andrew Bacon
		May 2014
		
	 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
	
	var url = location.href
	var urlExploded = url.split('/')
	var site = urlExploded[2]
	var extensions = ['3g2', '3gp', 'avi', 'doc', 'docx', 'dotx', 'gif', 'jpg', 'jpeg', 'm4a', 'mid', 'midi', 'mov', 'mp3', 'mp4', 'mpg', 'odt', 'ogg', 'ogv', 'pdf', 'png', 'ppt', 'pptx', 'xls', 'xlsx', 'wav', 'wmv', 'zip', 'vsd']
		
	$('#page a').each(function(){
		//console.log('------------a')
		var href 	= $(this).attr('href')
		var img		= $(this).children('img').length
		var base 	= null
		var last 	= null
		var ext 	= null
		var flag 	= null
		
	
		//console.log('img: '+img)
	
		if (href.charAt(0) != '#' && img == 0 ){
		
			var hrefExploded = href.split('/')
			base = hrefExploded[2]	
			
			
			if (base != site) {
				//console.log('external link detected, adding icon...')
				// is external, and is not a named anchor tag
				var icon = '<span class="glyphicon glyphicon-new-window"></span>'
				$(this).addClass('external').prepend(icon)
			}

			//console.log('checking to see if it might be a file...')
			last = hrefExploded[hrefExploded.length-1] || ''
			var lastExploded = last.split('.')

			if (lastExploded[1]){
				//console.log('ok, so there was a dot in the last value of the url.')
				$.each(extensions, function(index, value){
					
					if (value == lastExploded[1]){
						flag = $('<span class="flag">')
						//console.log('match!')
						ext = lastExploded[1]
						//console.log('ext:'+ext)	
						flag.append('.'+ext)
					}					
					
				})
				
				//console.log('ext:'+ext)	
			}
			if (flag != null){
				$(this).append(flag)
			}		
			
		}
	})
	
	
	/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
		
		Nav: Neverwrap
		Keeps navigation items from wrapping to a second line when there are too many. 
		Emulates browser tabs.  
		by Andrew Bacon
		May 2014
		
	 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
	/*
	function calcNavWidth(){
		var width = 0
		$('#primary-nav > ul > li > a').each(function(){
			console.log('this width: '+$(this).outerWidth())
			width = width + $(this).outerWidth()
		})
		console.log('width: '+width)
		return width
	}
	
	var containerWidth 	= $('#site-navigation').outerWidth();
	console.log('containerWidth: '+containerWidth)
	
	var navWidth 			= calcNavWidth();
		
	if (navWidth > containerWidth) {
		var links = $('#primary-nav > ul > li > a').length
		console.log('links: '+links)
		var width = 100/links
		console.log('width: '+width)
		$('#primary-nav').addClass('neverwrap')
		
		
		$('#primary-nav > ul > li').each(function(){
			console.log('meep')
			$(this).width(width+'%')	
		})
		
	}
	
	/*
	
	Need some kind of a way to... 
	
	when the size of each one gets too low, and is useless... 
	
	actually rewrite the markup, and place the last few categories under a "more" item. Clicking that exposes a second nav bar. 
	
	
	*/
	
	
	
	
})