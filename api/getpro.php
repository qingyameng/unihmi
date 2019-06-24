<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 

$filesize = $_GET['filesize'];
$catid = $_GET['catid'];

$db = pc_base::load_model('download_model');
$db_data = pc_base::load_model('download_data_model');

$sql = "catid=$catid AND filesize=$filesize";

$info = $db->select($where = "$sql", $data = 'id,title,thumb,model', $limit = '', $order = 'id DESC', $group = '', $key='');

if($info){
	foreach($info as $k=>$v){
		$id = $v['id'];
		$sql_data = "id=$id";
		$data = $db_data->get_one($where = "$sql_data", $data = 'id,content', $order = '', $group = '');
		$info[$k]['content'] = $data['content'];
	}
}

$html = '';
if($info){
	foreach($info as $r){
		$html .= '<div class="albumblock"><div class="inner"><a href="'.$r['url'].'" target="_blank" title="'.$r['title'].'"><img src="'.$r['thumb'].'"></a></div><div class="title"><a href="'.$r['url'].'" target="_blank">'.$r['model'].'</a></div><div class="title">'.$r['title'].'</div><div class="content">'.$r['content'].'</div></div><div style="height:25px;"></div><div style="border-top: 1px dotted #999999; height:25px;"></div>';
	}
}

echo $html;

?>