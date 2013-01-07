<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginPixelartavatar extends Plugin {

    // Объявление переопределений (модули, мапперы и сущности)
    protected $aInherits=array(
        'module' => array('ModuleUser', 'ModuleAvatar'),
        'entity'  => array('ModuleUser_EntityUser'=>'_ModuleUser_EntityUser')
    );

    // Активация плагина
    public function Activate() {
        return true;
    }

    // Деактивация плагина
    public function Deactivate(){
        return true;
    }

    // Инициализация плагина
    public function Init() {

    }
}
?>
