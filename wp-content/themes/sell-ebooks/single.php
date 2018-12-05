<?php
/*
* Single Post template file
*/
get_header(); ?>
<div class="heading-image">
    <div class="image-layer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-wrapper">
    <div class="blog-section">
        <div class="container">
            <div id="post-<?php the_ID(); ?>" <?php post_class('row blog-style-one'); ?>>
                <div class=""></div>
                <?php $column_classes = (get_theme_mod('single_sidebar_style','right_sidebar') == 'no_sidebar')?'col-md-10 col-sm-12 col-xs-12 col-md-offset-1':'col-md-8 col-sm-12 col-xs-12';                 
                if(get_theme_mod('single_sidebar_style','right_sidebar') == 'left_sidebar'){ get_sidebar(); } ?>
                <div class="<?php echo esc_attr($column_classes); ?>">
                    <div class="blog-content-area fadeIn">
                        <?php if(have_posts()) :
                            while ( have_posts() ) : the_post(); ?>
                            <div class="blog-content"> 
							
                                
								
								<div class="col-md-4 col-sm-6 col-xs-12">
                                    <?php if ( has_post_thumbnail() ) : ?>
									<div class="single-blog-images">
										<?php the_post_thumbnail('large',array( 'alt' => esc_attr(get_the_title()), 'class' => 'img-responsive')); ?>
									</div>
									<?php endif;?>
								
								<div align="center">
								<?php 
								$file = get_field('upload_file');
								if( $file ): ?>
									<b><a href="<?php echo $file['url']; ?>"><?php echo "Download File"; ?></a></b>
								<?php endif; ?>
								</div>
								
                                </div>
								
						
								
								
								<div class="col-md-8 col-sm-6 col-xs-12">
                                    <div class="title-data">
                                       <a class="blogTitle" href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
									   <h4><b>Author - </b><em><?php the_field('author'); ?></em></h4>
									   <h4><p><b>Language: </b><?php the_field('language'); ?> <br>
									   <b>Publisher: </b><?php the_field('publisher'); ?> <br>
									   <b>Publish Date: </b><?php the_field('release_date'); ?> <br>
									   <b>Added to site: </b><?php echo sprintf('<time datetime="%1$s">%2$s</time>', esc_attr(get_the_date('c')), esc_html(get_the_date('F d, Y'))); ?><br><br>
                                       <b>File Formate: </b><?php the_field('file_format'); ?> <br>
									   <b>File Size: </b><?php the_field('file_size'); ?> <br> </h4>
									   
									   <?php $tagList = get_the_tag_list('', ', #' );
                                       if(!empty($tagList)) { ?> <?php the_tags(); } ?></p>		
									   
										<?php the_content(); ?>
										
										<p><b>Author Biography: </b><?php the_field('author_info'); ?> </p>
                                    </div>
									
                                </div>
								
								

								
                            </div>
                            <?php  if ( comments_open() || get_comments_number() ) {   comments_template();  }
                            wp_link_pages( array(
                                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Posts:', 'sell-ebooks' ) . '</span>',
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                                'next_or_number' => 'next_and_number',
                                'pagelink'    => '<span class="screen-reader-text">' . __( 'Post', 'sell-ebooks' ) . ' </span>%',
                                'separator'   => '<span class="screen-reader-text">, </span>',
                            ) );
                            
                            endwhile;
                            the_post_navigation( array(
                                'prev_text'          => '<i class="fa fa-arrow-left"></i> '.esc_html__( 'Previous Post: %title', 'sell-ebooks' ),
                                'next_text'          => esc_html__( 'Next Post: %title', 'sell-ebooks' ).' <i class="fa fa-arrow-right"></i>',
                                'before_page_number' => '<span class="screen-reader-text">' . esc_html__( 'Post', 'sell-ebooks' ) . ' </span>',
                            ) );
                            wp_reset_postdata();
                            endif; ?>
                    </div>
                </div>
                <?php if(get_theme_mod('single_sidebar_style','right_sidebar') == 'right_sidebar'){ get_sidebar(); } ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();