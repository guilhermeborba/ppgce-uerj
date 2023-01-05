<?php
    /** Template name: Seminários*/
    get_header();
?>

<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipe03.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>SEMINÁRIOS</h1>
        <span>UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO - UERJ</span>
    </div>
</section><!-- #page-title end -->

<section id="content"class="home-apresentacao home-destaques home-noticias home-bg-blue">
    <div class="content-wrap">
        <div class="container clearfix">
            <h3>Série Seminários do PPGCE/UERJ</h3>
            <p>A Série Seminários do PPGCE/UERJ é um espaço para apresentação de resultados de pesquisas recentes ou em andamento por parte de integrantes do programa, bem como de convidados. Os encontros semanais representam importante oportunidade para conhecer e debater novos métodos e objetos de pesquisa, em destaque no ambiente acadêmico.</p>
        </div>
    </div>
</section>	

<section class="home-destaques home-noticias arquivos">
    <div class="content-wrap topmargin">
        <div class="container clearfix">        
            <div id="posts" class="post-grid grid-container clearfix topmargin">
                <h2 style="position:relative!important;"><strong>Série de Seminários 2022</strong> UFRJ</h2>
                <?php
                    global $post;
                    $args_seminarios = array(      
                            'order' => 'desc',
                            'orderby' => 'date',
                            'post_type' => 'seminario',
                            'post_status' => 'publish',
                            'posts_per_page' => 9999
                    );
                    $myposts_seminarios = query_posts($args_seminarios);
                    foreach ($myposts_seminarios as $post) : setup_postdata($post);
                    $thumb_seminario_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $seminario_imagem_principal = $thumb_seminario_imagem_principal['0'];
                   
                    $seminario_nome = get_the_title();                     
                    $seminario_texto = get_the_content();                     
                    $seminario_resumo = get_the_excerpt();     
                    $seminario_local = get_field('seminario_local');                    
                    
                    $seminario_palestrante = get_field('seminario_palestrante');
                    if( $seminario_palestrante ):
                        foreach( $seminario_palestrante as $seminario_palestrante_single):
                            $seminario_palestrante_nome = get_the_title($seminario_palestrante_single);
                            $seminario_palestrante_id = get_the_ID($seminario_palestrante_single);
                            $thumb_palestrante_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id($seminario_palestrante_single), 'full');
                            $palestrante_imagem_principal = $thumb_palestrante_imagem_principal['0'];
                        endforeach; 
                    endif;                    
                ?>

                <div class="seminario">

                    <div class="seminario_local">
                        <h2><?php echo get_the_date( 'd/m');?></h2>
                        <h3><?php echo get_the_date( 'h');?>H</h3>
                        <h4>LOCAL</h4>
                        <p><?php echo $seminario_local;?></p>                        
                    </div>

                    <div class="seminario_descricao">
                        <div class="entry-image" style="background-image:url('<?php echo $seminario_imagem_principal;?>');"><a href="<?php echo the_permalink();?>"></a></div>
                        <h2><?php echo $seminario_nome;?></h2>
                        <h3><span class="palestrante">PALESTRANTE:</span> <?php echo $seminario_palestrante_nome;?></h2>
                    </div>

                    <div class="seminario_palestrante">
                        <div class="foto_palestrante" style="background-image:url('<?php echo $palestrante_imagem_principal;?>');"></div>
                        <h2><a href="<?php echo the_permalink();?>"> <span class="data">PALESTRANTE</span> <?php echo $seminario_palestrante_nome;?></a></h2>
                        <a href="#" class="button button-xlarge button-circle button-blue button-more-posts button-publicacoes button-link-seminario"><i class="icon-plus"></i>Em Breve</a>
                    </div>

                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
