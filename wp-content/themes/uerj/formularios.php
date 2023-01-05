<?php
    /** Template name: Formulários*/
    get_header();
?>

<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipe03.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>FORMULÁRIOS</h1>
        <span>UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO - UERJ</span>
    </div>
</section><!-- #page-title end -->

<section class="home-destaques home-noticias arquivos">
    <div class="content-wrap" style="padding-top:0;">
        <div class="container clearfix">       

            <div id="posts" class="post-grid grid-container clearfix topmargin">
                <h2 style="position:relative!important;"><strong>Professor Orientador</strong></h2>
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
                                    'terms' => 10,
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

            <div id="posts" class="post-grid grid-container clearfix topmargin">
                <h2 style="position:relative!important;"><strong>Bolsa Capes</strong></h2>
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
                                    'terms' => 11,
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

            <div id="posts" class="post-grid grid-container clearfix topmargin">
                <h2 style="position:relative!important;"><strong>CRN - REDE SIRIUS</strong></h2>
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
                                    'terms' => 12,
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

            <div id="posts" class="post-grid grid-container clearfix topmargin">
                <h2 style="position:relative!important;"><strong>Inscrição em Disciplinas</strong></h2>
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
                                    'terms' => 13,
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

            <div id="posts" class="post-grid grid-container clearfix topmargin">
                <h2 style="position:relative!important;"><strong>Matrícula</strong></h2>
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
                                    'terms' => 14,
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

            <div id="posts" class="post-grid grid-container clearfix topmargin">
                <h2 style="position:relative!important;"><strong>Requerimentos</strong></h2>
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
                                    'terms' => 15,
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

            <div id="posts" class="post-grid grid-container clearfix topmargin">
                <h2 style="position:relative!important;"><strong>Diploma</strong></h2>
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
                                    'terms' => 17,
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
