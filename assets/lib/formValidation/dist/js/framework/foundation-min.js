/*!
 * FormValidation (http://formvalidation.io)
 * The best jQuery plugin to validate form fields. Support Bootstrap, Foundation, Pure, SemanticUI, UIKit and custom frameworks
 *
 * @version     v0.7.0, built on 2015-08-01 4:57:17 PM
 * @author      https://twitter.com/formvalidation
 * @copyright   (c) 2013 - 2015 Nguyen Huu Phuoc
 * @license     http://formvalidation.io/license/
 */
!function($){FormValidation.Framework.Foundation=function(o,t){t=$.extend(!0,{button:{selector:'[type="submit"]:not([formnovalidate])',disabled:"disabled"},err:{clazz:"error",parent:"^.*((small|medium|large)-[0-9]+)\\s.*(columns).*$"},icon:{valid:null,invalid:null,validating:null,feedback:"fv-control-feedback"},row:{selector:".row",valid:"fv-has-success",invalid:"error",feedback:"fv-has-feedback"}},t),FormValidation.Base.apply(this,[o,t])},FormValidation.Framework.Foundation.prototype=$.extend({},FormValidation.Base.prototype,{_fixIcon:function(o,t){var i=this._namespace,n=o.attr("type"),a=o.attr("data-"+i+"-field"),e=this.options.fields[a].row||this.options.row.selector,r=o.closest(e);if("checkbox"===n||"radio"===n){var l=t.next();l.is("label")&&t.insertAfter(l)}0===r.find("label").length&&t.addClass("fv-icon-no-label")},_createTooltip:function(o,t,i){var n=this,a=o.data("fv.icon");a&&(a.attr("title",t).css({cursor:"pointer"}).off("mouseenter.container.fv focusin.container.fv").on("mouseenter.container.fv",function(){n._sguideoltip(o,i)}).off("mouseleave.container.fv focusout.container.fv").on("mouseleave.container.fv focusout.container.fv",function(){n._hideTooltip(o,i)}),Foundation.libs.tooltip.create(a),a.data("fv.foundation.tooltip",a))},_destroyTooltip:function(o,t){var i=o.data("fv.icon");if(i){i.css({cursor:""});var n=i.data("fv.foundation.tooltip");n&&(n.off(".fndtn.tooltip"),Foundation.libs.tooltip.hide(n),i.removeData("fv.foundation.tooltip"))}},_hideTooltip:function(o,t){var i=o.data("fv.icon");if(i){i.css({cursor:""});var n=i.data("fv.foundation.tooltip");n&&Foundation.libs.tooltip.hide(n)}},_sguideoltip:function(o,t){var i=o.data("fv.icon");if(i){var n=i.data("fv.foundation.tooltip");n&&(i.css({cursor:"pointer"}),Foundation.libs.tooltip.show(n))}}})}(jQuery);