/*
     Copyright (c) 2010, Yahoo! Inc. All rights reserved.
     Code licensed under the BSD License:
     http://developer.yahoo.com/yui/license.html
     version: 3.3.0
     build: 3167
     */
YUI.add('slider-base',function(Y){var INVALID_VALUE=Y.Attribute.INVALID_VALUE;function SliderBase(){SliderBase.superclass.constructor.apply(this,arguments);}
Y.SliderBase=Y.extend(SliderBase,Y.Widget,{initializer:function(){this.axis=this.get('axis');this._key={dim:(this.axis==='y')?'height':'width',minEdge:(this.axis==='y')?'top':'left',maxEdge:(this.axis==='y')?'bottom':'right',xyIndex:(this.axis==='y')?1:0};this.publish('thumbMove',{defaultFn:this._defThumbMoveFn,queuable:true});},renderUI:function(){var contentBox=this.get('contentBox');this.rail=this.renderRail();this._uiSetRailLength(this.get('length'));this.thumb=this.renderThumb();this.rail.appendChild(this.thumb);contentBox.appendChild(this.rail);contentBox.addClass(this.getClassName(this.axis));},renderRail:function(){var minCapClass=this.getClassName('rail','cap',this._key.minEdge),maxCapClass=this.getClassName('rail','cap',this._key.maxEdge);return Y.Node.create(Y.substitute(this.RAIL_TEMPLATE,{railClass:this.getClassName('rail'),railMinCapClass:minCapClass,railMaxCapClass:maxCapClass}));},_uiSetRailLength:function(length){this.rail.setStyle(this._key.dim,length);},renderThumb:function(){this._initThumbUrl();var imageUrl=this.get('thumbUrl');return Y.Node.create(Y.substitute(this.THUMB_TEMPLATE,{thumbClass:this.getClassName('thumb'),thumbShadowClass:this.getClassName('thumb','shadow'),thumbImageClass:this.getClassName('thumb','image'),thumbShadowUrl:imageUrl,thumbImageUrl:imageUrl}));},bindUI:function(){this._bindThumbDD();this._bindValueLogic();this.after('disabledChange',this._afterDisabledChange);this.after('lengthChange',this._afterLengthChange);},_bindThumbDD:function(){var config={constrain:this.rail};config['stick'+this.axis.toUpperCase()]=true;this._dd=new Y.DD.Drag({node:this.thumb,bubble:false,on:{'drag:start':Y.bind(this._onDragStart,this)},after:{'drag:drag':Y.bind(this._afterDrag,this),'drag:end':Y.bind(this._afterDragEnd,this)}});this._dd.plug(Y.Plugin.DDConstrained,config);},_bindValueLogic:function(){},_uiMoveThumb:function(offset){if(this.thumb){this.thumb.setStyle(this._key.minEdge,offset+'px');this.fire('thumbMove',{offset:offset});}},_onDragStart:function(e){this.fire('slideStart',{ddEvent:e});},_afterDrag:function(e){var thumbXY=e.info.xy[this._key.xyIndex],railXY=e.target.con._regionCache[this._key.minEdge];this.fire('thumbMove',{offset:(thumbXY-railXY),ddEvent:e});},_afterDragEnd:function(e){this.fire('slideEnd',{ddEvent:e});},_afterDisabledChange:function(e){this._dd.set('lock',e.newVal);},_afterLengthChange:function(e){if(this.get('rendered')){this._uiSetRailLength(e.newVal);this.syncUI();}},syncUI:function(){this._dd.con.resetCache();this._syncThumbPosition();},_syncThumbPosition:function(){},_setAxis:function(v){v=(v+'').toLowerCase();return(v==='x'||v==='y')?v:INVALID_VALUE;},_setLength:function(v){v=(v+'').toLowerCase();var length=parseFloat(v,10),units=v.replace(/[\d\.\-]/g,'')||this.DEF_UNIT;return length>0?(length+units):INVALID_VALUE;},_initThumbUrl:function(){if(!this.get('thumbUrl')){var skin=this.getSkinName()||'sam',base=Y.config.base;if(base.indexOf('http://yui.yahooapis.com/combo')===0){base='http://yui.yahooapis.com/'+Y.version+'/build/';}
this.set('thumbUrl',base+'slider/assets/skins/'+
skin+'/thumb-'+this.axis+'.png');}},BOUNDING_TEMPLATE:'<span></span>',CONTENT_TEMPLATE:'<span></span>',RAIL_TEMPLATE:'<span class="{railClass}">'+'<span class="{railMinCapClass}"></span>'+'<span class="{railMaxCapClass}"></span>'+'</span>',THUMB_TEMPLATE:'<span class="{thumbClass}" tabindex="-1">'+'<img src="{thumbShadowUrl}" '+'alt="Slider thumb shadow" '+'class="{thumbShadowClass}">'+'<img src="{thumbImageUrl}" '+'alt="Slider thumb" '+'class="{thumbImageClass}">'+'</span>'},{NAME:'sliderBase',ATTRS:{axis:{value:'x',writeOnce:true,setter:'_setAxis',lazyAdd:false},length:{value:'150px',setter:'_setLength'},thumbUrl:{value:null,validator:Y.Lang.isString}}});},'3.3.0',{requires:['widget','substitute','dd-constrain']});