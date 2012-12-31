<?php

class PluginPixelartavatar_HookPixelartavatar extends Hook {

    /*
     * Регистрация событий на хуки
     */
    public function RegisterHook() {
        $this->AddHook('template_block_registration_captcha', 'registration',__CLASS__,100);
        $this->AddHook('template_block_popup_registration_captcha', 'registration',__CLASS__,100);
        $this->AddDelegateHook('module_user_add_after','sex',__CLASS__,-3);
    }
    
    public function registration() {
        $this->Viewer_Assign('postfix',func_generator(5));
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'inject_registration.tpl');
    }

    public function sex($aVars) {        
        $oUser=$aVars['params'][0];
        $oUser=$this->User_GetUserById($oUser->getId());
                
        if(getRequest('profile_sex')){
            $oUser->setProfileSex(getRequest('profile_sex'));
        }        
        $this->User_Update($oUser);
    }
}
?>
