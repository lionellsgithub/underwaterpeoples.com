jQuery(document).ready(function() {
	jQuery('a.postpopup').click(function(){
		id = jQuery(this).attr('rel');
		jQuery('<div id="ajax-popup"></div>').hide().appendTo('body').load('http://underwaterpeoples.com/wordpress/?page_id=21035&id='+id).modal();
		return false;
	});

});
    
    $(document).ready(function() {
	
	$(".pcsvcontent").hide();
	$(".upcatalogcontent").hide();
	$(".distrocontent").hide();
	$(".specialofferscontent").hide();
	$(".merchcontent").hide();

	$("#menumobile").click(function() {  
  $("#menumobile").toggleClass("mobileheight");      
});
	$('.pcsv').click(function(){
        $('.pcsvcontent').show();
        $('.mainstorecontent').hide();
	$('.upcatalogcontent').hide();
	$('.distrocontent').hide();
	$('.specialofferscontent').hide();
	$('a.pcsv').css('border-bottom', "none");
	$('a.all').css('border-bottom', "1px solid black");  
	$('a.upcatalog').css('border-bottom', "1px solid black");  
	$('a.distro').css('border-bottom', "1px solid black");  
	$('a.specialoffers').css('border-bottom', "1px solid black");
		$('a.merch').css('border-bottom', "1px solid black");
	$('.merchcontent').hide();
        });
	
	$('.all').click(function(){
        $('.mainstorecontent').show();
        $('.pcsvcontent').hide();
	$('.upcatalogcontent').hide();
        $('.distrocontent').hide();
        $('.specialofferscontent').hide();
	$('a.all').css('border-bottom', "none");
	$('a.pcsv').css('border-bottom', "1px solid black");  
	$('a.upcatalog').css('border-bottom', "1px solid black");  
	$('a.distro').css('border-bottom', "1px solid black");  
	$('a.specialoffers').css('border-bottom', "1px solid black");
		$('a.merch').css('border-bottom', "1px solid black");
	$('.merchcontent').hide();
        });
	
	$('.upcatalog').click(function(){
        $('.upcatalogcontent').show();
        $('.pcsvcontent').hide();
	$('.mainstorecontent').hide();
        $('.distrocontent').hide();
        $('.specialofferscontent').hide();
	$('a.upcatalog').css('border-bottom', "none");
	$('a.pcsv').css('border-bottom', "1px solid black");  
	$('a.all').css('border-bottom', "1px solid black");  
	$('a.distro').css('border-bottom', "1px solid black");  
	$('a.specialoffers').css('border-bottom', "1px solid black");
		$('a.merch').css('border-bottom', "1px solid black");
	$('.merchcontent').hide();
        });
	
	$('.distro').click(function(){
        $('.distrocontent').show();
        $('.pcsvcontent').hide();
	$('.upcatalogcontent').hide();
        $('.mainstorecontent').hide();
        $('.specialofferscontent').hide();
	$('a.distro').css('border-bottom', "none");
	$('a.pcsv').css('border-bottom', "1px solid black");  
	$('a.upcatalog').css('border-bottom', "1px solid black");  
	$('a.all').css('border-bottom', "1px solid black");  
	$('a.specialoffers').css('border-bottom', "1px solid black");
		$('a.merch').css('border-bottom', "1px solid black");
	$('.merchcontent').hide();
        });
	
	$('.specialoffers').click(function(){
        $('.specialofferscontent').show();
        $('.pcsvcontent').hide();
	$('.upcatalogcontent').hide();
        $('.distrocontent').hide();
        $('.mainstorecontent').hide();
	$('a.specialoffers').css('border-bottom', "none");
	$('a.pcsv').css('border-bottom', "1px solid black");  
	$('a.upcatalog').css('border-bottom', "1px solid black");  
	$('a.distro').css('border-bottom', "1px solid black");  
	$('a.all').css('border-bottom', "1px solid black");
	$('a.merch').css('border-bottom', "1px solid black");
	$('.merchcontent').hide();
        });
	
	$('.merch').click(function(){
        $('.merchcontent').show();
        $('.pcsvcontent').hide();
        $('.specialofferscontent').hide();
	$('.upcatalogcontent').hide();
        $('.distrocontent').hide();
        $('.mainstorecontent').hide();
	$('a.merch').css('border-bottom', "none");
	$('a.pcsv').css('border-bottom', "1px solid black");  
	$('a.upcatalog').css('border-bottom', "1px solid black");  
	$('a.distro').css('border-bottom', "1px solid black");  
	$('a.all').css('border-bottom', "1px solid black");
	$('a.specialoffers').css('border-bottom', "1px solid black");  
        });

    
    });