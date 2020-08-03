<?php
class productsClass extends cmsFormsClass {

    function beforeItemShow(&$Item) {
        $app = $this->app;
        $Item['name'] = $app->getField($Item,"main.ru.data.name");
        if ($Item['name'] == '') $Item['name'] = $Item['articul'];
    }
    
}
?>
