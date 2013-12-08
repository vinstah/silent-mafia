$(function() {
	///*** add client on table page ***////
	$('#click td').click(function(){
		//get location of clicked element
		var place =	$(this).offset();
		// set div to easy variable
		var click = $('div.click');
		//get timedate value
		var time = $(this).parent().find('td:eq(0)').text();
		//get day
		//var day = $(this).attr('class').val();
		
		//set css position
		click.css({
		'position':'absolute',
		'left': place.left+15,
		'top':place.top+15
		});
		//show the element
		click.toggle().fadeIn();
		
		//find $(this).text()
		var contents = $(this).text(); 
		// check if clicked on time
		var check = $(this).text();
		//if var check doesnot equil var time
		if(check == time){click.css({ 'display':'none'});}
		else if(contents == "N/A"){ var html = ""; click.css({ 'display':'none'});}
		else if( contents != "N/A"){
			var html = '<a href="" id="add">add appointment</a> @ ' + time + ' on ';
		}
		//add content to div.click
		click.html(html);
	});//end click
	
	//hide pop-up when double clicked
	$('div.click').dblclick(function() {$(this).hide()});
	
	//send data to addappt.php
	
});//end ready