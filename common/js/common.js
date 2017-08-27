
/**
 * Created by SOPT on 2017/7/15.
 */
(function(globle){
    var App= function (){};

    App.fn=App.prototype={
        version:'1.0.0',
        moduleMount:null//模块方法挂载点
    };
    globle.App=App;
})(window);

$(document).ready(function(){
    App.moduleMount.init();
});