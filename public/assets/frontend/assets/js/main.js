/* -----------------------------------------------------------------------------



File:           JS Core
Version:        1.0
Last change:    00/00/00 
-------------------------------------------------------------------------------- */
(function() {

	"use strict";

	var Wizard = {
		init: function() {
			this.Basic.init();  
		},

		Basic: {
			init: function() {

				this.preloader();
				this.NeedJobSlide();
				this.FileUpload();
				
			},
			preloader: function (){
				jQuery(window).on('load', function(){
					jQuery('#preloader').fadeOut('slow',function(){jQuery(this).remove();});
				});
			},
			NeedJobSlide: function (){
				$('#need-job-slide-id').owlCarousel({
					margin:30,
					responsiveClass:true,
					nav: true,
					dots: false,
					infinite: true,
					autoHeight: true,
					autoplay: false,
					navText:["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
					smartSpeed: 1000,
					responsive:{
						0:{
							items:1,
						},
						500:{
							items:1,
						},
						600:{
							items:1,
						},
						700:{
							items:1,
						},
						900:{
							items:3,
						},
						1000:{
							items:3,

						},
					},
				})
			},
			FileUpload: function (){
				$("#customFile").change(function() {
					filename = this.files[0].name
				});
				$(".custom-file-input").on("change", function() {
					var fileName = $(this).val().split("\\").pop();
					$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
				});
			},
		}
	}
	jQuery(document).ready(function (){
		Wizard.init();
	});

})();