<?
plugins_register_backend($plugin,array("icon"=>"icon-home"));

function index_page() {
?>
  <div class="grid-24">
    <div class="box plain">
      Bitte links im Menü irgendwohin klicken...
    </div>
  </div>
<?
}
plugins_register_backend_handler($plugin,"","","index_page");
plugins_register_backend_handler($plugin,"","list","index_page");
