$.extend({
  templates : {},
   
  template : function ( tmpl, variable ) {
     var regex, delimiterOpen, delimiterClosed;
     variable = variable ? variable : 'data';
     regex = /\[\[=([\s\S]+?)\]\]/g;
     delimiterOpen = '[[';
     delimiterClosed = ']]'; 
     var template =  new Function(variable, 
        "var p=[];" + "p.push('" + tmpl
        .replace(/[\r\t\n]/g, " ")
        .split("'").join("\\'")
        .replace(regex,"',$1,'")
        .split(delimiterOpen).join("');")
        .split(delimiterClosed).join("p.push('") + "');" +
        "return p.join('');");
     return template;
  }
});


var masterTemplate = '\
<p class="date">[[= data.date ]]</p>\
<p><img src="[[= data.image ]]"></p>\
<h2>[[= data.name ]] <a class="offsiteLink" href="[[= data.site ]]"></a></h2>\
<h3>[[= data.location ]]</h3>\
<p>[[= data.content ]]</p>\
<p><a class="showMap" href="javascript:void(null)">Get Directions</a></p>\
<div class="map">[[= data.map ]]</div>';

var myTmpl8 = $.template(masterTemplate);
$(function() {
	$.each(shops, function(idx, ctx) {
		$('#blogs').append(myTmpl8(ctx));
	});
});
$(function() {
    $('.showMap').on('click', function() {
        $(this).parent().next().slideToggle();
    })
})