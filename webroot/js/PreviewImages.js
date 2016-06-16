 function readURL(input, a) {
 	if (input.files && input.files[0]) {
 		var reader = new FileReader();

 		reader.onload = function(e) {
 			$(a).attr('src', e.target.result);
 		}

 		reader.readAsDataURL(input.files[0]);
 	}
 }

 $("#imagen").change(function() {
 	readURL(this, '#blah');
 });

 $("#imagen2").change(function() {
 	readURL(this, '#blah2');
 });
 $("#imagen3").change(function() {
 	readURL(this, '#blah3');
 });
 $("#imagen4").change(function() {
 	readURL(this, '#blah4');
 });
 $("#imagen5").change(function() {
 	readURL(this, '#blah5');
 });