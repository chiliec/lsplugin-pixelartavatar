<dl class="form-item">
    <dt><label for="profile_sex">{$aLang.settings_profile_sex}:</label></dt>
    <dd>
        <select name="profile_sex" id="profile_sex" class="input-width-250">
            <option value="man" {if $_aRequest.profile_sex=='man'}selected{/if}>{$aLang.settings_profile_sex_man}</option>
            <option value="woman" {if $_aRequest.profile_sex=='woman'}selected{/if}>{$aLang.settings_profile_sex_woman}</option>
            <option value="other" {if $_aRequest.profile_sex=='other'}selected{/if}>{$aLang.settings_profile_sex_other}</option>
        </select>
    </dd>
</dl>