jQuery(document).ready(function() {
	$(".swf").fancybox({
		/*onCancel		:	function() {
			return window.confirm('If canceling?');
		},*/
		beforeLoad	:	function() {
			return window.confirm('确定打开视频？');
		},
		/*
		afterLoad	:	function() {
            alert('After loading!');
		},
		beforeShow	:	function() {
            return window.confirm('Before changing in current item?');
		},
		afterShow	:	function() {
            alert('After opening!');
		},
		beforeChange	:	function() {
            return window.confirm('Before changing gallery item?');
		},*/
		beforeClose	:	function() {
            return window.confirm('真的要走吗？人家好舍不得呢');
		},
		afterClose	:	function() {
            alert('视频已经关闭');
		},
	});
	
	
		$(".iframe").fancybox({
		'width'				: '50%',
		'height'			: '90%',
        'autoScale'     	: false,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe'
			});
});