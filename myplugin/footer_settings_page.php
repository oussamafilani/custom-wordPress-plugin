<?php

use ParagonIE\Sodium\Core\Curve25519\Fe;

if (!defined('ABSPATH')) {
    exit;
}
global $fb;
global $inst;
global $twit;
global $git;
global $gm;
global $tp;
global $cl;
global $wpdb;

if (isset($_POST['wphw_submit'])) {
    wphw_opt();
    CreateTableNewLetter();
}
function wphw_opt()
{
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $github = $_POST['github'];
    $google = $_POST['google'];
    $template = $_POST['footerTemplate'];
    $color = $_POST['footerColor'];

    // global $wpdb;
    // if (get_option('dbname') != trim($wpdb->dbname)) {
    //     $wpdb = update_option('dbname', trim($wpdb->dbname));
    // }

    global $cl;
    if (get_option('footerColor') != trim($color)) {
        $cl = update_option('footerColor', trim($color));
    }
    global $tp;
    if (get_option('footerTemplate') != trim($template)) {
        $tp = update_option('footerTemplate', trim($template));
    }


    global $fb;
    if (get_option('facebook-icon') != trim($facebook)) {
        $fb = update_option('facebook-icon', trim($facebook));
    }

    global $git;
    if (get_option('github-icon') != trim($github)) {
        $git = update_option('github-icon', trim($github));
    }

    global $inst;
    if (get_option('instagram-icon') != trim($instagram)) {
        $inst = update_option('instagram-icon', trim($instagram));
    }

    global $twit;
    if (get_option('twitter-icon') != trim($twitter)) {
        $twit = update_option('twitter-icon', trim($twitter));
    }

    global $gm;
    if (get_option('google-icon') != trim($google)) {
        $gm = update_option('google-icon', trim($google));
    }
}

function CreateTableNewLetter()
{
    global $wpdb;

    $db = new mysqli("localhost", "root", "", "$wpdb->dbname");
    // Check connection
    if ($db->connect_errno) {
        echo "Failed to connect to MySQL: " . $db->connect_error;
        exit();
    }
    $db->query("CREATE TABLE subscription (email varchar(50))");
}
?>
<div class="wrap">
    <div id="icon-options-general" class="icon32"> <br>
    </div>
    <h2>Footer Settings</h2>
    <?php if (isset($_POST['wphw_submit']) && $fb) : ?>
        <div id="message" class="updated below-h2">
            <p>Content updated successfully</p>
        </div>
    <?php endif; ?>
    <div class="metabox-holder">

        <div class="postbox">
            <h3><strong>Enter footer text and click on save button.</strong></h3>

            <?php
            echo get_option('footerColor');
            echo '<br>';

            ?>
            <form method="post" action="" style="padding: 20px;">

                <table class="form-table">
                    <tr>
                        <th scope="row">Please select footer template</th>
                        <td>
                            <select class="" name="footerTemplate" aria-label="Default select example">
                                <option selected>Select Footer Template</option>
                                <option value="Template1">Template1</option>
                                <option value="Template2">Template2</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Please select footer Color</th>
                        <td>
                            <select class="" name="footerColor" aria-label="Default select example">
                                <option selected>Select Footer Color</option>
                                <option value="#3333ff">Blue</option>
                                <option value="#404040">Gray</option>
                                <option value="#4dff4d">Green</option>
                                <option value="#ff704d">Red</option>
                                <option value="#ffff66">Yellow</option>
                                <option value="#ffffff">Light</option>
                                <option value="#1D2738">Dark</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">facebook Link</th>
                        <td><input type="text" name="facebook" value="<?php echo get_option('facebook-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">instagram Link</th>

                        <td><input type="text" name="instagram" value="<?php echo get_option('instagram-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">twitter Link</th>

                        <td><input type="text" name="twitter" value="<?php echo get_option('twitter-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">Guthub Link</th>

                        <td><input type="text" name="github" value="<?php echo get_option('github-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">Gmail</th>

                        <td><input type="text" name="google" value="<?php echo get_option('google-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td style="padding-top:10px;  padding-bottom:10px;">
                            <input type="submit" name="wphw_submit" value="Save changes" class="button-primary" />
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</div>