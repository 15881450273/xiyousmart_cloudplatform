<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

defined('THINK_PATH') or exit();
/**
 * Html标签库驱动
 * @category   Extend
 * @package  Extend
 * @subpackage  Driver.Taglib
 * @author    liu21st <liu21st@gmail.com>
 */
class TagLibHtml extends TagLib{
    // 标签定义
    protected $tags   =  array(
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'editor'    => array('attr'=>'id,name,style,width,height,type','close'=>1),
        'select'    => array('attr'=>'name,options,values,output,multiple,id,size,first,change,selected,dblclick','close'=>0),
        'grid'      => array('attr'=>'id,pk,style,action,actionlist,show,datasource','close'=>0),
        'list'      => array('attr'=>'id,pk,style,action,actionlist,show,datasource,checkbox','close'=>0),
        'imagebtn'  => array('attr'=>'id,name,value,type,style,click','close'=>0),
        'checkbox'  => array('attr'=>'name,checkboxes,checked,separator','close'=>0),
        'radio'     => array('attr'=>'name,radios,checked,separator','close'=>0)
        );

    /**
     * editor标签解析 插入可视化编辑器
     * 格式： <html:editor id="editor" name="remark" type="FCKeditor" style="" >{$vo.remark}</html:editor>
     * @access public
     * @param string $attr 标签属性
     * @return string|void
     */
    public function _editor($attr,$content) {
        $tag        =	$this->parseXmlAttr($attr,'editor');
        $id			=	!empty($tag['id'])?$tag['id']: '_editor';
        $name   	=	$tag['name'];
        $style   	    =	!empty($tag['style'])?$tag['style']:'';
        $width		=	!empty($tag['width'])?$tag['width']: '100%';
        $height     =	!empty($tag['height'])?$tag['height'] :'320px';
     //   $content    =   $tag['content'];
        $type       =   $tag['type'] ;
        switch(strtoupper($type)) {
            case 'FCKEDITOR':
                $parseStr   =	'<!-- 编辑器调用开始 --><script type="text/javascript" src="__ROOT__/Public/Js/FCKeditor/fckeditor.js"></script><textarea id="'.$id.'" name="'.$name.'">'.$content.'</textarea><script type="text/javascript"> var oFCKeditor = new FCKeditor( "'.$id.'","'.$width.'","'.$height.'" ) ; oFCKeditor.BasePath = "__ROOT__/Public/Js/FCKeditor/" ; oFCKeditor.ReplaceTextarea() ;function resetEditor(){setContents("'.$id.'",document.getElementById("'.$id.'").value)}; function saveEditor(){document.getElementById("'.$id.'").value = getContents("'.$id.'");} function InsertHTML(html){ var oEditor = FCKeditorAPI.GetInstance("'.$id.'") ;if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG ){oEditor.InsertHtml(html) ;}else	alert( "FCK必须处于WYSIWYG模式!" ) ;}</script> <!-- 编辑器调用结束 -->';
                break;
            case 'FCKMINI':
                $parseStr   =	'<!-- 编辑器调用开始 --><script type="text/javascript" src="__ROOT__/Public/Js/FCKMini/fckeditor.js"></script><textarea id="'.$id.'" name="'.$name.'">'.$content.'</textarea><script type="text/javascript"> var oFCKeditor = new FCKeditor( "'.$id.'","'.$width.'","'.$height.'" ) ; oFCKeditor.BasePath = "__ROOT__/Public/Js/FCKMini/" ; oFCKeditor.ReplaceTextarea() ;function resetEditor(){setContents("'.$id.'",document.getElementById("'.$id.'").value)}; function saveEditor(){document.getElementById("'.$id.'").value = getContents("'.$id.'");} function InsertHTML(html){ var oEditor = FCKeditorAPI.GetInstance("'.$id.'") ;if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG ){oEditor.InsertHtml(html) ;}else	alert( "FCK必须处于WYSIWYG模式!" ) ;}</script> <!-- 编辑器调用结束 -->';
                break;
            case 'EWEBEDITOR':
                $parseStr	=	"<!-- 编辑器调用开始 --><script type='text/javascript' src='__ROOT__/Public/Js/eWebEditor/js/edit.js'></script><input type='hidden'  id='{$id}' name='{$name}'  value='{$conent}'><iframe src='__ROOT__/Public/Js/eWebEditor/ewebeditor.htm?id={$name}' frameborder=0 scrolling=no width='{$width}' height='{$height}'></iframe><script type='text/javascript'>function saveEditor(){document.getElementById('{$id}').value = getHTML();} </script><!-- 编辑器调用结束 -->";
                break;
            case 'NETEASE':
                $parseStr   =	'<!-- 编辑器调用开始 --><textarea id="'.$id.'" name="'.$name.'" style="display:none">'.$content.'</textarea><iframe ID="Editor" name="Editor" src="__ROOT__/Public/Js/HtmlEditor/index.html?ID='.$name.'" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" style="height:'.$height.';width:'.$width.'"></iframe><!-- 编辑器调用结束 -->';
                break;
            case 'UBB':
                $parseStr	=	'<script type="text/javascript" src="__ROOT__/Public/Js/UbbEditor.js"></script><div style="padding:1px;width:'.$width.';border:1px solid silver;float:left;"><script LANGUAGE="JavaScript"> showTool(); </script></div><div><TEXTAREA id="UBBEditor" name="'.$name.'"  style="clear:both;float:none;width:'.$width.';height:'.$height.'" >'.$content.'</TEXTAREA></div><div style="padding:1px;width:'.$width.';border:1px solid silver;float:left;"><script LANGUAGE="JavaScript">showEmot();  </script></div>';
                break;
            case 'KINDEDITOR':
                $parseStr   =  '<script type="text/javascript" src="__ROOT__/Public/Js/KindEditor/kindeditor.js"></script><script type="text/javascript"> KE.show({ id : \''.$id.'\'  ,urlType : "absolute"});</script><textarea id="'.$id.'" style="'.$style.'" name="'.$name.'" >'.$content.'</textarea>';
                break;
            default :
                $parseStr  =  '<textarea id="'.$id.'" style="'.$style.'" name="'.$name.'" >'.$content.'</textarea>';
        }

        return $parseStr;
    }

    /**
     * imageBtn标签解析
     * 格式： <html:imageBtn type="" value="" />
     * @access public
     * @param string $attr 标签属性
     * @return string|void
     */
    public function _imageBtn($attr) {
        $tag        = $this->parseXmlAttr($attr,'imageBtn');
        $name       = $tag['name'];                //名称
        $value      = $tag['value'];                //文字
        $id         = isset($tag['id'])?$tag['id']:'';                //ID
        $style      = isset($tag['style'])?$tag['style']:'';                //样式名
        $click      = isset($tag['click'])?$tag['click']:'';                //点击
        $type       = empty($tag['type'])?'button':$tag['type'];                //按钮类型

        if(!empty($name)) {
            $parseStr   = '<div class="'.$style.'" ><input type="'.$type.'" id="'.$id.'" name="'.$name.'" value="'.$value.'" onclick="'.$click.'" class="'.$name.' imgButton"></div>';
        }else {
        	$parseStr   = '<div class="'.$style.'" ><input type="'.$type.'" id="'.$id.'"  name="'.$name.'" value="'.$value.'" onclick="'.$click.'" class="button"></div>';
        }

        return $parseStr;
    }

    /**
     * imageLink标签解析
     * 格式： <html:imageLink type="" value="" />
     * @access public
     * @param string $attr 标签属性
     * @return string|void
     */
    public function _imgLink($attr) {
        $tag        = $this->parseXmlAttr($attr,'imgLink');
        $name       = $tag['name'];                //名称
        $alt        = $tag['alt'];                //文字
        $id         = $tag['id'];                //ID
        $style      = $tag['style'];                //样式名
        $click      = $tag['click'];                //点击
        $type       = $tag['type'];                //点击
        if(empty($type)) {
            $type = 'button';
        }
       	$parseStr   = '<span class="'.$style.'" ><input title="'.$alt.'" type="'.$type.'" id="'.$id.'"  name="'.$name.'" onmouseover="this.style.filter=\'alpha(opacity=100)\'" onmouseout="this.style.filter=\'alpha(opacity=80)\'" onclick="'.$click.'" align="absmiddle" class="'.$name.' imgLink"></span>';

        return $parseStr;
    }

    /**
     * select标签解析
     * 格式： <html:select options="name" selected="value" />
     * @access public
     * @param string $attr 标签属性
     * @return string|void
     */
    public function _select($attr) {
        $tag        = $this->parseXmlAttr($attr,'select');
        $name       = $tag['name'];
        $options    = $tag['options'];
        $values     = $tag['values'];
        $output     = $tag['output'];
        $multiple   = $tag['multiple'];
        $id         = $tag['id'];
        $size       = $tag['size'];
        $first      = $tag['first'];
        $selected   = $tag['selected'];
        $style      = $tag['style'];
        $ondblclick = $tag['dblclick'];
		$onchange	= $tag['change'];

        if(!empty($multiple)) {
            $parseStr = '<select id="'.$id.'" name="'.$name.'" ondblclick="'.$ondblclick.'" onchange="'.$onchange.'" multiple="multiple" class="'.$style.'" size="'.$size.'" >';
        }else {
        	$parseStr = '<select id="'.$id.'" name="'.$name.'" onchange="'.$onchange.'" ondblclick="'.$ondblclick.'" class="'.$style.'" >';
        }
        if(!empty($first)) {
            $parseStr .= '<option value="" >'.$first.'</option>';
        }
        if(!empty($options)) {
            $parseStr   .= '<?php  foreach($'.$options.' as $key=>$val) { ?>';
            if(!empty($selected)) {
                $parseStr   .= '<?php if(!empty($'.$selected.') && ($'.$selected.' == $key || in_array($key,$'.$selected.'))) { ?>';
                $parseStr   .= '<option selected="selected" value="<?php echo $key ?>"><?php echo $val ?></option>';
                $parseStr   .= '<?php }else { ?><option value="<?php echo $key ?>"><?php echo $val ?></option>';
                $parseStr   .= '<?php } ?>';
            }else {
                $parseStr   .= '<option value="<?php echo $key ?>"><?php echo $val ?></option>';
            }
            $parseStr   .= '<?php } ?>';
        }else if(!empty($values)) {
            $parseStr   .= '<?php  for($i=0;$i<count($'.$values.');$i++) { ?>';
            if(!empty($selected)) {
                $parseStr   .= '<?php if(isset($'.$selected.') && ((is_string($'.$selected.') && $'.$selected.' == $'.$values.'[$i]) || (is_array($'.$selected.') && in_array($'.$values.'[$i],$'.$selected.')))) { ?>';
                $parseStr   .= '<option selected="selected" value="<?php echo $'.$values.'[$i] ?>"><?php echo $'.$output.'[$i] ?></option>';
                $parseStr   .= '<?php }else { ?><option value="<?php echo $'.$values.'[$i] ?>"><?php echo $'.$output.'[$i] ?></option>';
                $parseStr   .= '<?php } ?>';
            }else {
                $parseStr   .= '<option value="<?php echo $'.$values.'[$i] ?>"><?php echo $'.$output.'[$i] ?></option>';
            }
            $parseStr   .= '<?php } ?>';
        }
        $parseStr   .= '</select>';
        return $parseStr;
    
    }
}