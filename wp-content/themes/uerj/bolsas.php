<?php
    /** Template name: Bolsas*/
    get_header();
?>

<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipe03.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>BOLSAS DE ESTUDOS</h1>
        <span>UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO - UERJ</span>
    </div>
</section><!-- #page-title end -->

<section id="content"class="home-apresentacao home-destaques home-noticias home-bg-blue">
    <div class="content-wrap">
        <div class="container clearfix">
            <h3>BOLSAS DE ESTUDOS</h3>
            <p>O PPGCE/UERJ disponibiliza bolsas de estudos da CAPES e da FAPERJ para os alunos de Mestrado e Doutorado a partir das quotas de bolsas estabelecidas por essas instituições.</p>
            <p>A alocação das bolsas obedece a ordem de classificação dos alunos no processo seletivo do respectivo curso.</p>
        </div>
    </div>
</section>	

<section class="home-destaques home-noticias arquivos">
    <div class="content-wrap topmargin">
        <div class="container clearfix">        
            <div id="posts" class="post-grid grid-container clearfix topmargin">
                <h2 style="position:relative!important;"><strong>Arquivos da Capes para Download</strong></h2>
                <?php
                    global $post;
                    $args_noticias = array(      
                            'order' => 'desc',
                            'orderby' => 'ID',
                            'post_type' => 'arquivo',
                            'post_status' => 'publish',
                            'posts_per_page' => 9999,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'secao',
                                    'field' => 'term_id',
                                    'terms' => 9,
                                )
                            )                           
                    );
                    $myposts_noticias = query_posts($args_noticias);
                    foreach ($myposts_noticias as $post) : setup_postdata($post);                   
                    $noticia_nome = get_the_title();
                    $arquivo = get_field('arquivo');                    
                ?>
                <div class="entry clearfix box-arquivo">
                    <a href="<?php echo $arquivo;?>" target="_blank" class="box-arquivo-titulo"><?php echo $noticia_nome;?></a>
                    <a href="<?php echo $arquivo;?>" target="_blank" style="width: 220px;" class="button button-xlarge button-circle button-blue button-more-posts"><i class="icon-plus"></i>Download</a>
                </div>                
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
