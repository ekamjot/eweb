<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins.
 *
 * @package Appdev
 * @subpackage Template
 */
?>

</div><!-- #main .inner -->

<?php mo_exec_action('end_main'); ?>

</div><!-- #main -->

<?php
$sidebar_manager = mo_get_sidebar_manager();

if ($sidebar_manager->is_footer_area_active()):
    ?>
    <?php mo_exec_action('before_footer'); ?>

    <div id="footer">

        <div class="inner">

            <?php mo_exec_action('start_footer'); ?>

            <div id="sidebars-footer" class="clearfix">

                <?php
                mo_exec_action('start_sidebar_footer');

                $sidebar_manager->populate_footer_sidebars();

                mo_exec_action('end_sidebar_footer');
                ?>

            </div>
            <!-- #sidebars-footer -->

            <?php mo_exec_action('end_footer'); ?>

        </div>

    </div>  <!--#footer-->

    <?php mo_exec_action('after_footer'); ?>

<?php endif; ?>

<div id="footer-bottom">

    <div class="inner">

        <?php get_template_part('menu', 'footer'); // Loads the menu-footer.php template.    ?>

        <?php mo_footer_content(); ?>

        <?php echo '<a id="go-to-top" href="#" title="' . __('Back to top', 'mo_theme') . '">' . __('Go Top', 'mo_theme') . '</a>'; ?>

    </div>

</div><!-- #footer-bottom -->

</div><!-- #container -->

<?php mo_exec_action('end_body'); ?>

<?php wp_footer(); // wp_footer    ?>

<script>

    (function(){
        var footerBottomText = document.getElementById('footer-bottom-text');
        footerBottomText.innerHTML = 'Copyright © 2017 <a href="http://appone.hk">AppOne Esolution Limited</a>';
        var oUl = document.getElementById('menu-home-menu');
        var header = document.getElementById('header');

        var aa = oUl.getElementsByTagName('a');

        if(aa[0].innerHTML != '公司特色')
        {
            setFontFamily(['h1','h2','h3','h4','h5','h6','p','span','a','body'],'微軟正黑體');
            if(document.body.offsetWidth > 768)
            {
                for(var i= 0 ; i < aa.length; i++)
                {
                    aa[i].style.padding = '0 14px 0';
                    aa[i].style.lineHeight = '25px';
                    aa[i].style.textAlign = 'center';
                    var img = aa[i].getElementsByTagName('img');
                    if(img.length == 0)aa[i].innerHTML = aa[i].innerHTML.replace(' ','<br>');
                }

                window.onscroll = function()
                {
                    setTimeout(function(){
                        if(header.className!='sticky')
                        {
                            oUl.style.marginTop = '26px';
                        }else
                        {
                            oUl.style.marginTop = '0px';
                        }
                    },100)
                }
            }
        }else
        {
            setFontFamily(['h1','h2','h3','h4','h5','h6','p','span','a'],'微軟正黑體');
            if(document.body.offsetWidth > 768)
            {
                for(var i= 0 ; i < aa.length; i++)
                {
                    aa[i].style.padding = '0 20px 0';
                }
                var submeun = oUl.getElementsByTagName('ul')[0];
                submeun.style.top = '43px';
                window.onscroll = function()
                {
                    setTimeout(function(){
                        if(header.className!='sticky')
                        {
                            oUl.style.marginTop = '26px';
                            for(var i= 0 ; i < aa.length; i++)
                            {
                                aa[i].style.lineHeight = '50px';
                            }
                        }else
                        {
                            oUl.style.marginTop = '0px';
                        }
                    },100)
                }
            }
        }


    })()


    function setFontFamily(tarNames,fontName)
    {
        for(var j = 0 ; j < tarNames.length ; j++)
        {
            var eles = document.getElementsByTagName(tarNames[j]);
            for(var i = 0 ; i < eles.length ; i++)
            {
                eles[i].style.fontFamily = fontName;
            }
        }
    }

    window.onload=function()
    {
        var hash_ = window.location.hash;
        if(hash_)
        {
            hash_ = hash_.substr(1);
            hash_ = hash_.split('|');
            if(hash_[0] == 'auto')
            {
                var footer_item = document.getElementById('menu-item-5257');
                if(footer_item)
                {
                    var a = footer_item.getElementsByTagName('a')[0];
                    a.click();
                }

            }
        }
        if(document.body.offsetWidth >1000 && document.body.offsetWidth <= 1400  )
        {
            setInterval(function(){
                var eLogo = document.getElementById('e_logo');
                eLogo.style.right  = 0+'px';
            },1000)
        }

    }



</script>

<script>
function option_escription_item(){
    var is_hidden = jQuery(".Description_item").eq(0).css('display') == 'none';
    var is_eng = /[a-z]/.test(jQuery("#description_item_btn").html());
    jQuery(".Description_item").css('display', is_hidden ? 'block' : 'none');
    jQuery("#description_item_btn").html(is_hidden ? (is_eng ? 'Hide Description':'隱藏說明') : (is_eng ? 'Show Description':'顯示說明'));
    }
</script>
</body>
</html>