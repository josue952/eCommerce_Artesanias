<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__118451c3bbbd738dfdf118a7b7a4750e */
class __TwigTemplate_1c05ef5b2bf0a7d64fc5422b1f7bfd37 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_website/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_website/img/app_icon.png\" />

<title>Temas • prestashop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsxDesignThemeGeneral';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es-es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'SV';
    var _PS_VERSION_ = '8.0.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '70a159c81a6af185889c8e7ebf37e8a7';
    var token_admin_orders = tokenAdminOrders = '148c692cbb059554bbae1c61ac1a2a2e';
    var token_admin_customers = 'f16d3a7b1c520ba8cae3756d7f3b1ae2';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '80d960e16eaa891b3e1fd640dbfe5179';
    var currentIndex = 'index.php?controller=AdminPsxDesignThemeGeneral';
    var employee_token = '9061b2fc0b7cba529970fda84a5c1a94';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/prestashop_website/adminRoot/index.php/improve/modules/manage?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg';
    var admin_notification_get_link = '/prestashop_website/adminRoot/in";
        // line 42
        echo "dex.php/common/notifications?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop_website/adminRoot/index.php/common/notifications/ack?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop_website/adminRoot/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop_website/adminRoot/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_website/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_website/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_website/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_website/adminRoot/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_website/modules/psxdesign/views/css/admin/index.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_website/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_website/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop_website\\/adminRoot\\/\";
var baseDir = \"\\/prestashop_website\\/\";
var changeFormLanguageUrl = \"\\/prestashop_website\\/adminRoot\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"D\\u00f3lar estadounidense\",\"format\":null};
var currency_specifications";
        // line 71
        echo " = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var getUuidAjaxUrl = \"\\/prestashop_website\\/adminRoot\\/index.php\\/modules\\/improve\\/design\\/user\\/userId?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\";
var importThemeLink = \"\\/prestashop_website\\/adminRoot\\/index.php\\/modules\\/improve\\/design\\/themes\\/import?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\";
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_website/adminRoot/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/js/admin.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/adminRoot/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/js/tools.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/js/vendor/d3.v3.min.js\"></";
        // line 87
        echo "script>
<script type=\"text/javascript\" src=\"/prestashop_website/adminRoot/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/modules/ps_mbo/views/js/recommended-modules.js?v=4.5.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_website/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script type=\"module\" src=\"/prestashop_website/modules/psxdesign/views/js/index-themes.js\"></script>
<script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop_website/adminRoot/index.php/common/notifications?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 109
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminpsxdesignthemegeneral\"
  data-base-url=\"/prestashop_website/adminRoot/index.php\"  data-token=\"QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminDashboard&amp;token=ae8e81488ec90aaf24c40162a16bec25\"></a>
      <span id=\"shop_version\">8.0.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=991ed58b53cbf31745e41a7a9aa4a8ba\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_website/adminRoot/index.php/improve/modules/manage?token=876816fa09a9ea4e286f2feff9f76bb6\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_website/adminRoot/index.php/sell/catalog/categories/new?token=876816fa09a9ea4e286f2feff9f76bb6\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_website/adminRoot/index.php/sell/catalog/products/new?token=876816fa09a9ea4e286f2feff9f76bb6\"
                ";
        // line 144
        echo " data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5d22a6d0469a92dadd75f5c0e93948c0\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_website/adminRoot/index.php/sell/orders?token=876816fa09a9ea4e286f2feff9f76bb6\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"40\"
        data-icon=\"icon-AdminPsxDesignParentTab\"
        data-method=\"add\"
        data-url=\"index.php/modules/improve/design/themes\"
        data-post-link=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminQuickAccesses&token=8c1661036541795d2ef0b5aab82d1adb\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Temas - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminQuickAccesses&token=8c1661036541795d2ef0b5aab82d1adb\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop_website/adminRoot/index.php?controller=AdminSearch&amp;token=039867446be3022e470f81e0c306d89e\"
      role=\"search\">
  <input type=\"hidden\" name=\"";
        // line 184
        echo "bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping";
        // line 199
        echo "-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=991ed58b53cbf31745e41a7a9aa4a8ba\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop_website/adminRoot/index.php/improve/modules/manage?token=876816fa09a9ea4e286f2feff9f76bb6\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop_website/adminRoot/index.php/sell/catalog/categories/new?token=876816fa09a9ea4e286f2feff9f76bb6\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop_website/adminRoot/index.php/sell/catalog/products/new?token=876816fa09a9ea4e286f2feff9f76bb6\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminCartRules&amp;ad";
        // line 236
        echo "dcart_rule&amp;token=5d22a6d0469a92dadd75f5c0e93948c0\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop_website/adminRoot/index.php/sell/orders?token=876816fa09a9ea4e286f2feff9f76bb6\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"98\"
      data-icon=\"icon-AdminPsxDesignParentTab\"
      data-method=\"add\"
      data-url=\"index.php/modules/improve/design/themes\"
      data-post-link=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminQuickAccesses&token=8c1661036541795d2ef0b5aab82d1adb\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Temas - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminQuickAccesses&token=8c1661036541795d2ef0b5aab82d1adb\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop_website/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-";
        // line 281
        echo "toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus &lt;strong&gt;&lt;a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=71c23c8f764380d94c404c1d517df104\"&gt;carritos abandonados&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;?. ¡Tu";
        // line 331
        echo " próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"";
        // line 381
        echo "material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop_website/img/pr/default.jpg\" alt=\"Josue\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Josue</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop_website/adminRoot/index.php/configure/advanced/employees/1/edit?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gestione tu cuenta PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/cursos?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formación
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/expertos?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Encuentra un experto
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop_website/adminRoot/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=QyflySKP01BZtkotDC90";
        // line 407
        echo "igG9IBSvlbnOxLiwxx2MHgg&utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centro de ayuda
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminLogin&amp;logout=1&amp;token=83a2ab4172be5aa8526b1a22c10be348\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop_website/adminRoot/index.php/configure/advanced/employees/toggle-navigation?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminDashboard&amp;token=ae8e81488ec90aaf24c40162a16bec25\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
             ";
        // line 444
        echo " <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminDashboard&amp;token=ae8e81488ec90aaf24c40162a16bec25\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop_website/adminRoot/index.php/sell/orders/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/orders/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                   ";
        // line 481
        echo "                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/orders/invoices/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/orders/credit-slips/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/orders/delivery-slips/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminCarts&amp;token=71c23c8f764380d94c404c1d517df104\" cla";
        // line 509
        echo "ss=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop_website/adminRoot/index.php/sell/catalog/products?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/catalog/products?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href";
        // line 542
        echo "=\"/prestashop_website/adminRoot/index.php/sell/catalog/categories?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/catalog/monitoring/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminAttributesGroups&amp;token=316fa5e6ff95a66d5a6f337e069c85db\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/catalog/brands/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
     ";
        // line 572
        echo "                                                       
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/attachments/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminCartRules&amp;token=5d22a6d0469a92dadd75f5c0e93948c0\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/stocks/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop_website/adminRoot/index.php/sell/customers/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=";
        // line 601
        echo "\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/customers/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/addresses/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=";
        // line 633
        echo "\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminCustomerThreads&amp;token=80d960e16eaa891b3e1fd640dbfe5179\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminCustomerThreads&amp;token=80d960e16eaa891b3e1fd640dbfe5179\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop_website/adminRoot/index.php/sell/customer-service/order-messages/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                  ";
        // line 662
        echo "                                          
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminReturn&amp;token=2956c17e42b4455ee0c49410f1ccc4dd\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop_website/adminRoot/index.php/modules/metrics/legacy/stats?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop_website/adminRoot/index.php/modules/metrics/legacy/stats?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Estadísticas
                     ";
        // line 690
        echo "           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop_website/adminRoot/index.php/modules/metrics?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop_website/adminRoot/index.php/modules/mbo/modules/catalog/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                 ";
        // line 728
        echo "                                                                                                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop_website/adminRoot/index.php/modules/mbo/modules/catalog/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/modules/manage?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=307ddf6083555ee1bdc0750bbb3103c0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </s";
        // line 755
        echo "pan>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=307ddf6083555ee1bdc0750bbb3103c0\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop_website/adminRoot/index.php/modules/mbo/themes/catalog/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"134\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop_website/adminRoot/index.php/modules/improve/design/themes?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Personalización
                      ";
        // line 782
        echo "          </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/design/mail_theme/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/design/cms-pages/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/design/modules/positions/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://";
        // line 813
        echo "localhost/prestashop_website/adminRoot/index.php?controller=AdminImages&amp;token=1fa424ea5af1037ef987f273b4137387\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop_website/adminRoot/index.php/modules/link-widget/list?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminCarriers&amp;token=d6d3612169c11f994895fa882f1b2fca\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                              ";
        // line 844
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminCarriers&amp;token=d6d3612169c11f994895fa882f1b2fca\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/shipping/preferences/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminMbeConfiguration&amp;token=c2592d9b1e13e66f854c3ad6cc39e0ea\" class=\"link\"> MBE - Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminMbeShipping&amp;token=69b743077737cf0f333868a813eb6d5a\" class=\"link\"> MBE - Listado de envíos
   ";
        // line 871
        echo "                             </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop_website/adminRoot/index.php/improve/payment/payment_methods?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/payment/payment_methods?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-Adm";
        // line 902
        echo "inPaymentPreferences\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/payment/preferences?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop_website/adminRoot/index.php/improve/international/localization/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/international/localization/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                            ";
        // line 932
        echo "      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/international/zones/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/international/taxes/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop_website/adminRoot/index.php/improve/international/translations/settings?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"139\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestas";
        // line 963
        echo "hop_website/adminRoot/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fbdf353462fa9ae78c5854ee4ef79f20\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-139\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fbdf353462fa9ae78c5854ee4ef79f20\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminPsfacebookModule&amp;token=25ba1a630420cf55b5c7214a9984df77\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
   ";
        // line 994
        echo "                                       
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop_website/adminRoot/index.php/configure/shop/preferences/preferences?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/shop/preferences/preferences?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentO";
        // line 1027
        echo "rderPreferences\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/shop/order-preferences/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/shop/product-preferences/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/shop/customer-preferences/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/shop/contacts/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Contacto
                                </a>
                              </li>

                       ";
        // line 1056
        echo "                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/shop/seo-urls/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminSearchConf&amp;token=68eab69f5884b79ff38da66a44922c03\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/system-information/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow";
        // line 1085
        echo "_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/system-information/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/performance/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/administration/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                           ";
        // line 1115
        echo "                 
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/emails/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/import/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/employees/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/sql-requests/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Base de datos
                                </a>
                              </li>

   ";
        // line 1145
        echo "                                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/logs/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/webservice-keys/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/feature-flags/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-su";
        // line 1172
        echo "bmenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop_website/adminRoot/index.php/configure/advanced/security/?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"171\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminPsAssistantSettings&amp;token=78fcbe86fbf7daa959ce012d7cd8852b\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"115\" id=\"tab-DEFAULT\">
                <span class=\"title\">Más</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"172\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminSelfUpgrade&amp;token=";
        // line 1209
        echo "edfd7a86d75820ebd8c0d3b890140be6\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Personalización</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop_website/adminRoot/index.php/modules/improve/design/themes?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" aria-current=\"page\">Temas</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Temas          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/es/doc/AdminPsxDesignThemeGeneral?version=8.0.1&amp;country=es\" title=\"Ayuda\">
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                               ";
        // line 1268
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <li class=\"nav-item\">
                    <a href=\"/prestashop_website/adminRoot/index.php/modules/improve/design/themes?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" id=\"subtab-AdminPsxDesignThemeGeneral\" class=\"nav-link tab active current\" data-submenu=\"135\">
                      Temas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_website/adminRoot/index.php/modules/improve/design/logos?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" id=\"subtab-AdminPsxDesignLogos\" class=\"nav-link tab \" data-submenu=\"136\">
                      Logos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_website/adminRoot/index.php/modules/improve/design/colors?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" id=\"subtab-AdminPsxDesignColors\" class=\"nav-link tab \" d";
        // line 1285
        echo "ata-submenu=\"137\">
                      Colores
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_website/adminRoot/index.php/modules/improve/design/fonts?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" id=\"subtab-AdminPsxDesignFonts\" class=\"nav-link tab \" data-submenu=\"138\">
                      Fuentes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" d";
        // line 1304
        echo "ata-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/es/doc/AdminPsxDesignThemeGeneral?version=8.0.1&amp;country=es\" title=\"Ayuda\">
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1331
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/prestashop_website/adminRoot/index.php?controller=AdminDashboard&amp;token=ae8e81488ec90aaf24c40162a16bec25\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Conectarse a Addons Marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Vincula tu tienda a tu cuenta de Addons para recibir automáticamente actualizaciones importantes de los módulos que hayas adquirido. ¿Aún no tiene una cuenta?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Regístrate ahora</a>
                  </p>
                  <p>
                      Si has creado tu cuenta utilizando Google, sigue el procedimiento de contraseña olvidada de Addons Marketplace para crear tu contraseña : 
   ";
        // line 1374
        echo "                   <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">Restablecer contraseña</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/prestashop_website/adminRoot/index.php/modules/mbo/addons/login?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Dirección de correo electrónico</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Contraseña</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Recordar datos
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">¡Vamos!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">¿Olvidó su contraseña?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" ";
        // line 1410
        echo "class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirmar el cierre de sesión</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Estás a punto de salir de tu cuenta en Addons. Podrías perderte actualizaciones importantes de los Complementos que has comprado.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Cancelar\">
          <a class=\"btn btn-primary uppercase\" href=\"/prestashop_website/adminRoot/index.php/modules/mbo/addons/logout?_token=QyflySKP01BZtkotDC90igG9IBSvlbnOxLiwxx2MHgg\" id=\"module-modal-addons-logout-ack\">Sí, quiero salir</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1443
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 109
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1331
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1443
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__118451c3bbbd738dfdf118a7b7a4750e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1626 => 1443,  1605 => 1331,  1594 => 109,  1585 => 1443,  1550 => 1410,  1512 => 1374,  1463 => 1331,  1434 => 1304,  1413 => 1285,  1394 => 1268,  1333 => 1209,  1294 => 1172,  1265 => 1145,  1233 => 1115,  1201 => 1085,  1170 => 1056,  1139 => 1027,  1104 => 994,  1071 => 963,  1038 => 932,  1006 => 902,  973 => 871,  944 => 844,  911 => 813,  878 => 782,  849 => 755,  820 => 728,  780 => 690,  750 => 662,  719 => 633,  685 => 601,  654 => 572,  622 => 542,  587 => 509,  557 => 481,  518 => 444,  479 => 407,  451 => 381,  399 => 331,  347 => 281,  300 => 236,  261 => 199,  244 => 184,  202 => 144,  162 => 109,  138 => 87,  120 => 71,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__118451c3bbbd738dfdf118a7b7a4750e", "");
    }
}
