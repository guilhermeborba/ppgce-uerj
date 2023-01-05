<?php
    /** Template name: Eventos*/
    get_header();
?>

<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipe03.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>EVENTOS</h1>
        <span>UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO - UERJ</span>
    </div>
</section><!-- #page-title end -->

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

<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Defesas de Dissertações</strong> UERJ</h2>
                <?php
                    global $post;
                    $args_defesas = array(      
                            'order' => 'desc',
                            'orderby' => 'date',
                            'post_type' => 'dissertacao',
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
                    
                    $defesa_autor = get_field('dissertacao_autor');
                    $defesa_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <?php if($defesa_imagem_principal!=''){?>
                    <div class="entry-image" style="background-image:url('<?php echo $defesa_imagem_principal;?>');"></div>
                    <?php }else{?>
                    <div class="entry-image" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/default-img.jpg');background-position: center;"></div>
                    <?php }?>
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $defesa_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $defesa_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $defesa_orientador;?></a></h2>
                    </div>
                    <div class="entry-content">
                        <p><?php echo $defesa_resumo;?></p>
                    </div>
                </div>                
                <?php endforeach; ?>
            </div>
            <a href="<?php echo site_url();?>/dissertacoes" class="button button-xlarge button-circle button-blue button-more-posts" style="width: 230px;"><i class="icon-plus"></i>Dissertações</a>
        </div>
    </div>
</section><!-- #content end -->

<section class="home-destaques home-noticias home-seminarios home-bg-blue">
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
            <a href="<?php echo site_url();?>/teses" class="button button-xlarge button-circle button-blue button-more-posts button-defesa" style="width: 150px;"><i class="icon-plus"></i>Teses</a>
        </div>

    </div>
</section><!-- #content end -->

<?php
    get_footer();
?>
