<div id="lower" class="region">
	<div class="content clearfix">
		<div id="block-block-2" class="block block-block buttons program">
			<div class="content">
			    <ul class="list-unstyled home-hero-links row clearfix">
				    <li class="col-6 col-xs-12"><a class="btn-accent btn-block" href="/request-info"><span class="icon-info">&nbsp;</span> Request Info</a></li>
					<li class="col-6 col-xs-12"><a class="btn-accent-alt btn-block" href="/apply-online"><span class="icon-cap-lt">&nbsp;</span> Apply Online</a></li>
				</ul>  
			</div><!-- content -->
		</div><!-- block-block-2 -->
		<?php if( get_field('frequently_asked_questions') ): ?>
		<div id="block-block-1562" class="block block-block faq blue floater">
			<h2>Frequently Asked Questions</h2>
			<div class="content">
				<?php the_field('frequently_asked_questions'); ?>
			</div><!-- content -->
		</div><!-- block-block-1562 -->
		<?php endif; ?>
	</div><!-- content clearfix -->
</div><!-- lower region -->