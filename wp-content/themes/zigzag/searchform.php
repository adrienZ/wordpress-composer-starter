<fieldset>
  <legend>Search form</legend>

  <form action="<?php echo esc_url(home_url('/')) ?>">
    <label for="site-search">Search the site:</label>
    <input type="search" id="site-search" name="s" aria-label="Search through site content" value="<?php echo get_search_query(); ?>">
    <button>Search</button>
  </form>
</fieldset>