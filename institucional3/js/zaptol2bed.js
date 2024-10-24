$(document).ready(function() {
  new WOW().init();

  $('[data-toggle="tooltip"]').tooltip();

  $('.trialFlutuante i').click(function() {
	  $('.trialFlutuante').fadeOut();
  })

  if ($('#seu-negocio').length > 0) {
    var typed2 = new Typed('#seu-negocio', {
      strings: ['seu Restaurante', 'sua Pizzaria', 'seu Sushi Bar', 'sua Lanchonete', 'sua Hamburgueria', 'sua Loja de Roupas', 'seu Armarinho e muito mais...'],
      typeSpeed: 100,
      backSpeed: 50,
      loop: true
    });
  }

  $('#owl-depoimentos').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay: true,
    autoplayTimeout:10000,
    responsive:{
      0:{
        items:1
      }
    }
  });


	// Conversões Tag Manager
	$('.cliqueDemo').click(function(event) {
		dataLayer.push({'event': 'clique-demo'});
	})


  $('a[href*="#"]')
  // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();

          $('html, body').animate({scrollTop: target.offset().top - 20}, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
  });

  // Header Fixo
  if ($(document).scrollTop() > 180) {
    $('header').addClass('gradiente-padrao');
    $('header .col-md-2').addClass('col-md-1');
    $('header .col-md-1').removeClass('col-md-2');
    $('header .col-md-10').addClass('col-md-11');
    $('header .col-md-11').removeClass('col-md-10');
  }

  $(document).on('scroll', function() {
    if ($(document).scrollTop() > 180) {
      $('header').addClass('gradiente-padrao');
      $('header .col-md-2').addClass('col-md-1');
      $('header .col-md-1').removeClass('col-md-2');
      $('header .col-md-10').addClass('col-md-11');
      $('header .col-md-11').removeClass('col-md-10');
    } else {
      $('header').removeClass('gradiente-padrao');
      $('header .col-md-1').addClass('col-md-2');
      $('header .col-md-2').removeClass('col-md-1');
      $('header .col-md-11').addClass('col-md-10');
      $('header .col-md-10').removeClass('col-md-11');
    }
  });

  // Perguntas
  $('.perguntas li').click(function(event) {
    $(this).toggleClass('ativo');
    $(this).find('h6').fadeToggle('slow');
    $(this).find('i').toggleClass('fa-plus fa-minus', 'slow');
  });

  // Video
  $('.openVideo').click(function(event) {
    $('#modalVideo').modal();
  });


	var saida = 0;
	$(document).mouseleave(
		function(){
			if (saida == 0) {
				saida++;
				$('#modalDuvidas').modal()
			}
		}
	);

	// Menu Responsivo
  var menuOrigin = $('header .menu ul').html()
  $('.menuResponsivo .menu ul').html('<li><a href="/parceiros/" target="_blank">Seja um Parceiro</a></li>' + menuOrigin + '<li class="login"><a href="/entrar/" class="login"><i class="fas fa-user-circle"></i> Entrar</a></li>');

	function fechaMenuResponsivo() {
		$('.menuResponsivo').animate({left: '-100%'});
		$('.chamaMobile i').removeClass('fa-times');
		$('.chamaMobile i').addClass('fa-bars');
	}

	function abreMenuResponsivo() {
		$('.menuResponsivo').animate({left: '0'});
		$('.chamaMobile i').removeClass('fa-bars');
		$('.chamaMobile i').addClass('fa-times');
	}

	$('.chamaMobile').click(function(event) {
		if($(this).attr('data-click-state') == 1) {
			$(this).attr('data-click-state', 0);
			fechaMenuResponsivo();
		} else {
			$(this).attr('data-click-state', 1);
			abreMenuResponsivo();
		}
	});

	$('.menuResponsivo li a').click(function(event) {
		$('.chamaMobile').attr('data-click-state', 0);
		fechaMenuResponsivo();
	})

	// Dúvidas
	$('.openDuvidas').click(function(event) {
		event.preventDefault();
		$('#modalDuvidas').modal();
	});


	$('.perguntas .openMore').click(function(event){
		$('.perguntas .continuacao').fadeToggle();
		$(this).fadeOut();
	})


	// Recuperar senha
	$('.modalRecuperar').click(function(event) {
		$('#modalRecuperar').modal();
	});

  $(document).on('click', '#btn-send-contact', function() {
    let modal = $('#modalDuvidas')
    modal.find('.alert').hide()
    modal.find('.obrigatorio').removeClass('obrigatorio')

    let name = modal.find('input[name="name"]')
    let email = modal.find('input[name="email"]')
    let phone = modal.find('input[name="phone"]')
    let company = modal.find('input[name="company"]')
    let city = modal.find('input[name="city"]')

    if (name.val().trim() == '') {
      name.addClass('obrigatorio')
      let alert = modal.find('.alert.alert-danger')
      alert.find('span').html('Por favor, informe seu nome.')
      alert.show()
      name.focus()
      return
    }

    if (phone.val().trim() == '') {
      phone.addClass('obrigatorio')
      let alert = modal.find('.alert.alert-danger')
      alert.find('span').html('Por favor, informe seu telefone.')
      alert.show()
      phone.focus()
      return
    }

    $(this).hide()

    $.ajax({
      type: 'POST',
      url: '/contato/',
      contentType: false,
      processData: false,
      cache: false,
      data: new FormData($('form[id="form-contato"]')[0]),
      success: function (data) {
        if (data.error == 0) {
          try {
            fbq('track', 'Contact');
          } catch(err) {
            console.log(err)
          }

          let alert = modal.find('.alert.alert-success')
          alert.find('span').html('Obrigado! Seu contato foi enviado com sucesso. Entraremos em contato assim que possível.')
          alert.show()
        } else {
          let alert = modal.find('.alert.alert-danger')
          alert.find('span').html(data.msg)
          alert.show()
        }
      },
      error: function (error) {
        $('#btn-send-contact').show()
        let alert = modal.find('.alert.alert-danger')
        alert.find('span').html(error)
        alert.show()
      }
    })
  })

  $('#modal30DiasGratis').modal()
  $('.pricing .adicionais a.exp').click(function(event) {
    event.preventDefault()
    $('.pricing .adicionais .content').fadeToggle()
  })

  $(document).on('click', '#btn-send-partnership', function() {
    let fp = $('#form-partnership')

    let alert = fp.find('.alert.alert-danger')
    alert.find('span').html('')
    alert.hide()
    let name = fp.find('input[name="name"]')
    let email = fp.find('input[name="email"]')
    let phone = fp.find('input[name="phone"]')
    let company = fp.find('input[name="company"]')
    let city = fp.find('input[name="city"]')
    let state = fp.find('select[name="state"]')
    let businessArea = fp.find('input[name="business_area"]')
    let employees = fp.find('select[name="employees"]')
    let partnershipModel = fp.find('select[name="partnership_model"]')

    if (name.val().trim() == '') {
      name.addClass('obrigatorio')
      alert.find('span').html('Por favor, informe seu nome.')
      alert.show()
      name.focus()
      return
    }

    if ((email.val().trim() == '') || (!validateEmail(email.val().trim()))) {
      email.addClass('obrigatorio')
      alert.find('span').html('Por favor, informe seu e-mail corretamente.')
      alert.show()
      email.focus()
      return
    }

    if (city.val().trim() == '') {
      city.addClass('obrigatorio')
      alert.find('span').html('Por favor, informe sua cidade.')
      alert.show()
      city.focus()
      return
    }

    if (phone.val().trim() == '') {
      phone.addClass('obrigatorio')
      alert.find('span').html('Por favor, informe seu telefone.')
      alert.show()
      phone.focus()
      return
    }

    if (partnershipModel.val().trim() == '') {
      partnershipModel.addClass('obrigatorio')
      alert.find('span').html('Por favor, informe o modelo de parceria desejado.')
      alert.show()
      partnershipModel.focus()
      return
    }

    $(this).hide()

    $.ajax({
      type: 'POST',
      url: '/parceiros/',
      contentType: false,
      processData: false,
      cache: false,
      data: new FormData($('form[id="form-partnership"]')[0]),
      success: function (data) {
        if (data.error == 0) {
          let alert = fp.find('.alert.alert-success')
          alert.find('span').html('Obrigado! Sua solicitação foi enviada com sucesso. Entraremos em contato assim que possível.')
          alert.show()
        } else {
          let alert = fp.find('.alert.alert-danger')
          alert.find('span').html(data.msg)
          alert.show()
        }
      },
      error: function (error) {
        $('#btn-send-partnership').show()
        let alert = fp.find('.alert.alert-danger')
        alert.find('span').html(error)
        alert.show()
      }
    })
  })
})
