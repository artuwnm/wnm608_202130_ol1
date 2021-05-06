<?php
include_once "lib/php/auth.php";
$db = db_joystore();
include_once "lib/php/functions.php";
$pageSize = 6;
$from = " FROM `products`";
$limit = " LIMIT $pageSize";
$where = [];
$order = "`date_create` DESC";
if (isset($_GET["order"]) && is_numeric($_GET["order"])) {
  $orders = [
    "`date_create` DESC",
    "`date_create` ASC",
    "`current_price` ASC",
    "`current_price` DESC"
  ];
  $order = $orders[$_GET["order"]];
}
$order = " ORDER BY ".$order;
if (isset($_GET["search"]) && strlen($_GET["search"]) > 0) $where[] = "`name` LIKE '%".sanitize($_GET["search"])."%'";
$has_filter = false;
if (isset($_GET["type"])) {
  $has_filter = true;
  $where[] = "`type`='".sanitize($_GET["type"])."'";
}
if (isset($_GET["platform"])) {
  $has_filter = true;
  $where[] = "`platform`='".sanitize($_GET["platform"])."'";
}
if (isset($_GET["2-4g"])) {
  $has_filter = true;
  if ($_GET["2-4g"] == "on") $where[] = "`2.4g`='1'";
}
if (isset($_GET["bluetooth"])) {
  $has_filter = true;
  if ($_GET["bluetooth"] == "on") $where[] = "`bluetooth`='1'";
}
if (isset($_GET["hue"]) && is_numeric($_GET["hue"])) {
  $has_filter = true;
  $hue = $_GET["hue"];
  if ($hue >= 0 && $hue <= 0.8) {
    $hue_percentage = $hue * 100;
    $min_hue = $hue * 360;
    $max_hue = $min_hue + 72;
    $where[] = "(`hue` BETWEEN $min_hue AND $max_hue)";
  } else {
    $where[] = "`hue`='".sanitize($hue)."'";
  }
}
$where = implode(" AND ", $where);
if (strlen($where) > 0) $where = " WHERE $where";
$maxPage = ceil(queryAll("SELECT count(*)".$from.$where)[0]->{"count(*)"} / $pageSize);
$page = round(isset($_GET["page"]) ? $_GET["page"] : 1);
if ($maxPage != 0 && ($page < 1 || $page > $maxPage)) {
  header("Location: ".$_SERVER['PHP_SELF']);
  die();
}
include_once "lib/php/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Store" ?>
  <?php include "parts/head.php" ?>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <div class="grid gap container padded" style="height: 1200px;">
    <div class="col-s-12 col-l-3">
      <div class="flex">
        <h3 class="grow">Filters</h3>
        <?= $has_filter ? "<button onclick=\"removeQuery('platform','type','2-4g','bluetooth','hue')\" style=\"height: 2.3em;\">Clear All</button>" : "" ?>
      </div>
      <div id="filters" class="flex column">
        <div class="card soft">
          <div class="flex">
            <h4 class="grow">Platform</h4>
            <?= isset($_GET["platform"]) ? '<a href="javascript:removeQuery(\'platform\')" style="font-size: medium;">╳</a>' : '' ?>
          </div>
          <div class="flex wrap h-gap-margin">
            <?php single_select_card("platform", [
              [
                "value"=>"xbox",
                "title"=>"Xbox",
                "icon"=>"xbox-logo.svg"
              ],
              [
                "value"=>"ns",
                "title"=>"Nintendo Switch",
                "icon"=>"nintendo-switch-logo.svg"
              ]
            ]) ?>
          </div>
        </div>
        <div class="card soft">
          <div class="flex">
            <h4 class="grow">Type</h4>
            <?= isset($_GET["type"]) ? '<a href="javascript:removeQuery(\'type\')" style="font-size: medium;">╳</a>' : '' ?>
          </div>
          <div class="flex wrap h-gap-margin">
            <?php single_select_card("type", [
              [
                "value"=>"full",
                "title"=>"Full Controller",
                "icon"=>"game-controller.svg"
              ],
              [
                "value"=>"left",
                "title"=>"Left Half Controller",
                "icon"=>"left-joy-con.svg"
              ],
              [
                "value"=>"right",
                "title"=>"Right Half Controller",
                "icon"=>"right-joy-con.svg"
              ],
              [
                "value"=>"accessory",
                "title"=>"Accessory",
                "label"=>"ACC"
              ]
            ]) ?>
          </div>
        </div>
        <div class="card soft">
          <div class="flex">
            <h4 class="grow">Wireless</h4>
            <?= isset($_GET["2-4g"]) || isset($_GET["bluetooth"]) ? '<a href="javascript:removeQuery(\'2-4g\',\'bluetooth\')" style="font-size: medium;">╳</a>' : '' ?>
          </div>
          <div class="flex wrap h-gap-margin">
            <?php
              multi_select_card("2-4g", [
                "title"=>"2.4g",
                "label"=>"2.4g"
              ]);
              multi_select_card("bluetooth", [
                "title"=>"Bluetooth",
                "icon"=>"bluetooth.svg"
              ]);
            ?>
          </div>
        </div>
        <div class="card soft">
          <div class="flex">
            <h4 class="grow">Color</h4>
            <?= isset($hue) ? '<a href="javascript:removeQuery(\'hue\')" style="font-size: medium;">╳</a>' : '' ?>
          </div>
          <div class="hue-input">
            <div class="grid gap">
              <div class="col-s-6 card hue-white<?= isset($hue) && $hue == -2 ? " active" : "" ?>"></div>
              <div class="col-s-6 card hue-black<?= isset($hue) && $hue == -1 ? " active" : "" ?>"></div>
              <div class="col-s-12 card hue-spectrum<?= isset($hue_percentage) == -1 ? " active" : "" ?>">
                <div<?= isset($hue_percentage) ? ' style="margin-left: '.$hue_percentage.'%;"' : '' ?>></div>
              </div>
            </div>
            <input type="text" name="hue" form="form-search-filter-sort"<?= isset($hue) ? ' value="'.$_GET['hue'].'"' : '' ?>>
          </div>
        </div>
      </div>
    </div>
    <div class="col-s-12 col-l-9 flex column center v-gap-margin">
      <div class="card soft flex" style="width: 100%;">
        <select name="order" class="pill" form="form-search-filter-sort" style="margin-right: var(--card-corner-radius);">
          <?php
            $order_options = [
              "Newest",
              "&nbsp;Oldest",
              "&nbsp;Price ↑",
              "&nbsp;Price ↓"
            ];
            array_walk($order_options, function($e, $i) {
              $selected = isset($_GET["order"]) && $i == $_GET["order"] ? " selected" : "";
              echo <<<HTML
              <option value="$i"$selected>$e</option>
              HTML;
            })
          ?>
        </select>
        <input name="search" type="text" class="search grow" placeholder="Search..." form="form-search-filter-sort" autocomplete="off" <?= isset($_GET["search"]) ? 'value="'.$_GET["search"].'"' : '' ?>>
        <div class="clear-input-button"><div>✕</div></div>
      </div>
      <div class="card soft grid gap" style="height: 100%; width: 100%;">
        <?php
          if ($maxPage == 0) {
            echo <<<HTML
            <div class="col-s-12" style="text-align: center; width: 100%;">No Result</div>
            HTML;
          } else {
            $offset = " OFFSET ".($page - 1) * $pageSize;
            $products = queryAll("SELECT *".$from.$where.$order.$limit.$offset);
            array_walk($products, "item_card", 6);
          }
        ?>
      </div>
      <div class="flex center h-gap-margin">
        <button onclick="goToPage(-1, true)" <?= $page <= 1 ? "disabled" : "" ?>>< Prev</button>
        <h3 style="margin-left: 0;"><?= $page ?> / <?= $maxPage ?></h3>
        <button onclick="goToPage(1, true)" <?= $page >= $maxPage ? "disabled" : "" ?>>Next ></button>
      </div>
      <select id="sel-page" style="opacity: 0; position: relative; top: -52px; cursor: pointer;"
        onchange="goToPage($(this).val())"
      >
        <?php
          for ($i = 1; $i <= $maxPage; $i++) {
            $selected = $i == $page ? " selected" : "";
            echo <<<HTML
            <option$selected>$i</option>
            HTML;
          }
        ?>
      </select>
    </div>
  </div>
  <form id="form-search-filter-sort"></form>
  <!-- <script src="/wnm608/shen.jiawei/lib/js/selectable-cards.js"></script> -->
  <!-- <script>selCards("#filters" ,console.log ,true)</script> -->
  <script src="/wnm608/shen.jiawei/lib/js/clear-input-button.js"></script>
  <script src="/wnm608/shen.jiawei/js/store.js"></script>
</body>
</html>