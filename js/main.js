function initListItems(){
	$('li').click(function(){
		
			$('li').removeClass('selected-item');
			$(this).addClass('selected-item');
		
	});
}

$('document').ready(function(){
	console.log('ready');


	$('#btn-link').click(function(){
		console.log('link');
	});

initListItems();

});