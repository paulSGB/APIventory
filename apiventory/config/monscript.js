$(function(){
	$("div.PPM_CLIENT form" ).each(function() {
		//console.log($( this ).children('b').val());
		//console.log($( this ).children('form').attr('action'));
		testAPI($( this ).parent(),$( this ));
	});
	$("form").submit(function(){
        testAPI($( this ).parent(),$(this));
    });

	setTimeout(function(){
		window.location.reload(1);
	}, 300000);
});


function testAPI(objetParent, objet){
	var objetHTML = objetParent;
	$.ajax({
			type: 'POST',
			url: 'curlWBS.php',
			data: {
				info 	:	objetParent.children('b').html(),
				url		:	objet.attr('action'),
			},
			success: function (json){
				const reponse = JSON.parse(json);
				//console.log(reponse);
				if (reponse.valide ) {
					objetHTML.children('b').html("Version : " + reponse.version);
					objetHTML.children('h5[name="date_creation"]').html(reponse.date);
					objet.find('form.etats').removeClass('EtatKO');
					objet.find('form.etats').addClass('EtatOK');
				}
				else {
					objet.find('form.etats').removeClass('EtatOK');
					objet.find('form.etats').addClass('EtatKO');
				}
			},
			error: function (request, status, error) {
				if (!deconnection(request)) alert(request.responseText);
			},
			complete: function () {}
		});
}
