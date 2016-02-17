/*!
 * FormValidation (http://formvalidation.io)
 * The best jQuery plugin to validate form fields. Support Bootstrap, Foundation, Pure, SemanticUI, UIKit and custom frameworks
 *
 * @version     v0.7.0, built on 2015-08-01 4:57:21 PM
 * @author      https://twitter.com/formvalidation
 * @copyright   (c) 2013 - 2015 Nguyen Huu Phuoc
 * @license     http://formvalidation.io/license/
 */
!function(o){FormValidation.Framework.Uikit=function(t,a){a=o.extend(!0,{button:{selector:'[type="submit"]:not([formnovalidate])',disabled:"disabled"},control:{valid:"uk-form-success",invalid:"uk-form-danger"},err:{clazz:"uk-text-danger",parent:"^.*(uk-form-controls|uk-width-[\\d+]-[\\d+]).*$"},icon:{valid:null,invalid:null,validating:null,feedback:"fv-control-feedback"},row:{selector:".uk-form-row",valid:"fv-has-success",invalid:"fv-has-error",feedback:"fv-has-feedback"}},a),FormValidation.Base.apply(this,[t,a])},FormValidation.Framework.Uikit.prototype=o.extend({},FormValidation.Base.prototype,{_fixIcon:function(o,t){var a=this._namespace,i=o.attr("type"),e=o.attr("data-"+a+"-field"),r=this.options.fields[e].row||this.options.row.selector,n=o.closest(r);if("checkbox"===i||"radio"===i){var l=o.parent();l.is("label")&&t.insertAfter(l)}0===n.find("label").length&&t.addClass("fv-icon-no-label")},_createTooltip:function(t,a,i){var e=t.data("fv.icon");e&&(e.data("tooltip")&&(e.data("tooltip").off(),e.removeData("tooltip")),e.attr("title",a).css({cursor:"pointer"}),new o.UIkit.tooltip(e))},_destroyTooltip:function(o,t){var a=o.data("fv.icon");if(a){var i=a.data("tooltip");i&&(i.hide(),i.off(),a.off("focus mouseenter").removeData("tooltip")),a.css({cursor:""})}},_hideTooltip:function(o,t){var a=o.data("fv.icon");if(a){var i=a.data("tooltip");i&&i.hide(),a.css({cursor:""})}},_sguideoltip:function(o,t){var a=o.data("fv.icon");if(a){a.css({cursor:"pointer"});var i=a.data("tooltip");i&&i.show()}}})}(jQuery);