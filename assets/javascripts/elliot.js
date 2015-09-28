var Project = {
	Like: {
		toggle: function(e) {
		var isProcessing = (e.el.hasClass('.like.processing')) ? 1 : 0;
			if (!e.el.hasClass('.like.processing')) {
				var $link = e.el;
				var li = $link.attr('href');
				var data = li.substring(li.indexOf('?')+1);
				var url = li.substring(0, li.indexOf('?'));

				$.ajax({
					type: 'POST',
					url: url,
					data: data,
					beforeSend: function() {
						$link.addClass('processing');
						$link.text('•');
					},
					success: function(responseHtml) {
						$link.parent().replaceWith(responseHtml);
						$('a.like.active').each(function(){
							$(this).find('i').each(function(){
								$(this).addClass('hover');
							});
						});
					}
				});
			}	
			return false;
		}
	}
}
var links = {iceberg:'http://society6.com/elliotgreenwood/Iceberg-uj8_Print'};
$(document).ready(function(){
    $('.item').parent().find('h5 a').removeClass("hovered");
	$('div.toolbar').remove();
	$('.buy').click(function(){
		trackEvent('Store', 'Buy');
	});

	$('.prices').hide();
	$('a.heading').click(function(){
	 	$(this).find('i').toggleClass('up');
	    $(this).parent().find('.prices').slideToggle('slow');
		return false;
	});
	$('a.size-option').each(function(){
		$(this).click(function(){
			$(this).parent().parent().find('i').remove();
			$(this).parent().append(' <i class="icon-tick" style="color:#9ecd52;"></i>');
			var classname = $(this).attr("class").split(' ');
			var id = classname[classname.length-1];
			var el = $('#buy-'+id);
			el.attr('href',links[id]+$(this).attr('href'));
			el.find('.current-price').html($(this).find('.price').html());
			var html = $(this).html();
			html = html.replace(/<strong class="price">.*<\/strong>/gi, '');
			$(this).parent().parent().parent().find('.heading').html(html + " <i class='icon-open up'></i>");
			return false;
		});
	});
	function trackEvent(label, event_type) {
	    if (_gaq) {
	        _gaq.push(['_trackEvent', label, event_type]);
	    }
	}

	$('ul.contact-links li.email a').hover(
		function() {

			$('#contact-text').html('hello@elliotgreenwood.co.uk');
		},
		function () {
			$('#contact-text').html('Where you can find me.');
	});
	$('ul.contact-links li.twitter a').hover(
		function() {

			$('#contact-text').html('@egnwd');
		},
		function () {
			$('#contact-text').html('Where you can find me.');
	});
	$('ul.contact-links li.dribbble a').hover(
		function() {

			$('#contact-text').html('Dribbble');
		},
		function () {
			$('#contact-text').html('Where you can find me.');
	});
	$('ul.contact-links li.github a').hover(
		function() {

			$('#contact-text').html('Github');
		},
		function () {
			$('#contact-text').html('Where you can find me.');
	});
	$('ul.contact-links li.ig a').hover(
		function() {

			$('#contact-text').html('Instagram');
		},
		function () {
			$('#contact-text').html('Where you can find me.');
	});
    $('.item').hover(function() {
        $(this).parent().find('h5 a').addClass("hovered");
    },function() {
        $(this).parent().find('h5 a').removeClass("hovered");
    });

	$('a.like').hover(function() {
					$(this).find('i').each(function(){
						$(this).addClass('hover');
					});
			}, function() {
					$(this).not('a.like.active').find('i').each(function(){
						$(this).removeClass('hover');
					});
			}).live('click', function(){
					Project.Like.toggle({
						el: $(this)
					})
					return false;
	});
	$('a.tweet').click(function(){
		var left = (screen.width/2)-(340);
		var top = (screen.height/2)-(340);
		newwindow=window.open($(this).attr('href'),'Tweet','height=500,width=680,top='+top+',left='+left);
		if (window.focus) {newwindow.focus()}
		return false;
	});
	$('a.like.active').each(function(){
		$(this).find('i').each(function(){
			$(this).addClass('hover');
		});
	});
});
