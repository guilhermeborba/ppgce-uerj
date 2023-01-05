<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	<footer id="footer" class="dark">

		<div class="container">

			<div class="footer-widgets-wrap clearfix">

				<div class="col_two_third">
					<ul>
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
				</div>

				<div class="col_one_third col_last">

					<div class="widget clearfix logos">
						<div class="row">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-ppgce.png" width="130" height="63" alt="PPGCE UERJ">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-uerj.png" width="80" height="87" alt="UERJ">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-pr2.png" width="100" height="67" alt="PR2">
						</div>

					</div>

					<div class="widget subscribe-widget clearfix contatos">
						<a href="#" class="mail"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-mail.png" alt="contato@uerj.br">contato@uerj.br</a>
						<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-fone.png" alt="Telefone">+55 (21) 2334-0000</a>
						<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-map.png" alt="Mapa" style="margin-bottom: 20px;">R. São Francisco Xavier, 524 - Maracanã, Rio de Janeiro - RJ, 20550-013</a>
					</div>

					<div class="widget clearfix footer-social">
						<div class="row">
							<div id="top-cart">
								<div id="top-social">
									<ul>
										<li><a href="#" class="si-linkedin"><span class="ts-icon"><i class="icon-linkedin"></i></span></a></li>
										<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span></a></li>
										<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span></a></li>
										<li><a href="#" class="si-youtube"><span class="ts-icon"><i class="icon-youtube-play"></i></span></a></li>
									</ul>
								</div><!-- #top-social end -->							
							</div><!-- #top-cart end -->
						</div>

					</div>

				</div>

			</div><!-- .footer-widgets-wrap end -->

		</div>

	</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<div id="gotoTop" class="icon-angle-up"></div>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/functions.js"></script>

<?php wp_footer(); ?>
</body>
</html>
