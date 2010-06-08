<?php
get_header();
?>

<?php if (is_page('home')): ?>

<div class="post">
    	<h1>Applications Open</h1>
    	<div class="content">
    		<h2>What is One Week | One Tool?</h2>

    <p>Generously  funded by the National Endowment for the Humanities, <em>One Week | One  Tool</em> is a unique summer institute, one that aims to teach  participants how to build an open source digital tool for humanities  scholarship <em>by actually building a tool</em>, from inception to  launch, in a week.</p>
    <p>During the week of Sunday July 25 &#8211; Saturday  July 31, 2010, the <a href="http://chnm.gmu.edu">Center for History and New Media at George Mason  University</a> will bring together a group of twelve digital humanists of  diverse disciplinary backgrounds and practical experience to build  something useful and usable. A short course of training in principles of  open source software development will be followed by an intense five  days of doing and a year of continued remote engagement, development,  testing, dissemination, and evaluation. Comprising designers and  developers as well as scholars, project managers, outreach specialists,  and other non-technical participants, the group will conceive a tool,  outline a roadmap, develop and disseminate an initial prototype, lay the  ground work for building an open source community, and make first steps  toward securing the project’s long-term sustainability.<em> </em></p>
    <p><em>One  Week | One Tool</em> is inspired by both longstanding and cutting-edge  models of rapid community development. For centuries rural communities  throughout the United States have come together for “barn raisings” when  one of their number required the diverse set of skills and enormous  effort required to build a barn—skills and effort no one member of the  community alone could possess. In recent years, Internet entrepreneurs  have likewise joined forces for crash “startup” or “blitz weekends” that  bring diverse groups of developers, designers, marketers, and  financiers together to launch a new technology company in the span of  just two days. <em>One Week | One Tool</em> will build on these old and new  traditions of community development and the natural collaborative  strengths of the digital humanities community to produce something  useful for humanities work and to help balance learning and doing in  digital humanities training.</p>

    <h2>Who should apply?</h2>
    <p>Scholars,  students, librarians, archivists, museum professionals, developers,  designers, hackers, bloggers, sys admins, outreach coordinators,  community builders, project managers, fundraisers, and anyone else with  an interest in building scholarly software. No specific qualifications  (e.g. a higher degree or particular skill set) are required. But we are  looking to assemble a cohesive group of twelve talented and accomplished  people who together will possess the entire range of skills necessary  to conceive, manage, build, and disseminate a tools project. Given the  importance of intra-team dynamics and self-initiative to the success of  any open source project—especially at its inception—we will also be  looking for evidence of teamwork, patience, flexibility, and  resourcefulness (such as a history of picking up a programming language  on one&#8217;s own) in assessing applications for <em>One Week | One Tool</em>.  Accepted participants will receive travel, lodging, per diem, a small  stipend, and a practical education in open source scholarly software  development from the organizers of <a href="http://thatcamp.org">THATCamp</a> and the makers of <a href="http://zotero.org">Zotero</a> and <a href="http://omeka.org">Omeka</a>.</p>
    <h2>How do I apply?</h2>

    <p>Sorry, but the application deadline has passed!</p>
    <p><em>#oneweek #buildsomething</em></p>
    
</div>

<?php else: ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
	<h1><?php the_title(); ?></h1>
	<div class="content">
		<?php the_content(); ?>
		
		<?php if (is_page('people')) echo oneweek_display_people(); ?>
	</div>
	
	
</div>

<?php // comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>
<?php endif; ?>
<?php get_footer(); ?>
