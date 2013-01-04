<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <div class="entry-meta">
        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

            <?php wedevs_posted_on(); ?>
            <span class="sep"> | </span>

            <?php
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list( __( ', ', 'wedevs' ) );
            if ( $categories_list ) :
                ?>
                <span class="cat-links">
                    <?php printf( __( '%1$s', 'wedevs' ), $categories_list ); ?>
                </span>
            <?php endif; // End if categories ?>

            <?php if ( !post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                <span class="sep"> | </span>
                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'wedevs' ), __( '1 Comment', 'wedevs' ), __( '% Comments', 'wedevs' ) ); ?></span>
            <?php endif; ?>

            <?php edit_post_link( __( 'Edit', 'wedevs' ), '<span class="sep"> | </span><span class="edit-link"><i class="icon-edit"></i> ', '</span>' ); ?>

        <?php endif; // End if 'post' == get_post_type() ?>
    </div><!-- .entry-meta -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'wedevs' ), 'after' => '</div>') ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-meta">
        <?php
        /* translators: used between list items, there is a space after the comma */
        $tag_list = get_the_tag_list( '', __( ', ', 'wedevs' ) );

        if ( '' != $tag_list ) {
            printf( '<span class="tags"><i class="icon-tags"></i> Tagged: %s</span>', $tag_list );
        }
        ?>

        <div class="wedevs-sharrre">
            <div class="sharrre-contents">
                <input type="text" class="sharrrre-shortlink" value="<?php echo esc_url( wp_get_shortlink( $post->ID ) ); ?>">

                <div id="sharrre" class="sharrre clearfix" data-title="Tareq's Planet" data-url="http://tareq.wedevs.com/2012/06/wordpress-settings-api-php-class/">
                    <div class="sharrre-box alignleft"><a href="#" class="count">9</a><a href="#" class="share">Social Share</a></div>
                    <div class="sharrre-buttons">
                        <span class="button"><i class="icon-facebook"></i> <label class="label">3</label></span>
                        <span class="button"><i class="icon-twitter"></i> <label class="label">2</label></span>
                        <span class="button"><i class="icon-linkedin"></i> <label class="label">1</label></span>
                        <span class="button"><i class="icon-pinterest"></i> <label class="label">0</label></span>
                    </div>

                </div>
                <script type="text/javascript">
                    /*
                        jQuery(document).ready(function($){
                                $('#sharrre').sharrre({
                                        className: 'sharrre clearfix',
                                        share: {
                                                googlePlus: true,
                                                facebook: true,
                                                twitter: true,
                                                digg: true,
                                                delicious: true,
                                                stumbleupon: true,
                                                linkedin: true,
                                                pinterest: true
                                        },
                                        template: '<div class="sharrre-box alignleft"><a class="count" href="#">{total}</a><a class="share" href="#">Social Share</a></div>',
                                        urlCurl: '<?php echo plugins_url( 'sharrre/remote.php' ); ?>',
                                        enableHover: false,
                                        render: function (a, b) {
                                                console.log(a, b);
                                                var el = $(a.element),
                                                        html = ['<div class="sharrre-buttons">'];

                                                if( b.share.facebook ) {
                                                        html.push( '<span class="button"><i class="icon-facebook"></i> <label class="label">' + b.count.facebook + '</span></label>' );
                                                }

                                                if ( b.share.twitter ) {
                                                        html.push('<span class="button"><i class="icon-twitter"></i> <label class="label">' + b.count.twitter + '</span></label>')
                                                }

                                                if ( b.share.linkedin ) {
                                                        html.push('<span class="button"><i class="icon-linkedin"></i> <label class="label">' + b.count.linkedin + '</span></label>')
                                                }

                                                if ( b.share.googleplus ) {
                                                        html.push('<span class="button"><i class="icon-google-plus"></i> <label class="label">' + b.count.googleplus + '</span></label>')
                                                }

                                                if ( b.share.pinterest ) {
                                                        html.push('<span class="button"><i class="icon-pinterest"></i> <label class="label">' + b.count.pinterest + '</span></label>')
                                                }

                                                html.push('</div>');

                                                el.append(html.join('\n'));
                                        }
                                });
                        });
                     */
                </script>
            </div>
        </div>
    </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
