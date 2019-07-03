// DOM ready
jQuery(function($) {

  // Create the dropdown base
  $("<select />").appendTo(".top-menu");

  // Create default option "Menu"
  $("<option />", {
	 "selected": "selected",
	 "value"   : "#",
	 "text"    : "Menu"
  }).appendTo(".top-menu select");

  // Populate dropdown with menu items
  $(".top-menu a").each(function() {
   var el = $(this);
   $("<option />", {
	   "value"   : el.attr("href"),
	   "text"    : el.text()
   }).appendTo(".top-menu select");
  });

   // To make dropdown actually work
   // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
  $(".top-menu select").change(function() {
	window.location = $(this).find("option:selected").val();
  });

});
/*
     FILE ARCHIVED ON 07:25:07 Mar 17, 2016 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:47:28 Aug 28, 2018.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  LoadShardBlock: 88.145 (3)
  esindex: 0.01
  captures_list: 107.34
  CDXLines.iter: 13.502 (3)
  PetaboxLoader3.datanode: 80.089 (5)
  exclusion.robots: 0.362
  exclusion.robots.policy: 0.344
  RedisCDXSource: 1.59
  PetaboxLoader3.resolve: 1285.353 (2)
  load_resource: 1327.348
*/