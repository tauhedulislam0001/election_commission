if (self.CavalryLogger) { CavalryLogger.start_js_script(document.currentScript); }/*FB_PKG_DELIM*/

__d("PageGoLiveSubscription_facebookRelayOperation",[],(function(a,b,c,d,e,f){e.exports="2843895622393988"}),null);
__d("PageGoLiveSubscription.graphql",["PageGoLiveSubscription_facebookRelayOperation"],(function(a,b,c,d,e,f){"use strict";a=function(){var a=[{defaultValue:null,kind:"LocalArgument",name:"input"}],c={alias:null,args:null,kind:"ScalarField",name:"id",storageKey:null},d=[{alias:null,args:null,kind:"ScalarField",name:"text",storageKey:null}];c=[{alias:null,args:[{kind:"Variable",name:"data",variableName:"input"}],concreteType:"PageGoLiveSubscribeResponsePayload",kind:"LinkedField",name:"page_go_live_subscribe",plural:!1,selections:[{alias:null,args:null,concreteType:"Page",kind:"LinkedField",name:"page",plural:!1,selections:[c,{alias:null,args:null,kind:"ScalarField",name:"name",storageKey:null}],storageKey:null},{alias:null,args:null,concreteType:"Video",kind:"LinkedField",name:"video",plural:!1,selections:[c,{alias:null,args:null,concreteType:"TextWithEntities",kind:"LinkedField",name:"title",plural:!1,selections:d,storageKey:null},{alias:null,args:null,concreteType:"TextWithEntities",kind:"LinkedField",name:"message",plural:!1,selections:d,storageKey:null}],storageKey:null}],storageKey:null}];return{fragment:{argumentDefinitions:a,kind:"Fragment",metadata:null,name:"PageGoLiveSubscription",selections:c,type:"Subscription",abstractKey:null},kind:"Request",operation:{argumentDefinitions:a,kind:"Operation",name:"PageGoLiveSubscription",selections:c},params:{id:b("PageGoLiveSubscription_facebookRelayOperation"),metadata:{subscriptionName:"page_go_live_subscribe"},name:"PageGoLiveSubscription",operationKind:"subscription",text:null}}}();e.exports=a}),null);
__d("BUIPrivateLoggingAction",["$InternalEnum"],(function(a,b,c,d,e,f){"use strict";a=b("$InternalEnum").Mirrored(["CLICK","FOCUS"]);c=a;f["default"]=c}),66);
__d("BUIPrivateLoggingClassification",["$InternalEnum"],(function(a,b,c,d,e,f){"use strict";a=b("$InternalEnum").Mirrored(["USER_ACTION"]);c=a;f["default"]=c}),66);
__d("BUIPrivateLoggingContext",["react"],(function(a,b,c,d,e,f,g){"use strict";a=d("react");b=a.createContext(null);g["default"]=b}),98);
__d("BUIPrivateLoggingRegionHierarchyContext",["react"],(function(a,b,c,d,e,f,g){"use strict";a=d("react");b=a.createContext([]);g["default"]=b}),98);
__d("useBUIPrivateWithLogging",["BUIPrivateLoggingContext","BUIPrivateLoggingRegionHierarchyContext","react"],(function(a,b,c,d,e,f,g){"use strict";b=d("react");var h=b.useContext,i=b.useMemo;function a(a,b){var d=b.name,e=b.action,f=b.classification,g=h(c("BUIPrivateLoggingContext")),j=h(c("BUIPrivateLoggingRegionHierarchyContext"));return i(function(){return a==null&&g==null?void 0:function(b){for(var c=arguments.length,h=new Array(c>1?c-1:0),i=1;i<c;i++)h[i-1]=arguments[i];a==null?void 0:a.apply(void 0,[b].concat(h));g==null?void 0:g({name:d,action:e,classification:f,hierarchy:j},b)}},[a,g,d,e,f,j])}g["default"]=a}),98);
__d("BUIPrivateWithLoggingProvider.react",["react","useBUIPrivateWithLogging"],(function(a,b,c,d,e,f,g){"use strict";d("react");function a(a){var b=a.action,d=a.callback,e=a.children,f=a.classification;a=a.name;return e(c("useBUIPrivateWithLogging")(d,{name:a,action:b,classification:f}))}a.displayName=a.name+" [from "+f.id+"]";g["default"]=a}),98);
__d("useEffectOnce",["react"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react").useEffect;function a(a){return h(a,[])}g["default"]=a}),98);
__d("PageGoLiveSubscription",["PageGoLiveSubscription.graphql","RelayModern"],(function(a,b,c,d,e,f,g){"use strict";var h,i=h!==void 0?h:h=b("PageGoLiveSubscription.graphql");function a(a,b,c){b={input:b};return d("RelayModern").requestSubscription(a,{subscription:i,variables:b,onNext:c==null?void 0:c.onNext})}g.subscribe=a}),98);
__d("EmbeddedVideoLiveVideoPrompt.react",["cx","DOMContainer.react","PageGoLiveSubscription","RelayFBEnvironment","RelayHooks","SubscriptionsHandler","react","setTimeout","useEffectOnce"],(function(a,b,c,d,e,f,g,h){"use strict";var i=d("react"),j=d("react").useState,k=1e4;function a(a){var b=a.liveVideoPrompt,e=a.vpc,f=a.pageID;a=j(!1);var g=a[0],h=a[1];c("setTimeout")(function(){return h(!0)},k);var l=new(c("SubscriptionsHandler"))();e.isAutoplayable()||l.addSubscriptions(e.addListener("beginPlayback",function(){h(!0),l.release()}));l.addSubscriptions(e.addListener("pausePlayback",function(){h(!0),l.release()}));a=i.jsx(c("DOMContainer.react"),{children:b});c("useEffectOnce")(function(){var a=d("PageGoLiveSubscription").subscribe(c("RelayFBEnvironment"),{pageID:f},{onError:function(a){},onNext:function(a){a=a==null?void 0:a.page_go_live_subscribe;if(a==null)return;var b=a.page;a=a.video;if(b==null||a==null)return}});return function(){return a.dispose()}});return i.jsx(d("RelayHooks").RelayEnvironmentProvider,{environment:c("RelayFBEnvironment"),children:i.jsx("div",{className:(g?"_91d0":"")+(g?"":" _91d1"),children:a})})}a.displayName=a.name+" [from "+f.id+"]";g["default"]=a}),98);