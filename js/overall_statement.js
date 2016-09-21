	   
function getHomeData(categories,name1,data1,name2,data2){
        var json = {};
        json.colors=['#ff9802', '#33ccff']; 
        json.title = {text: '',x: -20};
	    json.xAxis = {categories: categories};
        json.yAxis = [{labels:{style:{color:'#3c4452',fontSize:'12px'}},title: {text: name1},plotLines: [{value: 0,width: 1,color: '#d7dbe2'}],min:0},{labels:{style:{color:'#3c4452',fontSize:'12px'}},title: {text: name2},plotLines: [{value: 0,width: 1,color: '#d7dbe2'}],opposite: true,min:0}];
	    json.legend = {layout: 'vertical',align: 'right',verticalAlign: 'middle',borderWidth: 0,enabled:true};
        json.series =  [{
                        name: name1,
                        data: data1 ,               
                        },{
                        name: name2,
                        data: data2,
                         yAxis: 1
                        }];
        json.tooltip= {
			style: {color:'#3c4452',fontSize: '12px'},
			backgroundColor:"rgba(255,255,255,0.5)",						
			borderColor:'#41bae7',
			borderRadius:10,
			shared: true,					
		};
	    json.exporting ={
    		buttons:{
        		contextButton: {
            		enabled: false
        		},
        		exportButton: {
            		text: '下载图表',
           			menuItems: null,
            		x:-20,
            		y:-10,
            		onclick: function () {
                		this.exportChart();
            		}
        		},
    		},
    		filename: 'juhepen_chart',
		};
        $('#container').highcharts(json);
};  
   
//击自定义出现自定义选框
$("body").click(function(){
　　$(".generalize_custom_child").hide();
});
$(".condition_div2").click(function(e){
	$(".generalize_custom_child").show();
	e.stopPropagation();
})
$(".generalize_custom_child").click(function(e){
　　e.stopPropagation();
});
//点击确定取消按钮隐藏自定义框
$(".cancelsure_span1").click(function(){
	$(".generalize_custom_child").hide();
})
$(".cancelsure_span2").click(function(){
	$(".generalize_custom_child").hide();
})






