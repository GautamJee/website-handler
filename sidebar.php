<?php
/*
 * @author GAUTAM JEE
 * @facebook https://www.facebook.com/gautamkumar.burman
 * @twitter https://twitter.com/gautam_burman
 * @googleplus https://plus.google.com/kumargautamburman
 */

$page_id = $pageDetails["page_id"];
if ($_GET["id"] <> "") {
    // if we are on page.php page. get the parent id and fetch their related subpages
    $sql = "SELECT * FROM " . TABLE_PAGES . " WHERE status = 'A' AND parent = :parent ORDER BY sort_order ASC";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":parent", db_prepare_input($pageDetails["parent"]));
        $stmt->execute();
        $pagesResults = $stmt->fetchAll();
    } catch (Exception $ex) {
       echo errorMessage($ex->getMessage());
    }

	} elseif ($page_id <> "") {
    // On any other Page get the page id and fetch their related subpages
   $sql = "SELECT * FROM " . TABLE_PAGES . " WHERE status = 'A' AND parent = :parent ORDER BY sort_order ASC";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":parent", db_prepare_input($page_id));
        $stmt->execute();
        $pagesResults = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo errorMessage($ex->getMessage());
    }
}
?>
<div class="3u">
    <?php
    if (count($pagesResults) > 0) {
        ?>
        <section>
            <h2>CONTENTS</h2>	
            <div>
                <div class="row">
                    <div class="12u">
                        <ul class="link-list">
                            <?php foreach ($pagesResults as $rs) { ?>
                                <li><a href="page.php?id=<?php echo easy_crypt($rs["page_alias"]); ?>"><?php echo stripslashes($rs["page_title"]); ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
    <?php } ?>


<h2>Follow Me Here</h2>



 <section>
        <div>
            <div class="row">
                <div class="12u">
                    <!-- Place this tag where you want the widget to render. -->
                    <div class="g-page" data-width="299" data-href="https://plus.google.com/u/0/106659955614932880090" data-layout="landscape" data-rel="publisher"></div>

                    <!-- Place this tag after the last widget tag. -->
                    <script type="text/javascript">
                        (function() {
                            var po = document.createElement('script');
                            po.type = 'text/javascript';
                            po.async = true;
                            po.src = 'https://apis.google.com/js/platform.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(po, s);
                        })();
                    </script>

                </div>

            </div>
        </div>
    </section>
    <section>
        <div>
            <div class="row">
                <div class="12u">
                    <a class="twitter-follow-button"
		href="https://twitter.com/gautam_burman"
		data-show-count="true" data-size="large"  
		data-lang="en"  >
		Follow @Gautam
		</a>
		<script type="text/javascript">
		window.twttr = (function (d, s, id) {
		var t, js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src= "https://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js, fjs);
		return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
		}(document, "script", "twitter-wjs"));
		</script>
                </div>
            </div>
        </div>
    </section>

    

   
	<section>
        <div>
            <div class="row">
                <div class="12u">
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fahiddenpartofyourlife&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=198210627014732" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>

                </div>

            </div>
        </div>
    </section>

</div>
