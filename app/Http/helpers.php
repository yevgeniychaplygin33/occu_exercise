<?php

// Change which link is current on the nav bar
if (!function_exists('setActive')) {
    function setActive($path, $active = 'active') {
        return request()->is($path) ? $active : '';
    }
}
