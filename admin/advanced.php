        <form method="post" action="">
        <h2>What kind of button to show ?</h2>
        <div style="display:table;width:100%">
                <div style="margin-bottom:15px">
                        <input type="radio" name="layout" value="none" id="layout_none" style="margin-bottom:13px;" <?php if("none" == get_option("soshake-layout")) echo "checked" ?>/>
                        <label for="layout_none">
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/fb_none.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/tw_none.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/gp_medium_none.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/li_none.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/pi_none.png" />
                        </label>
                </div>
                <div style="margin-bottom:15px">
                        <input type="radio" name="layout" value="horizontal" id="layout_none" style="margin-bottom:13px;" <?php if("horizontal" == get_option("soshake-layout")) echo "checked" ?>/>
                        <label for="layout_none">
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/fb_button_count.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/tw_horizontal.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/gp_medium_bubble.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/li_right.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/pi_horizontal.png" />
                        </label>
                </div>
                <div style="margin-bottom:15px">
                        <input type="radio" name="layout" value="vertical" id="layout_none" style="margin-bottom:13px;" <?php if("vertical" == get_option("soshake-layout")) echo "checked" ?>/>
                        <label for="layout_none">
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/fb_box_count.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/tw_vertical.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/gp_tall_bubble.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/li_top.png" />
                                <img src="<?php echo plugin_dir_url(__FILE__) ?>../images/pi_vertical.png" />
                        </label>
                </div>
        </div>
        <h2>Which page to add it to?</h2>
        <?php $pages = array("home","archive", "category", "search", "single" ) ?>
        <div style="display:table;width:100%">
                <?php foreach($pages as $page) { ?>
                <input type="checkbox" name="pages[]" value="<?php echo $page ?>" id="pages_<?php echo $page ?>" <?php if(is_array(get_option("soshake-pages")) && in_array($page,get_option("soshake-pages"))) echo "checked" ?>/> <?php echo $page ?><br />
                <?php } ?>
        </div>
        <br />
        <br />
        <br />
        <input type="submit" name="save" value="Save this configuration" />
        </form>
