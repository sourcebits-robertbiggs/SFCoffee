var blogListTemplate = '<li class="comp" id="[[= data.id ]]" data-goto="detail">\
	<aside>\
		<img src="[[= data.image_small ]]" alt="[[= data.name ]]" width="100">\
	</aside>\
	<div>\
		<h3>[[= data.name ]]</h3>\
		<h4>[[= data.location ]]</h4>\
		<p>[[= data.description ]]</p>\
	</div>\
	<aside><span class="nav"></span></aside>\
</li>';

var blogDetail = '<li>\
	<img src="[[= data.image_small ]]" alt="[[= data.name ]]"><br>\
	<a class="offsiteLink" href="[[= data.site ]]"></a>\
	<h3>[[= data.name ]] </h3>\
	<h4>[[= data.location ]]</h4>\
	<p>[[= data.content ]]</p>\
</li>';


var blogListTmpl8 = $.template(blogListTemplate);
$(function() {
	shops.forEach(function(ctx, idx) {
		$('#blog-list').append(blogListTmpl8(ctx));
	})

	$('#backToMain').on('singletap', function() {
		$.UIGoBackToArticle('#main');
	});
	$('#exploreButton').on('singletap', function() {
		$.UINavigationHistory.push('#blogs')
		$.UIGoToArticle('#blogs');
	});


	var blogDetailTmpl8 = $.template(blogDetail);
	
	function getBlog(id) {
		shops.forEach(function(ctx) {
			if ( ctx.id === id ) {
				console.dir(blogDetailTmpl8(ctx));
				$('#blogDetail').html(blogDetailTmpl8(ctx));
			}
		})
	}
	$('#blog-list').on('singletap', 'li', function() {
		var id = this.id;
		getBlog(id);
	});



});