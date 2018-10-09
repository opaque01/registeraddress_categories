# TYPO3 Extension which implement directmail categories to registeraddress

Add the following code to your template from registeraddress:
Resources/Private/Partial/Address/formFields.html
```
<div class="fieldrow form-group">
  <f:alias map="{categories: '{od:getCategories()}'}">
    <f:if condition="{categories}">
      <f:if condition="{categories -> f:count()} == 1">
        <f:then>
          <f:comment>
            We can't use the property attribute as we need the parameter to be
            multiple (ending with []) in every case. This is not possible with the normal
            hidden field. That's why we set the name by ourselves.
          </f:comment>
          <f:form.hidden name="newAddress[moduleSysDmailCategory][]" value="{categories.0.uid}" />
            </f:then>
              <f:else>
                <fieldset class="checkboxes">
                    <f:for each="{categories}" as="category">
                        <f:form.checkbox
                            checked="{od:isCategorySelected(categoryUid: '{category.uid}')}"
                            id="option-{category.uid}"
                            class="category"
                            property="moduleSysDmailCategory"
                            multiple="1"
                            value="{category.uid}"
                        />
                        <label for="option-{category.uid}">{category.category}</label>
                      </f:for>
                </fieldset>
              </f:else>
          </f:if>
      </f:if>
  </f:alias>
</div>
```
