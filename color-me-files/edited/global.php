<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-142991880-1', {
    'linker': {
       'domains': ['fruitest.jp/', 'www.fruitest.jp/', 'journal.fruitest.jp/', 'cart.shop-pro.jp', 'shop-pro.jp']
    }
  });
  gtag('event', 'conversion', {
    'value': <{$order_price}>,
    'currency': 'JPY',
    'transaction_id': <{$order_no}>
  });
</script>
