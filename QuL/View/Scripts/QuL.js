var getPage = function(_sp, _init){
	jQuery.ajax({
        url:    'http://qul.us/QuL.php?sequencePage='+_sp+(_init?'&initiating=1':''),
        type: 'html',
        success: function(result) {
                      if(result.isOk == false)
                          alert(result.message);
                      $('#container').html(result);
                      //console.log(result);
                  },
        async: false
    });
}

var initialize = function(){
	getPage(($('#spage').val()?$('#spage').val():'init'), true);
}

$(document).ready(function(){
	initialize();

	$('#btn_inicio').click(function(){
		getPage('init');
	});

	$('#btn_busca').click(function(){
		getPage('search');
	});

});
