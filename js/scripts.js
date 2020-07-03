$(document).ready(function() {
  menuMobile();
  setScrollTo();
  setValidations();
  setMagnificPopup();

});


/**
 * SET SCROLLTO
 */
function setScrollTo() {

  $('.scroll-target').on('click', function(e) {
    e.preventDefault();
    var target = $(this).attr('href');

    $.scrollTo(target, 500, {
      offset: 0
    });
  });

}


/**
 * SET MENU MOBILE
 */
function menuMobile() {

  $('.mobile-control').on('click', function(e) {
    e.preventDefault();
    $('.menu-mobile').slideToggle('fast');
  });

}

/**
 * MAGNIFIC POPUP
 */

function setMagnificPopup() {
  $('.image-link').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true
    }
  });
}



/**
 * SET VALIDATIONS
 */

function setValidations() {
  // FORMULARIO DE CONTATO
  $('#form-contato').validate({
    rules: {
      nome: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      mensagem: {
        required: true
      }
    },
    messages: {
      nome: {
        required: 'Este campo é obrigatório'
      },
      email: {
        required: 'Este campo é obrigatório',
        email: 'Este não parece ser um e-mail válido'
      },
      mensagem: {
        required: 'Este campo é obrigatório'
      }
    },
    submitHandler: function(form) {
      var dados = $(form).serialize();


      var url = $('input[name="url"]').val();
      var themeurl = $('input[name="themeurl"]').val();

      swal({
        title: "Enviando",
        text: "Aguarde enquanto enviamos sua mensagem",
        imageUrl: themeurl + '/img/ajax-loader.gif',
        showConfirmButton: false
      });

      var request = $.ajax({
        type: 'POST',
        url: url + "/wp-admin/admin-ajax.php",
        data: dados
      });
      request.done(function(data) {

        var info = $.parseJSON(data);

        swal({
          title: info.titulo,
          text: info.mensagem,
          showConfirmButton: true,
          confirmButtonColor: '#2F455B'
        });
        clearForm();
      });

    }
  });
}

/**
 * SET CLEARFORM
 */

function clearForm() {
  $('input[type="text"]').val('');
  $('textarea').val('');
}
