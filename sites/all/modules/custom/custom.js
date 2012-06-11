(function ($) {	
Drupal.behaviors.custom = {
  attach: function (context) {
	$('#custom_first').val(Math.floor(Math.random()*101));
	$('#custom_second').val(Math.floor(Math.random()*101));
	$('#custom_submit').click(function() {
		if(document.getElementById('custom_first').value=='') {
			alert('Enter First number');
			return false;
		}
		else if(document.getElementById('custom_second').value=='') {
			alert('Enter Second number');
			return false;
		}
		else if(document.getElementById('custom_operation').value=='') {
			alert('Select an operation');
			return false;
		}
		else {
			var a=0;
			if($('#custom_operation option:selected').val()=='add') {
				a = parseInt($('#custom_first').val()) + parseInt($('#custom_second').val());
			}
			else if($('#custom_operation option:selected').val()=='difference') {
				a = parseInt($('#custom_first').val()) - parseInt($('#custom_second').val());
			}
			else if($('#custom_operation option:selected').val()=='multiply') {
				a = parseInt($('#custom_first').val()) * parseInt($('#custom_second').val());
			}
			else if($('#custom_operation option:selected').val()=='divide') {
				a = parseInt($('#custom_first').val()) / parseInt($('#custom_second').val());
			}
			if(isNaN(a))
				alert('Check your inputs');
			else {
				alert(a);
				$('#custom_first').val(Math.floor(Math.random()*101));
				$('#custom_second').val(Math.floor(Math.random()*101));
				$('#custom_operation').val('');
			}
			return false;
		}
	} );
}
};
})(jQuery);
