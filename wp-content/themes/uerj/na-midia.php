<?php
    /** Template name: Na Mídia*/
    get_header();
?>

<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipe03.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>NA MÍDIA</h1>
        <span>UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO - UERJ</span>
    </div>
</section><!-- #page-title end -->

<section class="home-destaques home-noticias home-bg-blue home-noticias home-seminarios home-defesas">
    <div class="content-wrap">

        <div class="container clearfix">

            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

                <h2><strong>Notícias Na Mídia</strong> UERJ</h2>

                <?php
                    global $post;
                    $args_defesas = array(      
                            'order' => 'desc',
                            'orderby' => 'date',
                            'post_type' => 'noticia',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'term_id',
                                    'terms' => 2,
                                )
                            )                           
                    );
                    $myposts_defesas = query_posts($args_defesas);
                    foreach ($myposts_defesas as $post) : setup_postdata($post);
                    $thumb_defesa_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $defesa_imagem_principal = $thumb_defesa_imagem_principal['0'];
                   
                    $defesa_nome = get_the_title();                     
                    $defesa_texto = get_the_content();                     
                    $defesa_resumo = get_the_excerpt();     

                    $dissertacao_arquivo = get_field('dissertacao_target');
                    $dissertacao_link = get_field('tese_link');
                    $dissertacao_target = get_field('tese_target');

                    if($dissertacao_target=='Página'){
                        $link_seminario = get_the_permalink();
                        $link_seminario_target = "_self";
                    }elseif($dissertacao_target=='Arquivo'){
                        $link_seminario = $dissertacao_arquivo;
                        $link_seminario_target = "_blank";
                    }else{
                        $link_seminario = $dissertacao_link;
                        $link_seminario_target = "_blank";
                    }                    

                    
                    $defesa_autor = get_field('dissertacao_autor');
                    $defesa_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-image" style="background-image:url('<?php echo $defesa_imagem_principal;?>');"></div>
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $defesa_nome;?></a></h2>
                        
                        
                    </div>
                    <div class="entry-content">
                        <p><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"><?php echo $defesa_resumo;?></a></p>
                    </div>
                </div>                
                <?php endforeach; ?>                               

            </div><!-- #posts end -->

        </div>

    </div>
</section><!-- #content end -->

<?php
    global $post;
    $args_teses = array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'noticia',
            'post_status' => 'publish',
            'posts_per_page' => 9999,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => 2,
                )
            )                           
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Na Mídia</strong> UERJ</h2>
                    <?php
                        foreach ($myposts_teses as $post) : setup_postdata($post);
                        $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                    
                        $tese_nome = get_the_title();                     
                        $tese_texto = get_the_content();                     
                        $tese_resumo = get_the_excerpt();   

                        $dissertacao_arquivo = get_field('dissertacao_target');
                        $dissertacao_link = get_field('tese_link');
                        $dissertacao_target = get_field('tese_target');

                        if($dissertacao_target=='Página'){
                            $link_seminario = get_the_permalink();
                            $link_seminario_target = "_self";
                        }elseif($dissertacao_target=='Arquivo'){
                            $link_seminario = $dissertacao_arquivo;
                            $link_seminario_target = "_blank";
                        }else{
                            $link_seminario = $dissertacao_link;
                            $link_seminario_target = "_blank";
                        }                    

                    ?>
                    <div class="entry clearfix">
                        <div class="entry-title">
                            <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        </div>
                        <div class="entry-content">
                            <p><?php echo $tese_resumo;?></p>
                        </div>
                    </div>                
                    <?php endforeach; ?>
            </div><!-- #posts end -->
        </div>
    </div>
</section><!-- #content end -->
<?php
    }
?>



<?php
    get_footer();
?>
