<?php
/**
 * This is where to put a &lt;p&gt; for show baidu maps
 * 
 * @package BaiduMaps
 * @author Cuu
 * @version 1.0.0
 * @link http://dphys.us/
 */

class BaiduMap_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
	
        Typecho_Plugin::factory('Widget_Abstract_Contents')->excerpt = array('BaiduMap_Plugin', 'parse');
        Typecho_Plugin::factory('Widget_Abstract_Contents')->content = array('BaiduMap_Plugin', 'parse');
        Typecho_Plugin::factory('Widget_Abstract_Comments')->content = array('BaiduMap_Plugin', 'parse');
	
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
	
        
        $XVAL = new Typecho_Widget_Helper_Form_Element_Text('latitude', NULL,'499', _t('经度值'), _t('地图上经度X'));
        $XVAL->input->setAttribute('class', 'baidumap_xval');
        $form->addInput($XVAL);
        
        $YVAL = new Typecho_Widget_Helper_Form_Element_Text('longitude', NULL, '499', _t('纬度值'), _t('地图上的纬度Y'));
        $YVAL->input->setAttribute('class', 'baidumap_yval');
        $form->addInput($YVAL);

        $PVAL = new Typecho_Widget_Helper_Form_Element_Text('didian', NULL, '天安门', _t('地点名称'), _t('最好是地图上存在的地点名称,增加准确度'));
        $PVAL->input->setAttribute('class', 'baidumap_pval');
        $form->addInput($PVAL);


        $KeyVAL = new Typecho_Widget_Helper_Form_Element_Text('guanjianzi', NULL, "{百度地图}", _t('关键字'), _t('在博文中出现的关键字匹配,关键字格式是括号+内容,可以很特别,很诡异,记的住就好'));
        $KeyVAL->input->setAttribute('class', 'baiddumap_keyval');
	
        $form->addInput($KeyVAL);

	$TipVAL = new Typecho_Widget_Helper_Form_Element_Label('bangzhu', NULL, NULL, _t('使用帮助:'),
		 _t('访问<a href="http://api.map.baidu.com/lbsapi/creatmap/index.html" target="_blank">Baidu地图工具</a> 获得坐标值'));
	
	$form->addInput($TipVAL);	
		
    }
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */
    public static function parse($text, $widget, $lastResult)
    {
	
        $text = empty($lastResult) ? $text : $lastResult;
        
//        $settings = Helper::options()->plugin('BaiduMap');
        
	/*	
        $textile->options['head_offset'] = $settings->headerOffset;
        $textile->options['char_encoding'] = $settings->encoding;
        $textile->options['input_encoding'] = $settings->inputEncoding;
        */

        return  BaiduMap_Plugin::process($text);
    }
	function process($txt)
	{
		$settings = Helper::options()->plugin('BaiduMap');
		
		$map_str = '<script type="text/javascript" src="http://api.map.baidu.com/api?key=*&amp;v=1.0&amp;services=true"></script>
			<p id="container" style="width: 715px; height: 240px; border: 1px solid gary; margin-top: 15px;">&nbsp;</p>
			<script type="text/javascript">// <![CDATA[
  
   			var map = new BMap.Map("container");
   			map.centerAndZoom(new BMap.Point('.$settings->latitude.' ,'.$settings->longitude.' ), 17);
   			map.addControl(new BMap.NavigationControl());  
   			map.addControl(new BMap.ScaleControl());  
   			map.addControl(new BMap.OverviewMapControl());
  			var local = new BMap.LocalSearch(map, {
   			renderOptions:{map: map}
   			});
   			local.search("'.$settings->didian.'");
			// ]]></script>';
	
	
		echo str_replace($settings->guanjianzi,$map_str,$txt);		
	}

}

