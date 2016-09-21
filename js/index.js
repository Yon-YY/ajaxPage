$(function () {
    getHomeData();
});	   
function getHomeData(){
        var platform1 = $(".select1").val();
        var platform2 = $(".select2").val();
        var end_day = $(".end_day").val();
        var begin_day = $(".begin_day").val();
        $.ajax({
            url:'response_adowner.php',
            cache:false, 
            dataType:'json',
            data:{
                platform1:platform1,
                platform2:platform2,
                end_day:end_day,
                begin_day:begin_day,

            },
            type:'post',
            success:function(data) {
            	if(data.result==1){
	                var json = {};
	                json.colors=['#ff9802', '#33ccff']; 
	                json.title = {text: '',x: -20};
				    json.xAxis = {categories: data.categories};
	                json.yAxis = [{labels:{style:{color:'#3c4452',fontSize:'12px'}},title: {text: data.platformName1},plotLines: [{value: 0,width: 1,color: '#d7dbe2'}],min:0},{labels:{style:{color:'#3c4452',fontSize:'12px'}},title: {text: data.platformName2},plotLines: [{value: 0,width: 1,color: '#d7dbe2'}],opposite: true,min:0}];
				    json.legend = {layout: 'vertical',align: 'right',verticalAlign: 'middle',borderWidth: 0,enabled:true};
	                json.series =  data.series;
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
	                $('.pv_count').html(data.pv_count);
	                $('.click_count').html(data.click_count);
	                $('.rate_count').html(data.rate);
	                $('.pay_count').html(data.pay_all);
            	}
            },
            error : function() { 
                      alert('异常');
            },
         });  
    }

