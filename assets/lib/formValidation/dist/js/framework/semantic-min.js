/*!
 * FormValidation (http://formvalidation.io)
 * The best jQuery plugin to validate form fields. Support Bootstrap, Foundation, Pure, SemanticUI, UIKit and custom frameworks
 *
 * @version     v0.7.0, built on 2015-08-01 4:57:17 PM
 * @author      https://twitter.com/formvalidation
 * @copyright   (c) 2013 - 2015 Nguyen Huu Phuoc
 * @license     http://formvalidation.io/license/
 */
!function($){FormValidation.Framework.Semantic=function(o,t){t=$.extend(!0,{button:{selector:'[type="submit"]:not([formnovalidate])',disabled:"disabled"},control:{valid:"",invalid:""},err:{clazz:"ui red pointing label transition",parent:"^.*(field|column).*$"},icon:{valid:null,invalid:null,validating:null,feedback:"fv-control-feedback"},row:{selector:".field",valid:"fv-has-success",invalid:"error",feedback:"fv-has-feedback"}},t),FormValidation.Base.apply(this,[o,t])},FormValidation.Framework.Semantic.prototype=$.extend({},FormValidation.Base.prototype,{_fixIcon:function(o,t){var e=o.attr("type");if("checkbox"===e||"radio"===e){var i=o.parent();i.hasClass(e)&&t.insertAfter(i)}},_createTooltip:function(o,t,e){var i=o.data("fv.icon");if(i)switch(i.popup("exists")&&i.popup("remove popup").popup("destroy"),e){case"popover":i.css({cursor:"pointer"}).popup({content:t,position:"top center"});break;case"tooltip":default:i.css({cursor:"pointer"}).popup({content:t,position:"top center",variation:"inverted"})}},_destroyTooltip:function(o,t){var e=o.data("fv.icon");e&&e.popup("exists")&&e.css({cursor:""}).popup("remove popup").popup("destroy")},_hideTooltip:function(o,t){var e=o.data("fv.icon");e&&e.popup("hide")},_sguideoltip:function(o,t){var e=o.data("fv.icon");e&&e.popup("show")}})}(jQuery);