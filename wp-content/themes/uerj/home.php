<?php
    /** Template name: Inicial*/
    get_header();
?>

<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix">
    <div class="slider-parallax-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/slider/swiper/1.jpg');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-caption-animate="fadeInUp">Pós-Graduação em Ciências Econômicas</h2>
                            <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO - UERJ</p>
                            <a href="<?php echo site_url();?>/wp-content/uploads/2022/12/Plano-de-Turmas-2022-2.pdf" target="_blank" class="button button-xlarge button-circle button-blue button-slide">Programa de Disciplinas</a>									
                        </div>
                    </div>
                </div>										
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
        </div>
    </div>
</section>

<section id="content"class="home-apresentacao">
    <div class="content-wrap">
        <div class="container clearfix">
            <h3>APRESENTAÇÃO PPGCE UERJ</h3>
            <p>O PPGCE conta com mais de 30 anos de tradição no ensino de economia em nível de pós-graduação, tendo o curso de mestrado iniciado suas atividades em 1979, enquanto que o curso de doutorado foi criado em 1987. Já foram defendidas 393 dissertações de mestrado e 197 teses de doutorado, várias delas premiadas nos principais concursos existentes na área de economia. O PPGCE é um programa de pós-graduação consolidado, considerado um dos melhores na área de economia do Brasil. <a href="https://guilhermeborba.com.br/uerj/sobre/apresentacao" class="saiba-mais">Saiba +</a></p>
            <div class="divider divider-right divider-text-home"></div>
            <a href="<?php echo site_url();?>/docentes" class="button button-mini button-circle button-red conheca-corpo-docente">CONHEÇA NOSSO CORPO DOCENTE</a>					
        </div>
    </div>
</section>	

<section id="content" class="home-destaques" style="position:relative;z-index: 9999;">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">
                <h2><strong>Destaques</strong> UERJ</h2>

                <?php
                    global $post;
                    $args_destaques = array(      
                            'order' => 'desc',
                            'orderby' => 'ID',
                            'post_type' => 'destaque',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                    );
                    $myposts_destaques = query_posts($args_destaques);
                    foreach ($myposts_destaques as $post) : setup_postdata($post);
                    $thumb_destaque_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $destaque_imagem_principal = $thumb_destaque_imagem_principal['0'];
                   
                    $destaque_nome = get_the_title();                     
                    $destaque_texto = get_the_content();
                    $link_do_destaque = get_field('link_do_destaque');                                        
                ?>
                <div class="entry clearfix">
                    <?php if($destaque_imagem_principal!=''){?>
                    <div class="entry-image" style="background-image:url('<?php echo $destaque_imagem_principal;?>');"><a href="<?php echo $link_do_destaque;?>" target="_blank"></a></div>
                    <?php }else{?>
                    <div class="entry-image" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/default-img.jpg');background-position: center;"><a href="<?php echo $link_do_destaque;?>" target="_blank"></a></div>
                    <?php }?>

                    <div class="entry-title">
                        <h2><a href="<?php echo $link_do_destaque;?>"><?php echo $destaque_nome;?></a></h2>
                    </div>
                    <div class="entry-content">
                        <a href="<?php echo $link_do_destaque;?>"><?php echo $destaque_texto;?></a>
                    </div>
                </div>
                <?php endforeach; ?>               
            </div><!-- #posts end -->
        </div>
    </div>
</section>		

<section class="home-destaques home-noticias">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Notícias</strong> UERJ</h2>
                <?php
                    global $post;
                    $args_noticias = array(      
                            'order' => 'desc',
                            'orderby' => 'date',
                            'post_type' => 'noticia',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
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
            <a href="<?php echo site_url();?>/na-midia" class="button button-xlarge button-circle button-blue button-more-posts"><i class="icon-plus"></i>Notícias</a>
        </div>
    </div>
</section><!-- #content end -->

<section class="home-destaques home-noticias home-seminarios home-bg-blue">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Seminários</strong> UERJ</h2>
                <?php
                    global $post;
                    $args_seminarios = array(      
                            'order' => 'desc',
                            'orderby' => 'date',
                            'post_type' => 'seminario',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                    );
                    $myposts_seminarios = query_posts($args_seminarios);
                    foreach ($myposts_seminarios as $post) : setup_postdata($post);
                    $thumb_seminario_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $seminario_imagem_principal = $thumb_seminario_imagem_principal['0'];
                   
                    $seminario_nome = get_the_title();                     
                    $seminario_texto = get_the_content();                     
                    $seminario_resumo = get_the_excerpt();     
                    
                    $seminario_palestrante = get_field('seminario_palestrante');
                    if( $seminario_palestrante ):
                        foreach( $seminario_palestrante as $seminario_palestrante_single):	
                            $seminario_palestrante_nome = get_the_title($seminario_palestrante_single);
                        endforeach; 
                    endif;                    
                ?>
                <div class="entry clearfix">
                    <div class="entry-image" style="background-image:url('<?php echo $seminario_imagem_principal;?>');"><a href="<?php echo the_permalink();?>"></a></div>
                    <div class="entry-title">
                        <h2><a href="<?php echo the_permalink();?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $seminario_nome;?></a></h2>
                        <h2><a href="<?php echo the_permalink();?>"> <span class="data">PALESTRANTE:</span> <?php echo $seminario_palestrante_nome;?></a></h2>
                    </div>
                    <div class="entry-content">
                        <p><a href="<?php echo the_permalink();?>"><?php echo $seminario_resumo;?></a></p>
                    </div>
                </div>                
                <?php endforeach; ?>
            </div><!-- #posts end -->
            <a href="<?php echo site_url();?>/seminarios" class="button button-xlarge button-circle button-blue button-more-posts"><i class="icon-plus"></i>Seminários</a>
        </div>
    </div>
</section><!-- #content end -->

<section class="home-destaques home-noticias home-seminarios home-defesas">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Defesas</strong> UERJ</h2>
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

                    $dissertacao_arquivo = get_field('tese_arquivo');
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
                    
                    $defesa_autor = get_field('tese_autor');
                    $defesa_orientador = get_field('tese_orientador');
                ?>
                <div class="entry clearfix">
                    <?php if($defesa_imagem_principal!=''){?>
                    <div class="entry-image" style="background-image:url('<?php echo $defesa_imagem_principal;?>');"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"></a></div>
                    <?php }else{?>
                    <div class="entry-image" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/default-img.jpg');background-position: center;"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"></a></div>
                    <?php }?>
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $defesa_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $defesa_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $defesa_orientador;?></a></h2>
                    </div>
                    <div class="entry-content">
                        <p><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"><?php echo $defesa_resumo;?></a></p>
                    </div>
                </div>                
                <?php endforeach; ?>
            </div><!-- #posts end -->
            <a href="<?php echo site_url();?>/publicacoes" class="button button-xlarge button-circle button-blue button-more-posts button-defesa"><i class="icon-plus"></i>Defesas</a>
        </div>

    </div>
</section><!-- #content end -->

<section class="home-destaques home-noticias home-bg-blue">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Publicações</strong> UERJ</h2>
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
                    $thumb_artigo_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $artigo_imagem_principal = $thumb_artigo_imagem_principal['0'];
                   
                    $artigo_nome = get_the_title();                     
                    $artigo_texto = get_the_content();                     
                    $artigo_resumo = get_the_excerpt();

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
                    <?php if($artigo_imagem_principal!=''){?>
                    <div class="entry-image" style="background-image:url('<?php echo $artigo_imagem_principal;?>');"><a href="<?php echo $link_artigo;?>" target="<?php echo $link_artigo_target;?>"></a></div>
                    <?php }else{?>
                    <div class="entry-image" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/default-img.jpg');background-position: center;"><a href="<?php echo $link_artigo;?>" target="<?php echo $link_artigo_target;?>"></a></div>
                    <?php }?>

                    <div class="entry-title">
                        <h2><a href="<?php echo $link_artigo;?>" target="<?php echo $link_artigo_target;?>"><?php echo $artigo_nome;?></a></h2>
                    </div>
                    <div class="entry-content">
                        <p><a href="<?php echo $link_artigo;?>" target="<?php echo $link_artigo_target;?>"><?php echo $artigo_resumo;?></a></p>
                    </div>
                </div>                
                <?php endforeach; ?>                               

            </div><!-- #posts end -->

            <a href="<?php echo site_url();?>/publicacoes" class="button button-xlarge button-circle button-blue button-more-posts button-publicacoes"><i class="icon-plus"></i>Publicações</a>					

        </div>

    </div>
</section><!-- #content end -->

<section id="content" style="margin-bottom: 0px;">
    <div class="content-wrap" style="padding:0;">
        <div class="promo promo-light promo-inscricao promo-full notopborder">
            <div class="container clearfix">
                <h3>Inscrições</h3><span>no link</span>
                <a href="<?php echo the_permalink();?>/processo-seletivo" class="button button-dark button-xlarge button-rounded button-processo-seletivo">PROCESSO SELETIVO</a>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
