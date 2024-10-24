<?php
$login = new Login(3);
if($login->CheckLogin()):
  $idusuar = $_SESSION['userlogin']['user_id'];
  $lerbanco->ExeRead('ws_empresa', "WHERE user_id = :idcliente", "idcliente={$idusuar}");
  if (!$lerbanco->getResult()):       
  else:
    foreach ($lerbanco->getResult() as $i):
      extract($i);
    endforeach;
    header("Location: {$site}{$nome_empresa_link}/pedidos");
  endif;
else:
endif;
?>
<html lang="pt-br">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
        <meta charset="utf-8" />
        <title><?=$texto['titulo_site_landing'];?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="institucional3/css/bootstrap.min.css">
        <link rel="stylesheet" href="institucional3/css/owl.carousel.min.css">
        <link rel="stylesheet" href="institucional3/css/animate.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/institucional3/css/all.min.css">
        <link rel="stylesheet" href="institucional3/css/jquery-ui.min.css">
        <link rel="stylesheet" href="institucional3/css/jquery.modal.min.css" />
        <link rel="stylesheet" href="fonts/millar/millar.css">
        <link rel="stylesheet" href="institucional3/css/zaptol2bed.css?v=1.8.12">
        <link rel="shortcut icon" type="image/png" href="institucional3/img/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <meta name="description" content="<?=$texto['descricao_site_landing'];?>">
        <meta name="keywords" content="<?=$texto['keywords_landing'];?>">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 day">
        <meta name="language" content="Portuguese">
        <meta name="generator" content="<?=$texto['nome_site_landing'];?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?=$site;?>" />
        <meta property="og:image" content="img/logo-marca.png" />
        <meta property="og:description" content="<?=$texto['descricao_site_landing'];?>" />
    </head>
		
    <body class="home blog">
        <!-- WhatsApp Flutuante -->
        <a href="https://api.whatsapp.com/send?phone=<?=$texto['telefoneAdministracaoVendas'];?>" target="_blank" class="whatsFlutua" data-toggle="tooltip" data-placement="right" title="Atendimento via WhatsApp."><i class="fab fa-whatsapp"></i></a> 
        
        <!-- Menu Responsivo -->
        <div class="menuResponsivo gradiente-padrao">
            <div class="logo">
                <a href="<?=$site;?>">
                    <img src="img/logo-marca.png" alt="<?=$texto['titulo_site_landing'];?> - <?=$texto['descricao_site_landing'];?>">
                </a>
            </div>
             
        </div>
        <!-- Site -->
        <header>
            <div class="principal">
                <div class="container">
                    <div class="flutua">
                        <a href="https://api.whatsapp.com/send?phone=<?=$texto['telefoneAdministracaoVendas'];?>" class="whats"><i class="fab fa-whatsapp"></i><img src="https://image.flaticon.com/icons/png/128/1384/1384055.png" width="12px"> WhatsApp</a>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-6 logo">
                            <a href="<?=$site;?>">
                              <img src="img/logo-marca.png" style="width:108px;" alt="Cardápio de pedidos  via WhatsApp.">
                            </a>
                        </div>
                        <div class="col-md-8 col-6 menu">
                            <ul>
                                <li><a href="index.html#recursos">Recursos</a></li>
                                <li><a href="index.html#valores">Valor</a></li>
                                <li class="demo cliqueDemo"><a href="Demo" target="_blank">Demonstração</a></li>
                            </ul>
                             
                        </div>
                    </div>
                </div>
            </div>
        </header>
<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <h1>Sistema de pedidos integrado ao seu <span class="verde">WhatsApp</span>.</h1>
                <ul>
                    <li class="eficiente">Forneça um cardápio ou catálogo on-line para seus clientes</li>
                    <li class="pratico">Os pedidos chegam em seu WhatsApp e no Painel de Acompanhamento de Pedidos</li>
                    <li class="sem-taxa">Sem taxas de comissionamento. Apenas uma mensalidade e nada mais.</li>
                </ul>
            </div>
            <div class="col-md-6 wow slideInRight">
                <img src="institucional3/img/celular-intro.png" alt="Cardápio de pedidos via WhatsApp.">
            </div>
        </div>
    </div>
</section>
<section class="video">
    <div class="container">
        <div class="row">
            <div class="col-md-12 conteudo owl wow fadeInRight">
                <h3>Torne seu cardápio ou catálogo de produtos Prático e Fácil para seus clientes.</h3>
                <p>A plataforma foi desenvolvida para você criar seu <strong>cardápio ou catálogo on-line completo</strong> e receber seus <strong>pedidos via WhatsApp</strong>. Edite seu cardápio ou catálogo a qualquer momento direto do seu celular ou computador.</p>
            </div>
        </div>
    </div>
</section>
<section class="cta-corpo gradiente-padrao">
	<div class="container">
		<div class="texto">
			<h3>Qual o Valor?</h3>
			<p>Organize seus pedidos online por <strong>apenas R$ <?=$texto['valorPlanoUm'];?>,00 mensais</strong>, sem taxa de adesão e sem comissionamentos.</p>
		</div>
		<a href="#valores">Saiba mais</a>
	</div>
</section>
<section class="passos">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title">
                <h3>Como funciona?</h3>
                <p>Você oferece rapidez para seu cliente, e ganha eficiência para seu negócio.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 bloco fadeInLeft wow">
                <img src="institucional3/img/passo-1.png">
                <h4>Acesso ao Cardápio</h4>
                <p>O cliente faz o acesso do seu <strong>cardápio on-line</strong> de maneira fácil sem necessidade de baixar nenhum aplicativo.</p>
            </div>
            <div class="col-md-4 fadeInUp wow bloco">
                <img src="institucional3/img/passo-2.png">
                <h4>Seleção de Produtos</h4>
                <p>Com <strong>poucos cliques</strong>, o cliente tem a facilidade de navegar por todo seu cardápio e selecionar os produtos que deseja.</p>
            </div>
            <div class="col-md-4 fadeInRight wow bloco">
                <img src="institucional3/img/passo-3.png">
                <h4>Pedido Recebido</h4>
                <p>O pedido chega <strong>direto no seu WhatsApp</strong> de forma organizada através do número de celular do seu cliente.</p>
            </div>
        </div>
        <div class="row frase-principal">
            <div class="col-md-8 offset-md-2">
                <h3>Pedidos via WhatsApp para <span id="seu-negocio"></span></h3>
            </div>
        </div>
    </div>
</section>
<section class="comece">
    <div class="container">
        <div class="texto">
            <h3>Faça o teste!</h3>
            <p>Faça um pedido em nosso cardápio de <strong>demonstração</strong> e veja como funciona.</p>
        </div>
        <a href="Demo" target="_blank">Ver Demonstração</a>
    </div>
</section>
<a name="recursos"></a>
<section class="porque gradiente-padrao">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title">
                <h3>Porque ter um cardápio on-line</h3>
                <p>Veja algumas vantagens em aplicar o Zaptol em seu estabelecimento.</p>
            </div>
        </div>
        <div class="row alinha">
            <div class="col-md-4 fadeInLeft wow left text-right">
                <div class="box">
                    <img src="institucional3/img/icone-sem-taxa.png">
                    <p>Não pagar <strong>nenhuma taxa</strong><br>sobre as vendas</p>
                </div>
				 <div class="box">
                    <img src="institucional3/img/icone-exclusividade.png">
                    <p>O usuário <strong>não precisa instalar</strong> nenhum aplicativo</p>
                </div>
                <div class="box">
                    <img src="institucional3/img/icone-facilidade.png">
                    <p>Automatize o recebimento <br>de <strong>pedidos via WhatsApp</strong></p>
                </div>
                <div class="box">
                    <img src="institucional3/img/icone-comodidade.png">
                    <p>Interface <strong>fácil e amigável</strong><br> para o cliente pedir</p>
                </div>                
            </div>
            <div class="col-md-4 center text-center">
                <img src="institucional3/img/celular-porque.png" class="fadeInUp wow">
            </div>
            <div class="col-md-4 fadeInRight wow right">
				<div class="box">
					<img src="institucional3/img/icone-editar.png">                    
                    <p><strong>Editar facilmente</strong> preço e produtos em tempo real</p>
                </div>
                <div class="box">
                   <img src="institucional3/img/icone-visibilidade.png">
                    <p>Adicionar <strong>variações e complementos</strong> de produtos</p>
                </div>
                <div class="box">
                    <img src="institucional3/img/icone-fidelizar.png">
                    <p><strong>Fidelizar</strong> os seus clientes</p>
                </div>
                <div class="box">
                    <img src="institucional3/img/icone-design.png">
                    <p>Seu site com sua marca e cores</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="painel">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 title-line">
                <h3>Conte também com:</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 subtitle text-center">
                <h3>Painel de Controle</h3>
                <p>Você pode montar seu <strong>cardápio com quantos itens quiser</strong> e criar categorias e subcategorias para organizar seu menu com Tipo de itens, Salgados, Bebidas, Doces, Lanches, Acompanhamentos, etc.</p>
            </div>
        </div>
        <div class="row items">
            <div class="col-md-3 fadeInLeft wow">
                <div class="box">
                    <img src="institucional3/img/icone-produtos.png">
                    <p><strong>Cadastro ilimitado</strong>
                        <br>de itens.</p>
                </div>
            </div>
            <div class="col-md-3 fadeInLeft wow">
                <div class="box">
                    <img src="institucional3/img/icone-categorias.png">
                    <p>Organização por <strong>categorias</strong> e tipos de produtos.</p>
                </div>
            </div>
            <div class="col-md-3 fadeInRight wow">
                <div class="box">
                    <img src="institucional3/img/icone-responsivo.png">
                    <p>Acesso por<br><strong>qualquer dispositivo</strong>.</p>
                </div>
            </div>
            <div class="col-md-3 fadeInRight wow">
                <div class="box">
                    <img src="institucional3/img/icone-editar.png">
                    <p><strong>Editar facilmente</strong> o visual de seu cardápio on-line.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<a name="valores"></a>
<section class="valores gradiente-padrao pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 title text-center">
                <h3>Valor</h3>
                <p>Plano de <strong>assinatura mensal</strong> sem taxa de adesão e <strong>sem comissionamentos</strong>!</p>
            </div>
        </div>
        <div class="row">
            <!-- 99/mes -->
            <div class="col-lg-12">
                <div class="card mb-5 mb-lg-0">
                    <div class="card-header">
						<div class="center">
							<h6 class="card-price text-center"><small>R$</small><strong><?=$texto['valorPlanoUm'];?>,00</strong><span class="period">/mês</span></h6>
							<h5 class="card-title text-center"><?=$texto['DiasDeTeste'];?> Dias grátis para testar.</h5>
						</div>
                    </div>
                    <div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<h5>Serviços Inclusos</h5>
							</div>
							<div class="col-md-6">
								<ul class="fa-ul">
									<li>
										<span class="fa-li"><i class="fas fa-check"></i></span> Site Cardápio Online
										<small>Site do seu cardápio disponível em Ex: <strong style="color:#006699"><?=$site;?>suaempresa</strong></small>
									</li>
									<li>
										<span class="fa-li"><i class="fas fa-check"></i></span> Pedidos via WhatsApp
										<small>Receba pedidos diretamente em seu WhatsApp</small>
									</li>
									<li>
										<span class="fa-li"><i class="fas fa-check"></i></span> Painel de Controle Web
										<small>Gerencie seu cardápio em tempo real</small>
									</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="fa-ul">
									<li>
										<span class="fa-li"><i class="fas fa-check"></i></span> Produtos Ilimitados
										<small>Cadastro ilimitado de itens</small>
									</li>
									<li>
										<span class="fa-li"><i class="fas fa-check"></i></span> Endereço de Clientes
										<small>Receba o endereço e telefone do cliente no pedido</small>
									</li>
									<li>
										<span class="fa-li"><i class="fas fa-check"></i></span> Personalização de Cores
										<small>Personalize seu cardápio com as cores da sua marca</small>
									</li>                   
								</ul>
							</div>
						</div>
						
                    </div>
					
                </div>
            </div>
			</div>
			<div align="center"><h6 class="card-title text-center" align="center"><a href="cadastro" class="btn btn-primary" target="_blank">Contratar</a></h6></div>
          
        
    </div>
</section>
<a name="perguntas-frequentes"></a>
<section class="perguntas" id="duvidas">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title">
                <h3>Perguntas Frequentes</h3>
                <p>Rapidez para seu cliente, eficiência para seu negócio.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 bloco fadeIn wow">
                <ul>
                    <li class="ativo">
                        <h5>O <?=$texto['titulo_site_landing'];?> funciona em qualquer seguimento comercial?</h5>
                        <h6>Sim, a versão on-line do catálogo ou cardápio só vai te trazer benefícios. Você pode vender qualquer produto pelo <?=$texto['titulo_site_landing'];?>.</h6>
                        <i class="fas fa-minus"></i>
                    </li>
                    <li>
                        <h5>Da para personalizar meu Catálogo ou Cardápio?</h5>
                        <h6 style="display:none">Sim, o layout são ajustáveis com a identidade da sua empresa.</h6>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li>
                        <h5>Como faço para editar preços e produtos?</h5>
                        <h6 style="display:none">Através do painel administrativo é possível editar todos os itens do catálogo ou cardápio em tempo real, direto de seu celular ou computador.</h6>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li>
                        <h5>O que eu preciso para usar o <?=$texto['titulo_site_landing'];?>?</h5>
                        <h6 style="display:none">O <?=$texto['titulo_site_landing'];?> foi feito para os emprendedores que precisam de um catálogo ou cardápio on-line com ótimos recursos e fácil acesso na internet.</h6>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li>
                        <h5>Como faço para comprar?</h5>
                        <h6 style="display:none">Preencha o cadastro pelo site  clicando <a href="index.html">aqui</a>. A liberação do sistema ocorre imediatamente após a conclusão do seu cadastro. Você terá 30 dias para testar sem nenhum custo!</h6>
                        <i class="fas fa-plus"></i>
                    </li>
                    <li>
                        <h5>Preciso ter um site para criar meu cardápio?</h5>
                        <h6 style="display:none">Não! Nosso sistema tem tudo o que você precisa para exibir o seu cardápio on-line para os seus clientes.</h6>
                        <i class="fas fa-plus"></i>
                    </li>
					<button class="openMore"><i class="fas fa-plus"></i> Ver mais perguntas</button>
					<div class="continuacao" style="display:none">
						<li>
							<h5>Como clientes acessam meu cardápio?</h5>
							<h6 style="display:none">O seu cardápio é otimizado para ser aberto em qualquer plataforma e modelos de celulares. Através de um link exclusivo e acesso à Internet, qualquer usuário pode abrir seu cardápio on-line.</h6>
							<i class="fas fa-plus"></i>
						</li>
					</div>
                </ul>
            </div>
        </div>
    </div>
</section>
  
 
      <footer>
          <div class="rodape gradiente-padrao">
              <div class="container">
                  <div class="row">
                      <div class="col-md-2 logo text-center">
                          <a href="<?=$site;?>"><img src="img/logo-marca.png" style="width:84px;" alt="Cardápio de pedidos  via WhatsApp."></a>
                      </div>
                      <div class="col-md-10">
                          <div class="dados">
                              <a href="tel:5511982889012" class="sac">Fale Conosco <strong>(11) 98288-9012</strong></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="copyright">
           
              <div class="final">
				<div class="container">
					<p>&copy; 2021 - Copyright by <?=$texto['titulo_site_landing'];?></p>
				</div>
			  </div>
          </div>
      </footer>
		<div class="telefone-mobile">
			<div class="container">
				<div class="row">
					<div class="col-6 whatsapp">
						<a href="https://api.whatsapp.com/send?phone=5511982889012" target="_blank">
							<i class="fab fa-whatsapp" aria-hidden="true"></i>
							<span>WhatsApp</span>
						</a>
						</div>
						<div class="col-6 contrates">
						<a href="index.html">
							<i class="fab fa-cc-mastercard" aria-hidden="true"></i>
							<span>Contratar</span>
						</a>
					</div>
				</div>
			</div>
		</div>
    </body>
    <script src="institucional3/js/jquery-3.4.0.min.js"></script>
    <script src="institucional3/js/jquery-ui.min.js"></script>
    <script src="institucional3/js/jquery.ui.touch-punch.min.js"></script>
    <script src="institucional3/js/jquery-scrollspy.min.js"></script>
    <script src="institucional3/js/jquery.mask.min.js"></script>
    <script src="institucional3/js/popper.min.js"></script>
    <script src="institucional3/js/bootstrap.bundle.min.js"></script>
    <script src="institucional3/js/owl.carousel.min.js"></script>
    <script src="institucional3/js/wow.min.js"></script>
    <script src="institucional3/js/typed.min.js"></script>
    <script src="institucional3/js/jquery.modal.min.js"></script>
    <script src="institucional3/js/common2bed.js?v=1.8.12"></script>
    <script src="institucional3/js/zaptol2bed.js?v=1.8.12"></script>

</html>
