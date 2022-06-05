<?php
@session_start();
function paypal($option) {
	$form = $option;
	if($form == '1') {
				$paypal = ('
				
<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: \'rect\',
          color: \'gold\',
          layout: \'vertical\',
          label: \'paypal\',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":0.99}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert(\'Transaction completed by \' + details.payer.name.given_name + \'!\');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render(\'#paypal-button-container\');
    }
    initPayPalButton();
  </script>
				
				');
	} elseif($form == '2') {
				$paypal = ('
				
<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: \'rect\',
          color: \'gold\',
          layout: \'vertical\',
          label: \'paypal\',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":99.00}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert(\'Transaction completed by \' + details.payer.name.given_name + \'!\');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render(\'#paypal-button-container\');
    }
    initPayPalButton();
  </script>
				
				');
	}
	return $paypal;
}
?>