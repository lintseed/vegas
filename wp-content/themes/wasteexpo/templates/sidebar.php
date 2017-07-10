<?php
if (is_page_template('template-persona.php')) {
  dynamic_sidebar('sidebar-persona');
} else {
  dynamic_sidebar('sidebar-primary');
}
?>
