<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "form-submitted.php";

$title = "Water Mold Fire Restoration";

$meta_description = "Water Mold Fire Restoration";

$meta_keywords = "";

require_once __DIR__ . '/includes/header.php';

$id = ($_REQUEST['id'] ?? '');
$pg = ($_REQUEST['pg'] ?? '');
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    
                    <?php 
                    if( isset($pg) && $pg == "yelp" )
                    {
                    ?>
                        <img src='https://d.adroll.com/ipixel/CKXH2HA42BDB5BA5ZLELHX/N2IZ6CEOKFB55GVPYHRSEO?name=6eba34eb' width='1' height='1' />
                    <?php
                    }
                    else
                    {
                    ?>
                        <img src='https://d.adroll.com/ipixel/CKXH2HA42BDB5BA5ZLELHX/N2IZ6CEOKFB55GVPYHRSEO?name=6eba34eb&ar_ed_order_id=<?php echo $id; ?>' width='1' height='1' />  
                    <?php
                    }
                    ?>

                    <h3>Thank you ! Form was submitted successfully.</h3>
                    <p>
                        Water Mold Fire Restoration would like to Thank You for your interest in our service, a customer service representative will be reaching out to you shortly. We look forward to working with you!
                    </p>
                        
                </div>
                
                <?php
                require_once __DIR__ . '/includes/left-sidebar.php';
                ?>
            </div>            
        </div>
    </section>

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

<?php
if( isset($pg) && $pg == 'yelp' )
{
?>
    <script>
        try
        {
            __adroll.track("pageView", {"segment_name":"<?php echo $id; ?>"})
        }
        catch(err) {}
    </script>
<?php
}
?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>