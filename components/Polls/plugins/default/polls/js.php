//<script>
Ossn.RegisterStartupFunction(function() {
    $(document).ready(function() {
    		$('body').on('click', '.ossn-wall-container-menu-polls', function(){
		    	// Ossn.ajaxRequest({
		     //        url: "https://weplay.io/ajax/wall/polls/add",
		     //        callback: function(callback) {
		     //        	console.log(callback);
		     //        }
		     //    });		

				$.ajax({
						url         : "https://weplay.io/ajax/wall/polls/add",
						cache       : false,
						dataType    : 'json',
						// отключаем обработку передаваемых данных, пусть передаются как есть
						processData : false,
						// отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос
						contentType : false,
						// функция успешного ответа сервера
						success     : function( e ){
							$('.ossn-wall-container-data.ossn-wall-container-data-post').toggle();
							$('form#ossn-wall-form .ossn-widget').remove();
							$('form#ossn-wall-form fieldset').append(e['content']);
						},
					});														  
			});
    		$('body').on('click', '.ossn-wall-container-menu-post', function(){
				$('form#ossn-wall-form .ossn-widget').remove();											  
			});
    		$('body').on('click', '.ossn-wall-container-menu-pollsgroup', function(){
					$url = window.location.href;
					window.location.href = 'https://weplay.io/polls/add/group/'+$url.split('/').at(-2);															  
			});			
			var $counter = 1;
    		$('body').on('click', '#polls-add-option', function(){
					$counter++;
					$('.polls-form-options').append('<input type="text" name="poll_options_'+$counter+'" placeholder="'+Ossn.Print('polls:option:title')+'" />');				
					//due to #1474 we need to add different methods for these polls options as array breaks
					//i don't wanted to call input directly in action due to #1474
					$('#polls-form-counter').val($counter);
			});
        ///	$('.poll-embed').on('click', function(e) {
			////	$guid = $(this).attr('data-guid');
         //	   	Ossn.MessageBox('polls/embedcode?guid='+$guid);
       		//});			
    });
});
Ossn.poll = function($guid){
	var $form = '#ossn-polls-form-questions-'+$guid;
	Ossn.ajaxRequest({
            url: "https://weplay.io/ajax/polls/vote",
            form: $form,
            beforeSend: function() {
               	$($form).find('.ossn-poll-loading-submit').show();
                $($form).find('input[type="submit"]').hide();
            },
            callback: function(callback) {
            	console.log(callback);
                if (callback['status'] == true) {
					$button = $($form).find('#poll-submit-button');
					$('.ossn-poll-item-main-'+$guid).html(callback['option']);
                    Ossn.trigger_message(callback['success']);
                }
                if (['status']  == false) {
                    Ossn.trigger_message(callback['error'], 'error');
                }
            }
        });				
};