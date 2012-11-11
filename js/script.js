jQuery(document).ready(function() {
	jQuery('a.postpopup').click(function(){
		id = jQuery(this).attr('rel');
		jQuery('<div id="ajax-popup"></div>').hide().appendTo('body').load('http://underwaterpeoples.com/wordpress/?page_id=21035&id='+id).modal();
		return false;
	});
});