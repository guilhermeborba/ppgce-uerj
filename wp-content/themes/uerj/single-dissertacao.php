<?php
    get_header();
    $thumb_imagem_principal = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    $imagem_principal = $thumb_imagem_principal['0'];
    $defesa_autor = get_field('dissertacao_autor');
    $defesa_orientador = get_field('dissertacao_orientador');
?>

<section id="page-title">

    <div class="container clearfix">
        <h1>Dissertações</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo site_url();?>/dissertacoes">Dissertações</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
        </ol>
    </div>

</section><!-- #page-title end -->

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="single-post nobottommargin">

                <div class="entry clearfix">

                    <div class="entry-title">
                        <h2><?php the_title();?></h2>
                    </div><!-- .entry-title end -->

                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> <?php echo get_the_date( 'd/m/Y');?></li>
                    </ul><!-- .entry-meta end -->

                    <div class="entry-image bottommargin">
                        <a href="#"><img src="<?php echo $imagem_principal;?>" alt="<?php the_title();?>"></a>
                    </div><!-- .entry-image end -->

                    <h2 class="autor"><span class="data">AUTOR(A):</span> <?php echo $defesa_autor;?></h2>
                    <h2 class="autor"><span class="data">ORIENTADOR(A):</span> <?php echo $defesa_orientador;?></h2>
                    <br clear="all">

                    <div class="entry-content notopmargin">
                        <?php echo get_field('dissertacao_texto');?>
                    </div>
                </div><!-- .entry end -->

            </div>

        </div>

    </div>

</section><!-- #content end -->

<?php
    get_footer();
?>
