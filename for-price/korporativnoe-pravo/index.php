<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корпоративное право");?>
    <div class="price__mobile-nav">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "COMPONENT_TEMPLATE" => ".default",
                "EDIT_TEMPLATE" => "include_area.php",
                "PATH" => SITE_DIR . "include/left_block/menu.left_menu.php"
            )
        ); ?><br>
    </div>
    <table class="table table-bordered table-full-width">
  <thead>
    <tr>
      <th>№</th>
      <th>Наименование</th>
      <th>Цена</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan=3 style="text-align:center">Корпоративное право
      </td>
      <
      
    </tr>
    <tr>
      <td>2<div class="th-mobile">#</div>
      </td>
      <td>Jacob<div class="th-mobile">First Name</div>
      </td>
      <td>Thornton<div class="th-mobile">Last Name</div>
      </td>
      
    </tr>
    <tr>
      <td>3<div class="th-mobile">#</div>
      </td>
      <td>Larry<div class="th-mobile">First Name</div>
      </td>
      <td>the Bird<div class="th-mobile">Last Name</div>
      </td>
      
    </tr>
  </tbody>
</table><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>