/*
$('#submit').click(function (){	
	var data = $(".inputs").serializeArray();
	$('#BeerNum').load("beer-ajax.php", data);
	alert(data);
)}
*/
/*
$('#submit').click(function(){
    var formData = $('.inputs').serializeArray();
    $('#BeerNum').post("beer-ajax.php", formData);
)};
*/
$('#submit').click(function(){
    var formData = $('.inputs').serialize();
    $.post('beer-ajax.php', formData, function(data){
        $('#BeerNum').html(data);                                
    });
});