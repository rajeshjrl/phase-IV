<script>
    function changeLocation() {
        var markers = [];
        // Create the search box and link it to the UI element.
        var input = /** @type {HTMLInputElement} */(
        document.getElementById('change-location'));
        var searchBox = new google.maps.places.SearchBox(
        /** @type {HTMLInputElement} */(input));
        // [START region_getplaces]
        // Listen for the event fired when the user selects an item from the
        // pick list. Retrieve the matching places for that item.
        google.maps.event.addListener(searchBox, 'places_changed', function() {
            var places = searchBox.getPlaces();

            var location=new Object();
            console.log(places[0]);
            location.full_address=places[0].formatted_address;
            location.latitude=places[0].geometry.location.d;
            location.longitude=places[0].geometry.location.e;
            location.address_id=places[0].id;
            location.address_name=places[0].name;
            
            $(function() {
                $("input[name='change_lattitude']").val(location.latitude);
                $("input[name='change_longitude']").val(location.longitude);
                jQuery("#frm_change_location").submit();
            });
        });
 
    }
    google.maps.event.addDomListener(window, 'load', changeLocation);

</script>
<div class="page_holder">
    <div class="page_inner">
        <div class="bitcoin_form">
            <form class="chng_loctn" name="frm_change_location" id="frm_change_location" action="<?php echo base_url(); ?>country" method="post">
                <fieldset>
                    <label>Change Location:</label>
                    <input type="text" name="change-location" id="change-location" value="">
                    <input type="hidden" name="change_lattitude" id="change_lattitude" value="" />
                    <input type="hidden" name="change_longitude" id="change_longitude" value="" />
                    <div id="maps"></div>
                </fieldset>
            </form>
        </div>

        <?php if (isset($arrInfo_buy_o)) { ?>
            <?php if (count($arrInfo_buy_o) > 0) { ?>
                <div class="bitcoins">
                    <div class="bitcoins_head">
                        <h1><?php echo lang('Results for buy bitcoins online'); ?></h1>
                        <!--<a class="bitbuyer" href="javascript:void(0);">Show more<span>&nbsp;</span></a>--->
                    </div>
                    <div class="current_bitcoin">
                        <table class="clickable">
                            <tbody>
                                <tr class="head">
                                    <th class="seller_name"><?php echo lang('seller'); ?></th>
                                    <th class="describe"><?php echo lang('description'); ?></th>
                                    <th class="price_btc"><?php echo lang('price'); ?>/<?php echo lang('btc'); ?> </th>
                                    <th class="limits"><?php echo lang('limits'); ?></th>
                                    <th class="pay_methods"><?php echo lang('payment_method'); ?></th>
                                    <th class="button_buy"><?php echo lang('action'); ?></th>
                                </tr>
                                <?php for ($i = 0; $i < count($arrInfo_buy_o); $i++) { ?>
                                    <tr class="<?php
                        if (($i % 2) == 0) {
                            echo 'white_row';
                        } else {
                            echo 'greay_row';
                        }
                                    ?>">
                                        <td class="seller_name"><a href="<?php echo base_url(); ?>buy-sell-bitcoin/<?php echo $arrInfo_buy_o[$i]['trade_id']; ?>"><strong><?php echo $arrInfo_buy_o[$i]['user_name']; ?> (<?php echo $arrInfo_buy_o[$i]['confirmed_trade_count'] ?>; 100%)</strong></a></td>
                                        <td class="describe"><?php echo $arrInfo_buy_o[$i]['method_name']; ?></td>
                                        <td class="price_btc"><?php echo $arrInfo_buy_o[$i]['local_currency_rate'] . '-' . $arrInfo_buy_o[$i]['local_currency_code'] ?></td>
                                        <td class="limits"><?php echo $arrInfo_buy_o[$i]['min_amount'] . '-' . $arrInfo_buy_o[$i]['max_amount']; ?></td>
                                        <td class="pay_methods"><a href="<?php echo base_url();?>buy-bitcoins-online/<?php echo $arrInfo_buy_o[$i]['method_url'];?>"><?php echo $arrInfo_buy_o[$i]['method_name']; ?></a></td>
                                        <td class="button_buy"><a class="actbuy" href="<?php echo base_url(); ?>buy-sell-bitcoin/<?php echo $arrInfo_buy_o[$i]['trade_id']; ?>"><span>&nbsp;</span>Buy</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } else { ?>
                <p>No results in <?php echo $arr_geo_data['city']; ?> with the selected criteria.</p>
            <?php } ?>
        <?php } ?>

        <p><?php echo $links; ?></p>

    </div>
</div>
</section>
