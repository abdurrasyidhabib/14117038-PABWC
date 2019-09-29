// membuat event tertentu saat link diklik
$('.page-scroll').on('click', function(e){
	// ambil isi href
	var tujuan= $(this).attr('href');

	// tangkap elemen yang bersangkutan
	var elemenTujuan = $(tujuan);

	// untuk apa ditangkap elemennya?
	// - untuk menghitung jarak ke bagian paling atas halaman

	// pindahkan scroll

	$('html').animate({
		scrollTop: elemenTujuan.offset().top - 70
	}, 900, 'easeInOutExpo');

	e.preventDefault();
});

// parallax
	//about
$(window).on('load', function(){
	$('.pKiri').addClass('pMuncul');
	$('.pKanan').addClass('pMuncul');
})

$(window).scroll(function(){
	// jumbotron
	var wScroll = $(this).scrollTop()
	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ (wScroll)/5 +'%)'
	});

	$('.jumbotron h1').css({
		'transform': 'translate(0px, ' + (wScroll) / 1.5 + '%)'
	});

	$('.jumbotron p').css({
		'transform': 'translate(0px, ' + wScroll / 0.9 + '%)'
	});

	// portfolio
	if( wScroll > ($('.portfolio').offset().top - 100)){
		$('.portfolio .img-thumbnail').each(function(i){
			setTimeout(function() {
				$('.portfolio .img-thumbnail').eq(i).addClass('muncul')
			}, 300);
		});
	}
});

