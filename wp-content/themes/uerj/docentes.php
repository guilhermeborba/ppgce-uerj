<?php
    /** Template name: Docentes*/
    get_header();
?>

<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipe03.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>DOCENTES</h1>
        <span>UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO - UERJ</span>
    </div>
</section><!-- #page-title end -->

<section id="content"class="home-apresentacao">
    <div class="content-wrap">
        <div class="container clearfix">
            <h3>APRESENTAÇÃO DOCENTES PPGCE UERJ</h3>
            <p>O PPGCE conta com mais de 30 anos de tradição no ensino de economia em nível de pós-graduação, tendo o curso de mestrado iniciado suas atividades em 1979, enquanto que o curso de doutorado foi criado em 1987. Já foram defendidas 393 dissertações de mestrado e 197 teses de doutorado, várias delas premiadas nos principais concursos existentes na área de economia. O PPGCE é um programa de pós-graduação consolidado, considerado um dos melhores na área de economia do Brasil.</p>
        </div>
    </div>
</section>	

<section class="home-destaques home-noticias arquivos docentes">
    <div class="content-wrap" style="padding-top:0;">
        <div class="container clearfix">
            <div id="posts" class="post-grid grid-container clearfix">
                <h2 style="position:relative!important;"><strong>Coordenação</strong> UERJ</h2>
                <?php
                    global $post;
                    $args_pessoas = array(      
                            'order' => 'asc',
                            'orderby' => 'ID',
                            'post_type' => 'pessoa',
                            'post_status' => 'publish',
                            'posts_per_page' => 9999,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categoria_pessoa',
                                    'field' => 'term_id',
                                    'terms' => 3,
                                )
                            )                           
                    );
                    $myposts_pessoas = query_posts($args_pessoas);
                    foreach ($myposts_pessoas as $post) : setup_postdata($post);                    
                    $thumb_pessoa_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $pessoa_imagem_principal = $thumb_pessoa_imagem_principal['0'];                    
                    $pessoa_nome = get_the_title();
                    $pessoa_texto = get_the_content();
                    $pessoa_funcao =  get_field('pessoa_funcao');
                    $pessoa_formacao =  get_field('pessoa_formacao');
                    $pessoa_linhas_pesquisa =  get_field('pessoa_linhas_pesquisa');
                    $pessoa_email =  get_field('pessoa_email');
                    $pessoa_lattes =  get_field('pessoa_lattes');
                    $pessoa_twitter =  get_field('pessoa_twitter');
                    $pessoa_linkedin =  get_field('pessoa_linkedin');
                    $pessoa_instagram =  get_field('pessoa_instagram');
                    $pessoa_facebook =  get_field('pessoa_facebook');
                ?>
                <div class="entry clearfix box-arquivo">
                    <div class="imagem">
                        <?php if($pessoa_imagem_principal!=''){?>
                        <div class="entry-image" style="background-image:url('<?php echo $pessoa_imagem_principal;?>');"></div>
                        <?php }else{?>
                        <div class="entry-image" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/default-img.jpg');background-position: center;"></div>
                        <?php }?>
                        <ul>
                            <li>
                                <a href="<?php echo $pessoa_instagram;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/instagram.jpg" alt="Instagram">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $pessoa_facebook;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/facebook.jpg" alt="Facebook;">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $pessoa_linkedin;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/linkedin.jpg" alt="Linkedin">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $pessoa_twitter;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/twitter.jpg" alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $pessoa_lattes;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/lattes.jpg" alt="Lattes">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="descricao">
                        <h2><?php echo $pessoa_nome;?></h2>
                        <h3><?php echo $pessoa_funcao;?></h3>
                        <h4><?php echo $pessoa_formacao;?></h4>

                        <h5> <strong>LINHAS DE PESQUISA:</strong> <?php echo $pessoa_linhas_pesquisa;?></h5>
                        <p><?php echo $pessoa_texto;?> <a href="<?php echo $pessoa_lattes;?>" target="_blank">+ Informações no Currículo Lattes</a> </p>
                        <a href="mailto:<?php echo $pessoa_email;?>" target="_blank" class="email"><img src="<?php echo esc_url( get_template_directory_uri());?>/images/email.jpg" alt="Lattes"><?php echo $pessoa_email;?></a>
                    </div>                    
                </div>                
                <?php endforeach; ?>
            </div><br clear="all"><br clear="all">
            <div id="posts" class="post-grid grid-container clearfix">
                <h2 style="position:relative!important;"><strong>Professores</strong> UERJ</h2>
                <?php
                    global $post;
                    $args_pessoas = array(      
                            'order' => 'asc',
                            'orderby' => 'ID',
                            'post_type' => 'pessoa',
                            'post_status' => 'publish',
                            'posts_per_page' => 9999,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categoria_pessoa',
                                    'field' => 'term_id',
                                    'terms' => 4,
                                )
                            )                           
                    );
                    $myposts_pessoas = query_posts($args_pessoas);
                    foreach ($myposts_pessoas as $post) : setup_postdata($post);                    
                    $thumb_pessoa_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $pessoa_imagem_principal = $thumb_pessoa_imagem_principal['0'];                    
                    $pessoa_nome = get_the_title();
                    $pessoa_texto = get_the_content();
                    $pessoa_funcao =  get_field('pessoa_funcao');
                    $pessoa_formacao =  get_field('pessoa_formacao');
                    $pessoa_linhas_pesquisa =  get_field('pessoa_linhas_pesquisa');
                    $pessoa_email =  get_field('pessoa_email');
                    $pessoa_lattes =  get_field('pessoa_lattes');
                    $pessoa_twitter =  get_field('pessoa_twitter');
                    $pessoa_linkedin =  get_field('pessoa_linkedin');
                    $pessoa_instagram =  get_field('pessoa_instagram');
                    $pessoa_facebook =  get_field('pessoa_facebook');
                ?>
                <div class="entry clearfix box-arquivo">
                    <div class="imagem">
                        <?php if($pessoa_imagem_principal!=''){?>
                        <div class="entry-image" style="background-image:url('<?php echo $pessoa_imagem_principal;?>');"></div>
                        <?php }else{?>
                        <div class="entry-image" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/default-img.jpg');background-position: center;"></div>
                        <?php }?>
                        <ul>
                            <li>
                                <a href="<?php echo $pessoa_instagram;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/instagram.jpg" alt="Instagram">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $pessoa_facebook;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/facebook.jpg" alt="Facebook;">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $pessoa_linkedin;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/linkedin.jpg" alt="Linkedin">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $pessoa_twitter;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/twitter.jpg" alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $pessoa_lattes;?>" target="_blank">
                                    <img src="<?php echo esc_url( get_template_directory_uri());?>/images/lattes.jpg" alt="Lattes">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="descricao">
                        <h2><?php echo $pessoa_nome;?></h2>
                        <h3><?php echo $pessoa_funcao;?></h3>
                        <h4><?php echo $pessoa_formacao;?></h4>

                        <h5> <strong>LINHAS DE PESQUISA:</strong> <?php echo $pessoa_linhas_pesquisa;?></h5>
                        <p><?php echo $pessoa_texto;?> <a href="<?php echo $pessoa_lattes;?>" target="_blank">+ Informações no Currículo Lattes</a> </p>
                        <a href="mailto:<?php echo $pessoa_email;?>" target="_blank" class="email"><img src="<?php echo esc_url( get_template_directory_uri());?>/images/email.jpg" alt="Lattes"><?php echo $pessoa_email;?></a>
                    </div>                    
                </div>                
                <?php endforeach; ?>
            </div><br clear="all"><br clear="all">
        </div>
    </div>
</section>

<?php
    get_footer();
?>
