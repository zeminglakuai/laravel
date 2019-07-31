<?php
function round_class(){
    return str_replace('.','-',Route::currentRouteName());
}