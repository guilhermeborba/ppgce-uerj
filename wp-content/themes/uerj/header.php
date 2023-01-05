<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" type="text/css" />

	<?php wp_head(); ?>
</head>

<body class="stretched">

	<div id="wrapper" class="clearfix">

		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<div id="logo">
						<a href="<?php echo site_url();?>" class="standard-logo" data-dark-logo="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-dark.png"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="UERJ"></a>
						<a href="<?php echo site_url();?>" class="retina-logo" data-dark-logo="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-dark@2x.png"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="UERJ"></a>
					</div><!-- #logo end -->

					<nav id="primary-menu">
						<ul>
							<li class="current"><a href="<?php echo site_url();?>"><div>INÍCIO</div></a></li>
							<li><a href="<?php echo site_url();?>/sobre"><div>SOBRE</div></a>
								<ul>
									<li><a href="<?php echo site_url();?>/sobre/apresentacao"><div>APRESENTAÇÃO</div></a></li>
									<li><a href="<?php echo site_url();?>/sobre/infraestrutura"><div>INFRAESTRUTURA</div></a></li>
									<li><a href="<?php echo site_url();?>/sobre/a-marca"><div>A MARCA</div></a></li>
									<li><a href="<?php echo site_url();?>/sobre/equipe"><div>EQUIPE</div></a></li>
									<li><a href="<?php echo site_url();?>/sobre/pesquisa"><div>PESQUISA</div></a></li>
									<li><a href="<?php echo site_url();?>/sobre/legislacao"><div>LEGISLAÇÃO</div></a></li>
								</ul>								
							</li>						
							<li><a href="<?php echo site_url();?>/docentes"><div>DOCENTES</div></a></li>
							<li><a href="#"><div>MESTRADO</div></a>
								<ul>
									<li><a href="<?php echo site_url();?>/mestrado/apresentacao/"><div>APRESENTAÇÃO</div></a></li>
									<li><a href="<?php echo site_url();?>/mestrado/apresentacao-de-projeto/"><div>APRESENTAÇÃO DO PROJETO</div></a></li>
									<li><a href="<?php echo site_url();?>/mestrado/disciplinas-e-horarios/"><div>DISCIPLINAS E HORÁRIOS</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>DOUTORADO</div></a>
								<ul>
									<li><a href="<?php echo site_url();?>/doutorado/apresentacao/"><div>APRESENTAÇÃO</div></a></li>
									<li><a href="<?php echo site_url();?>/doutorado/apresentacao-de-projeto/"><div>Estrutura do curso</div></a></li>
									<li><a href="<?php echo site_url();?>/doutorado/disciplinas-e-horarios/"><div>DISCIPLINAS E HORÁRIOS</div></a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url();?>"><div>DISCENTES</div></a>
								<ul>
									<li><a href="<?php echo site_url();?>/discentes/bolsa-de-estudos/"><div>BOLSAS</div></a></li>
									<li><a href="<?php echo site_url();?>/discentes/ementas/"><div>EMENTAS</div></a></li>
									<li><a href="<?php echo site_url();?>/discentes/formularios/"><div>FORMULÁRIOS</div></a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url();?>/publicacoes"><div>PUBLICAÇÕES</div></a>
								<ul>
									<li><a href="<?php echo site_url();?>/publicacoes/teses/"><div>TESES</div></a></li>
									<li><a href="<?php echo site_url();?>/publicacoes/artigos/"><div>ARTIGOS</div></a></li>
									<li><a href="<?php echo site_url();?>/publicacoes/na-midia/"><div>NA MÍDIA</div></a></li>
									<li><a href="<?php echo site_url();?>/publicacoes/dissertacoes/"><div>DISSERTAÇÕES</div></a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url();?>"><div>EVENTOS</div></a>
								<ul>
									<li><a href="<?php echo site_url();?>/eventos/seminarios/"><div>SEMINÁRIOS</div></a></li>
									<li><a href="<?php echo site_url();?>/eventos/defesas/"><div>DEFESAS</div></a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url();?>/processo-seletivo"><div>PROCESSO SELETIVO</div></a></li>
							<li><a href="<?php echo site_url();?>/contato"><div>CONTATO</div></a></li>
						</ul>
						<div id="top-cart">
							<div id="top-social">
								<ul>
									<li><a href="<?php echo site_url();?>" class="si-linkedin"><span class="ts-icon"><i class="icon-linkedin"></i></span></a></li>
									<li><a href="<?php echo site_url();?>" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span></a></li>
									<li><a href="<?php echo site_url();?>" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span></a></li>
									<li><a href="<?php echo site_url();?>" class="si-youtube"><span class="ts-icon"><i class="icon-youtube-play"></i></span></a></li>
								</ul>
							</div><!-- #top-social end -->							
						</div><!-- #top-cart end -->
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->


