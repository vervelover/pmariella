jQuery(document).ready(function($){

	$('.flexslider-cioccolata').flexslider({
		animation: 'slide',
		slideshow: true,
		controlNav: true,
        touch: true,
        itemWidth: 300,		                 
        itemMargin: 10,
        move: 1,
        directionNav: true
	});

	$('.flexslider-torte').flexslider({
		animation: 'slide',
		initDelay: 1000,
		slideshow: true,
		controlNav: true,
        touch: true,
        itemWidth: 300,		                 
        itemMargin: 10,
        move: 1,
        directionNav: true
	});      

	$('.flexslider-festivita').flexslider({
		animation: 'slide',
		initDelay: 1000,
		slideshow: true,
		controlNav: true,
        touch: true,  
        itemWidth: 300,	               
        itemMargin: 10,
        move: 1,
        directionNav: true
	}); 

	$('.flexslider-pasticceria-tradizionale').flexslider({
		animation: 'slide',
		initDelay: 5000,
		slideshow: true,
		controlNav: true,
        touch: true,
        itemWidth: 300,		                 
        itemMargin: 10,
        move: 1,
        directionNav: true
	});

	$(window).load(function() {

		$('#cioccolata').show();
		$('#torte').hide();
		$('#festivita').hide();
		$('#pasticceria-tradizionale').hide();

		$('.gallery-filter__cioccolata-filter').on("click", function() {
			$(this).addClass('active');
			$('.gallery-filter__torte-filter').removeClass('active');
			$('.gallery-filter__festivita-filter').removeClass('active');
			$('.gallery-filter__pasticceria-tradizionale-filter').removeClass('active');
			$('#cioccolata').show();
			$('#torte').hide();
			$('#festivita').hide();
			$('#pasticceria-tradizionale').hide();
		});
		$('.gallery-filter__torte-filter').on("click", function() {
			$(this).addClass('active');
			$('.gallery-filter__cioccolata-filter').removeClass('active');
			$('.gallery-filter__festivita-filter').removeClass('active');
			$('.gallery-filter__pasticceria-tradizionale-filter').removeClass('active');
			$('#cioccolata').hide();
			$('#torte').show();
			$('#festivita').hide();
			$('#pasticceria-tradizionale').hide();
		});
		$('.gallery-filter__festivita-filter').on("click", function() {
			$(this).addClass('active');
			$('.gallery-filter__torte-filter').removeClass('active');
			$('.gallery-filter__cioccolata-filter').removeClass('active');
			$('.gallery-filter__pasticceria-tradizionale-filter').removeClass('active');
			$('#cioccolata').hide();
			$('#torte').hide();
			$('#festivita').show();
			$('#pasticceria-tradizionale').hide();
		});
		$('.gallery-filter__pasticceria-tradizionale-filter').on("click", function() {
			$(this).addClass('active');
			$('.gallery-filter__torte-filter').removeClass('active');
			$('.gallery-filter__cioccolata-filter').removeClass('active');
			$('.gallery-filter__festivita-filter').removeClass('active');
			$('#cioccolata').hide();
			$('#torte').hide();
			$('#festivita').hide();
			$('#pasticceria-tradizionale').show();
		});

	})

});