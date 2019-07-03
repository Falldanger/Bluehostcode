<?php get_header() ?>
		<div class="wrapper">
		<nav class="top-menu">
					</nav>
	</div>	
<div id="main-content" class="row fix">
    <div class="wrapper">
        <div id="content" class="floatleft">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	<article id="post-37" class="main-post main-bg post-37 post type-post status-publish format-standard hentry category-technology-products">
            <h2 class="entry-title"><a href=" <?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <!-- End title here -->
    <?php the_post_thumbnail('full') ?>

        <!-- End thumbnail here if have any -->
        <?php the_content() ?>

    
    <!-- End article here -->
    <div class="post-meta">
        <p>
            <span>
				<i class="icon-user"></i>
				<a href="" rel="author">
					Declan Fletcher				</a>
			</span>
			<span>
				<i class="icon-link"></i> October 20, 2015			</span>
            <span>
				<i class="icon-folder"></i> <a href="" rel="category tag">Technology Products</a>			</span>
            <span>
						</span>
			<span>
				<i class="icon-comment"></i> <span>Comments Off<span class="screen-reader-text"> on How POS Works</span></span>			</span>
        </p>
    </div> <!-- End post meta -->
</article> <!-- End article -->        
        <!-- post -->
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        	<p>Posts not found</p>
        <!-- no posts found -->
        <?php endif; ?>


                        


    <!-- End main content if have any -->


            <!-- Нижний белый блок -->            
                        
			<ul class="pagination">
		
							</ul>
            <!-- End pagination -->

            
                    </div> <!-- End content -->

<!-- SideBAR -->

<?php get_sidebar() ?>  

</div> <!-- End wrapper -->
</div> <!-- End Main content -->
       
<?php get_footer() ?>