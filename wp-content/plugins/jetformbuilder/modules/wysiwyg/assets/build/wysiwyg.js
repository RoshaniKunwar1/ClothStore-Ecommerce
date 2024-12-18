(()=>{"use strict";const{InputData:t}=JetFormBuilderAbstract,{getParsedName:e}=JetFormBuilderFunctions;function i(){t.call(this),this.isSupported=function(t){return t.classList.contains("wysiwyg-field")},this.setNode=function(i){t.prototype.setNode.call(this,i),this.inputType="wysiwyg",this.getSubmit().submitter.promise((t=>{window.tinyMCE.triggerSave(),t()})),this.textArea=i.querySelector(".wp-editor-area");const s=JSON.parse(i.dataset.editor);this.rawName=s.textarea_name,this.name=e(this.rawName);const n=()=>window.tinymce.get(this.textArea.id);n()?.remove?.(),window.wp.editor.initialize(this.textArea.id,s),this.editor=n(),this.getEditor=n},this.addListeners=function(){this.reporting.makeInvalid=()=>{},this.reporting.makeValid=()=>{};const t=()=>{this.value.current=this.editor.getContent()};this.getEditor()?.on?.("input",t)?.on?.("change",t)},this.setValue=function(){this.getEditor()?.on?.("init",(()=>{this.transferStylesToIframe(),this.callable.lock.current=!1,this.silenceSet(this.editor.getContent())}))},this.initNotifyValue=()=>{},this.focusRaw=function(){this.getEditor()?.getBody()?.focus({preventScroll:!0})},this.hasAutoScroll=function(){return!1},this.transferStylesToIframe=function(){const t=this.getWrapperNode(),e=this.editor.iframeElement.contentDocument.body,i=t.style.cssText.split(";").filter(Boolean);for(const t of i){const[i,s]=t.split(":");switch(i.trim()){case"--jfb-wysiwyg-container-bg":e.style.backgroundColor=s;break;case"--jfb-wysiwyg-container-text":e.style.color=s}}}}i.prototype=Object.create(t.prototype);const s=i,{BaseSignal:n}=JetFormBuilderAbstract;function o(){n.call(this),this.lock.current=!0,this.isSupported=function(t,e){return t.classList.contains("wysiwyg-field")},this.runSignal=function(){var t;this.input.value.current!==this.input.editor.getContent()&&this.input.editor.setContent(null!==(t=this.input.value.current)&&void 0!==t?t:"")}}o.prototype=Object.create(n.prototype);const r=o,{addFilter:a}=JetPlugins.hooks;a("jet.fb.inputs","jet-form-builder/wysiwyg-field",(function(t){return[s,...t]})),a("jet.fb.signals","jet-form-builder/wysiwyg-field",(function(t){return[r,...t]}))})();