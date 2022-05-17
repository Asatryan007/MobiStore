$(document).on('click','#navigation .assortment_list li', function(){
	$(this).addClass('active_item').siblings().removeClass('active_item');
});