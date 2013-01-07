<?php
class PluginPixelartavatar_ModuleUser_EntityUser extends PluginPixelartavatar_Inherit_ModuleUser_EntityUser {
    public function getProfileAvatarPath($iSize=100) {
        if(!$sPath=$this->getProfileAvatar()){
            $this->getProfileSex()=='woman' ? $sex='female' : $sex='male';
            $sPixelPath = "http://chiliec.ru/services/avatars/api.php?gender=" . $sex;
            if ($sPath = $this->User_UploadPixelArtAvatar($sPixelPath, $this)){
                return str_replace('_100x100',(($iSize==0)?"":"_{$iSize}x{$iSize}"),$sPath."?".date('His',strtotime($this->getProfileDate())));
            }
            return $sPixelPath;
        }else {
            return str_replace('_100x100',(($iSize==0)?"":"_{$iSize}x{$iSize}"),$sPath."?".date('His',strtotime($this->getProfileDate())));
    	}
    }
}
?>