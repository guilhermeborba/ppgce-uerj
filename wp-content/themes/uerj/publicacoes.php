<?php
    /** Template name: Publicações*/
    get_header();
?>

<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipe03.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>PUBLICAÇÕES</h1>
        <span>UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO - UERJ</span>
    </div>
</section><!-- #page-title end -->
<section id="content"class="home-apresentacao">
    <div class="content-wrap">
        <div class="container clearfix">
            <h3>PUBLICAÇÕES PPGCE UERJ</h3>
            <p>O PPGCE/UERJ contempla atualmente duas áreas de concentração e cinco linhas de pesquisa:</p>
        </div>
    </div>
</section>	

<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas home-bg-blue">

    <div class="content-wrap">

        <div class="container clearfix">

            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

                <h2><strong>Dissertações</strong> UERJ</h2>

                <?php
                    global $post;
                    $args_dissertacoes = array(      
                            'order' => 'desc',
                            'orderby' => 'date',
                            'post_type' => 'dissertacao',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                    );
                    $myposts_dissertacoes = query_posts($args_dissertacoes);
                    foreach ($myposts_dissertacoes as $post) : setup_postdata($post);
                    $thumb_dissertacao_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $dissertacao_imagem_principal = $thumb_dissertacao_imagem_principal['0'];
                   
                    $dissertacao_nome = get_the_title();                     
                    $dissertacao_texto = get_the_content();                     
                    $dissertacao_resumo = get_the_excerpt();   

                    $defesa_autor = get_field('dissertacao_autor');
                    $defesa_orientador = get_field('dissertacao_orientador');

                    $dissertacao_arquivo = get_field('dissertacao_arquivo');
                    $dissertacao_link = get_field('dissertacao_link');
                    $dissertacao_target = get_field('dissertacao_target');

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
                    <?php if($dissertacao_imagem_principal!=''){?>
                    <div class="entry-image" style="background-image:url('<?php echo $dissertacao_imagem_principal;?>');"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"></a></div>
                    <?php }else{?>
                    <div class="entry-image" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/default-img.jpg');background-position: center;"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"></a></div>
                    <?php }?>
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $dissertacao_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $defesa_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $defesa_orientador;?></a></h2>
                    </div>
                    <div class="entry-content">
                        <p><?php echo $dissertacao_resumo;?></p>
                    </div>
                </div>                
                <?php endforeach; ?>                               

            </div><!-- #posts end -->

            <a href="<?php echo site_url();?>/dissertacoes" style="width: 240px;" class="button button-xlarge button-circle button-blue button-more-posts button-publicacoes"><i class="icon-plus"></i>Dissertações</a>					

        </div>

    </div>
</section><!-- #content end -->

<section class="home-destaques home-noticias home-seminarios home-defesas">
    <div class="content-wrap">

        <div class="container clearfix">

            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

                <h2><strong>Teses</strong> UERJ</h2>

                <?php
                    global $post;
                    $args_defesas = array(      
                            'order' => 'desc',
                            'orderby' => 'date',
                            'post_type' => 'tese',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                    );
                    $myposts_defesas = query_posts($args_defesas);
                    foreach ($myposts_defesas as $post) : setup_postdata($post);
                    $thumb_defesa_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $defesa_imagem_principal = $thumb_defesa_imagem_principal['0'];
                   
                    $defesa_nome = get_the_title();                     
                    $defesa_texto = get_the_content();                     
                    $defesa_resumo = get_the_excerpt();     
                    
                    $defesa_autor = get_field('tese_autor');
                    $defesa_orientador = get_field('tese_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-image" style="background-image:url('<?php echo $defesa_imagem_principal;?>');"></div>
                    <div class="entry-title">
                        <h2><a href="<?php echo the_permalink();?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $defesa_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo the_permalink();?>"> <span class="data">AUTOR(A):</span> <?php echo $defesa_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo the_permalink();?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $defesa_orientador;?></a></h2>
                    </div>
                    <div class="entry-content">
                        <p><?php echo $defesa_resumo;?></p>
                    </div>
                </div>                
                <?php endforeach; ?>                               

            </div><!-- #posts end -->

            <a href="<?php echo site_url();?>/teses" style="width: 150px;" class="button button-xlarge button-circle button-blue button-more-posts button-defesa"><i class="icon-plus"></i>Teses</a>					

        </div>

    </div>
</section><!-- #content end -->

<section class="home-destaques home-noticias home-bg-blue">
    <div class="content-wrap">

        <div class="container clearfix">

            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

                <h2><strong>Artigos</strong> UERJ</h2>

                <?php
                    global $post;
                    $args_artigos = array(      
                            'order' => 'desc',
                            'orderby' => 'date',
                            'post_type' => 'artigo',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                    );
                    $myposts_artigos = query_posts($args_artigos);
                    foreach ($myposts_artigos as $post) : setup_postdata($post);
                    $thumb_dissertacao_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $dissertacao_imagem_principal = $thumb_dissertacao_imagem_principal['0'];
                   
                    $dissertacao_nome = get_the_title();                     
                    $dissertacao_texto = get_the_content();                     
                    $dissertacao_resumo = get_the_excerpt();   
                    
                    $dissertacao_arquivo = get_field('tese_arquivo');
                    $dissertacao_link = get_field('tese_link');
                    $dissertacao_target = get_field('dissertacao_target');
                    
                    if($dissertacao_target=='Página'){
                        $link_artigo = get_the_permalink();
                        $link_artigo_target = "_self";
                    }elseif($dissertacao_target=='Arquivo'){
                        $link_artigo = $dissertacao_arquivo;
                        $link_artigo_target = "_blank";
                    }else{
                        $link_artigo = $dissertacao_link;
                        $link_artigo_target = "_blank";
                    }                                        
                    
                ?>
                <div class="entry clearfix">
                    <?php if($dissertacao_imagem_principal!=''){?>
                    <div class="entry-image" style="background-image:url('<?php echo $dissertacao_imagem_principal;?>');"><a href="<?php echo $link_artigo;?>" target="<?php echo $link_artigo_target;?>"></a></div>
                    <?php }else{?>
                    <div class="entry-image" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/default-img.jpg');background-position: center;"><a href="<?php echo $link_artigo;?>" target="<?php echo $link_artigo_target;?>"></a></div>
                    <?php }?>

                    <div class="entry-title">
                        <h2><a href="<?php echo $link_artigo;?>" target="<?php echo $link_artigo_target;?>"><?php echo $dissertacao_nome;?></a></h2>
                    </div>
                    <div class="entry-content">
                        <p><a href="<?php echo $link_artigo;?>" target="<?php echo $link_artigo_target;?>"><?php echo $dissertacao_resumo;?></a></p>
                    </div>
                </div>                

                <?php endforeach; ?>                               

            </div><!-- #posts end -->

            <a href="<?php echo site_url();?>/artigos" style="width: 165px;" class="button button-xlarge button-circle button-blue button-more-posts button-publicacoes"><i class="icon-plus"></i>Artigos</a>					

        </div>

    </div>
</section><!-- #content end -->

<section class="home-destaques home-noticias">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Na Mídia</strong> UERJ</h2>
                <?php
                    global $post;
                    $args_noticias = array(      
                            'order' => 'desc',
                            'orderby' => 'date',
                            'post_type' => 'noticia',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',   // taxonomy name
                                    'field' => 'term_id',           // term_id, slug or name
                                    'terms' => 2,                  // term id, term slug or term name
                                )
                            )                           
                    );
                    $myposts_noticias = query_posts($args_noticias);
                    foreach ($myposts_noticias as $post) : setup_postdata($post);
                    $thumb_noticia_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $noticia_imagem_principal = $thumb_noticia_imagem_principal['0'];
                   
                    $noticia_nome = get_the_title();                     
                    $noticia_texto = get_the_content();                     
                    $noticia_resumo = get_the_excerpt();    

                    $dissertacao_arquivo = get_field('dissertacao_arquivo');
                    $dissertacao_link = get_field('dissertacao_link');
                    $dissertacao_target = get_field('dissertacao_target');
                    
                    if($dissertacao_target=='Página'){
                        $link_noticia = get_the_permalink();
                        $link_noticia_target = "_self";
                    }elseif($dissertacao_target=='Arquivo'){
                        $link_noticia = $dissertacao_arquivo;
                        $link_noticia_target = "_blank";
                    }else{
                        $link_noticia = $dissertacao_link;
                        $link_noticia_target = "_blank";
                    }                    

                ?>
                <div class="entry clearfix">
                    <div class="entry-image" style="background-image:url('<?php echo $noticia_imagem_principal;?>');"><a href="<?php echo $link_noticia;?>" target="<?php echo $link_noticia_target;?>"></a></div>
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_noticia;?>" target="<?php echo $link_noticia_target;?>"><?php echo $noticia_nome;?></a></h2>
                    </div>
                    <div class="entry-content">
                        <p><a href="<?php echo $link_noticia;?>" target="<?php echo $link_noticia_target;?>"><?php echo $noticia_resumo;?></a></p>
                    </div>
                </div>                
                <?php endforeach; ?>                

            </div><!-- #posts end -->

            <a href="<?php echo site_url();?>/noticias" style="width: 180px;" class="button button-xlarge button-circle button-blue button-more-posts"><i class="icon-plus"></i>Notícias</a>					

        </div>

    </div>
</section><!-- #content end -->

<?php
    get_footer();
?>
