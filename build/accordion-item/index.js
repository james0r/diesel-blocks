!function(){"use strict";var e,t={664:function(){var e=window.wp.blocks,t=window.wp.element,n=window.wp.blockEditor,r=window.wp.i18n,o=window.wp.data,i=JSON.parse('{"u2":"diesel-blocks/accordion-item"}');(0,e.registerBlockType)(i.u2,{edit:function(e){let{attributes:i,setAttributes:c,clientId:l}=e;const{headingText:a,panelText:u,id:s}=i;c({editorId:l});const{itemIndex:d}=(0,o.useSelect)((e=>{const{getBlockIndex:t}=e("core/block-editor");return{itemIndex:t(l)}}));c({itemIndex:d});const{parentAttributes:p}=(0,o.useSelect)((e=>{const t=e("core/block-editor").getBlockHierarchyRootClientId(l);return{parentAttributes:e("core/block-editor").getBlockAttributes(t)}}));return c({parentAttributes:p}),(0,t.createElement)(t.Fragment,null,(0,t.createElement)("div",(0,n.useBlockProps)({id:s}),(0,t.createElement)(n.RichText,{tagName:"h2",placeholder:(0,r.__)("Item Heading","diesel"),onChange:e=>{c({headingText:e})},value:a}),(0,t.createElement)(n.RichText,{tagName:"div",placeholder:(0,r.__)("Some panel text..."),onChange:e=>{c({panelText:e})},value:u})))},save:function(e){let{attributes:t}=e;return null}})}},n={};function r(e){var o=n[e];if(void 0!==o)return o.exports;var i=n[e]={exports:{}};return t[e](i,i.exports,r),i.exports}r.m=t,e=[],r.O=function(t,n,o,i){if(!n){var c=1/0;for(s=0;s<e.length;s++){n=e[s][0],o=e[s][1],i=e[s][2];for(var l=!0,a=0;a<n.length;a++)(!1&i||c>=i)&&Object.keys(r.O).every((function(e){return r.O[e](n[a])}))?n.splice(a--,1):(l=!1,i<c&&(c=i));if(l){e.splice(s--,1);var u=o();void 0!==u&&(t=u)}}return t}i=i||0;for(var s=e.length;s>0&&e[s-1][2]>i;s--)e[s]=e[s-1];e[s]=[n,o,i]},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={430:0,707:0};r.O.j=function(t){return 0===e[t]};var t=function(t,n){var o,i,c=n[0],l=n[1],a=n[2],u=0;if(c.some((function(t){return 0!==e[t]}))){for(o in l)r.o(l,o)&&(r.m[o]=l[o]);if(a)var s=a(r)}for(t&&t(n);u<c.length;u++)i=c[u],r.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return r.O(s)},n=self.webpackChunkdiesel_blocks=self.webpackChunkdiesel_blocks||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var o=r.O(void 0,[707],(function(){return r(664)}));o=r.O(o)}();