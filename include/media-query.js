// ***** SCROLL ****

if (window.innerWidth >= 870) {
	console.log(window.innerWidth);
	$(function() {
		  $.scrollify({
				section:".slide",
		    intersitialSection:".slide, .footer",

		    before:function(i,slide) {

		        var ref = slide[i].attr("data-section-name");

		        $(".pagination .active").removeClass("active");

		        $(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
		      },
		      afterRender:function() {
		        var pagination = "<ul class=\"pagination\">";
		        var activeClass = "";
		        $(".slide").each(function(i) {
		          activeClass = "";
		          if(i===0) {
		            activeClass = "active";
		          }
		          pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
		        });

		        pagination += "</ul>";

		        $(".home").append(pagination);
		        /*

		        Tip: The two click events below are the same:

		        $(".pagination a").on("click",function() {
		          $.scrollify.move($(this).attr("href"));
		        });

		        */
		        $(".pagination a").on("click",$.scrollify.move);
		      }

		  });
		});
	// ***** FIN *****

	// ***** JS REVEAL *****

	// Changing the defaults
	window.sr = ScrollReveal({ reset: true });

	// Customizing a reveal set
	//FORMATION
	sr.reveal('#encpb', { duration: 500 });
	sr.reveal('#epitech', { duration: 500 });
	sr.reveal('#eemi', { duration: 500 });
	//EXPERIENCE
	sr.reveal('#microdon-logo', { duration: 500 });
	sr.reveal('#microdon-text', { duration: 500 });
	sr.reveal('#aragon-text', { duration: 500 });
	sr.reveal('#aragon-logo', { duration: 500 });
	sr.reveal('#entrepreneur-logo', { duration: 500 });
	sr.reveal('#entrepreneur-text', { duration: 500 });
	//COMPETENCE
	sr.reveal('#progress', { duration: 500 });
	sr.reveal('.other-comp', { duration: 500 });
	//LANGUES
	sr.reveal('#country', { duration: 500 });
	sr.reveal('.element', { duration: 500 });
	//***** FIN *****
}
