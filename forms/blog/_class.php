<?php
class blogClass extends cmsFormsClass {
    function beforeItemShow(&$item) {
        $item['date'] = date('d.m.Y H:i',strtotime($item['date']));
    }
}
?>
