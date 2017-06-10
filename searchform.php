<form role="search" method="get" id="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset style="border: none;">
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit" style="display: none;">

			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	</fieldset>
</form>
<style>
.search-field{
	padding: 0px;
}
</style>
