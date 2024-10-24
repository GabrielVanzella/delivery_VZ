  if(window.name == "incorporate_franchise"){
    if($("div#header_new_version").length){
      $("div#header_new_version").css("display","none");
    }

    if($("div#delivery_conteudo").length){
      $("div#delivery_conteudo").css("background","none transparent");
    }
  };
  $('#general-modal').click(function(event){
    if($(event.target).is('div#area-de-entrega-map-modal')){
      $("body").removeClass("modal-open");
      $('div#general-modal').removeClass('is-shown');
    }
  });
  $('#general-modal .close').click(function(event){
    $("body").removeClass("modal-open");
    $('div#general-modal').removeClass('is-shown');
  });
  
//verificação para não abrir dica em página incorporada
if (window.self === window.top) {
var ua = navigator.userAgent.toLowerCase();
var addToHome = false;
if (ua.indexOf("android") > -1) {
} else if(ua.indexOf("iphone") > -1) {
    addToHome = true;
}

if (addToHome) {
  addToHomescreen({
    displayPace: 0,     // tempo (em min.) para mensagem ser mostrada novamente, default 1440 = 1 vez por dia
    message: "Adicione este app à sua lista de aplicativos: Clique em %icon e depois <strong>Adicionar á Tela de Início</strong>",
    modal: true,
    lifespan: 0,        // tempo (em seg.) para fechar automaticamente. 0 desabilita o fechamento automatico
    appID: "org.cubiq.addtohome.2487"
  });
}
}