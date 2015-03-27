(function() {

	var bodyEl = document.body,
		content = document.querySelector( '.content-wrap' ),
		openbtn = document.getElementById( 'open-button' ),
		closebtn = document.getElementById( 'close-button' ),
		isOpen = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
                
                
                                
	}

	function toggleMenu() {                
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}

	init();
        
        function getContent(url){     
            $.ajax({
                type: "GET",
                evalScripts: true,
                url: url, //'',
                dataType: 'html',
                success: function(data) {                    
                    alert(data);
                    
                    /*
                    $('#slist_'+id).html(data);
                    
                    $('#slist_'+id+' span').click(function(){
                        alert($(this).text());
                        $('#close-button').trigger('click');
                    }); 
                    $(current).slideToggle('slow');
                    $(current).css({"color": "red", "border": "2px solid white"});
                    */
                }   

            });
        }
        function ajax(id, url){     
            $.ajax({
                //dataType: "json",
                type: "GET",
                evalScripts: true,
                url: url, //'',
                 dataType: 'html',
                 success: function(data) {                    
                    $('#slist_'+id).html(data);
                    
                    $('#slist_'+id+' span').click(function(){
                      //  getContent($(this).data('url'));
                        $('#close-button').trigger('click');
                    }); 
                    $(current).slideToggle('slow');
                    $(current).css({"color": "red", "border": "2px solid white"});
                 }   

            });
        }

        var current;

        $('.icon-list a').click(function(){ 	
            var fct=$(this).data('ajax');
            var title=$(this).find('span').html(); //.find('.icon-list-2');
            var list=$('div[data-list="'+title+'"]');

            $('.icon-list-2').each(function(index) {
                    if($(this)!=$(list))
                            $(this).hide('slow');   
            });
            
            current=$(list);
            eval(fct);
        });

   
        
})();