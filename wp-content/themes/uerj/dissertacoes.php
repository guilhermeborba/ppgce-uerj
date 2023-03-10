<?php
    /** Template name: Dissertações*/
    get_header();
?>

<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipe03.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>DISSERTAÇÕES</h1>
        <span>UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO - UERJ</span>
    </div>
</section><!-- #page-title end -->

<section class="home-destaques home-noticias home-bg-blue home-noticias home-seminarios home-defesas">
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

            </div><!-- #posts end -->

        </div>

    </div>
</section><!-- #content end -->

<?php
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2022'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2022</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();   
                    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2021'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2021</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();   
                    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2020'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2020</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();     
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

                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2019'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2019</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2018'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2018</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();  
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2017'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2017</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();     
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2016'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2016</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2015'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2015</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2014'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2014</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2013'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2013</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2012'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2012</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2011'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2011</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2010'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2010</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2009'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2009</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2008'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2008</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2007'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2007</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2006'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2006</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
    global $post;
    $args_teses= array(      
            'order' => 'desc',
            'orderby' => 'date',
            'post_type' => 'dissertacao',
            'post_status' => 'publish',
            'posts_per_page' => 999,
            'year' => '2005'
    );
    $myposts_teses= query_posts($args_teses);
    if($myposts_teses){    
?>
<section class="home-destaques home-noticias home-noticias home-seminarios home-defesas listagem">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
                <h2><strong>Dissertações 2005</strong> UERJ</h2>
                <?php
                    foreach ($myposts_teses as $post) : setup_postdata($post);
                    $thumb_tese_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $tese_imagem_principal = $thumb_tese_imagem_principal['0'];
                   
                    $tese_nome = get_the_title();                     
                    $tese_texto = get_the_content();                     
                    $tese_resumo = get_the_excerpt();    
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
                    
                    $dissertacao_autor = get_field('dissertacao_autor');
                    $dissertacao_orientador = get_field('dissertacao_orientador');
                ?>
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data"><?php echo get_the_date( 'd/m');?></span> <?php echo $tese_nome;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">AUTOR(A):</span> <?php echo $dissertacao_autor;?></a></h2>
                        <h2 class="autor"><a href="<?php echo $link_seminario;?>" target="<?php echo $link_seminario_target;?>"> <span class="data">ORIENTADOR(A):</span> <?php echo $dissertacao_orientador;?></a></h2>
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
