<div id="map_sidebar" class="sidebar" style="width:200px;float:right">
    <img src="/{$theme}images/progress.gif" width="50" height="50" style="position: relative; top:40%; left:40%;" />
</div>
<div id="map_canvas" class="map"></div>
<?php if ($prev_search) { ?>
    <div id="search-results-block"><h2>Search Results</h2>
        <div class="content-right">
            <?php if (!$list_results) { ?>
                <div>Sorry, there are no results for your search "{$prev_search}"</div>
                <?php if (!$filter_all) { ?>
                    <div><a href="?q={$prev_search}&all=1">Try searching in all categories...</a></div>
                <?php } ?>
             <?php } else { ?>
                <div>
                    <strong>
                        <form action="{$download_link}" method="post" target="_blank">
                            <a href="{$kml_link}" class="view_ge">View the results in Google Earth</a>
                        	<input type="hidden" name="rp" value="{$download_link_rp}" />
                        	<input type="hidden" name="pa" value="{$download_link_pa}" />
                        	<input type="hidden" name="ch" value="{$download_link_ch}" />
                        	<input type="hidden" name="bl" value="{$download_link_bl}" />
                        	<input type="hidden" name="cn" value="{$download_link_cn}" />
                        </form>
                    </strong>
                </div>
                <div>Or copy the URL of this search to share with others: <a href="{$results_url}">{$results_url}</a></div>
             <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php if ($list_results) { ?>
        <div id="search-results-found">{$results_found}<div class="clearfix"></div></div>
        <div id="search-results-list">{$list_results}</div>
    <?php } ?>

<?php } ?>