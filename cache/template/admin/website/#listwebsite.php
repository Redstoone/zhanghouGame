<?php defined('ROOT') or exit('Can\'t Access !'); ?>


<a href="index.php?case=website&act=addwebsite&admin_dir=<?php echo get('admin_dir');?>&site=default"  class="btn btn-primary">增加站点</a>
<div class="blank30"></div>


<form name="listform" id="listform"  action="<?php echo uri();?>" method="post">

<div class="table-responsive">
<table class="table table-hover">
<thead>
        <tr class="th">
          <th align="center"><!--id-->编号</th>
          <th align="center"><!--name-->站点</th>
          <th align="center"><!--url-->地址</th>
          <th align="center">操作</th>
        </tr>

</thead>
<tbody>
<?php if(is_array($data))
foreach($data as $d) { ?>
<tr class="s_out" onmouseover="m_over(this)" onmouseout="m_out(this)">

<td align="center" ><?php echo $d['id'];?></td>
<td align="center" style="padding-left:10px;"><?php echo $d['name'];?></td>
<td align="left" style="padding-left:10px;"><?php echo $d['url'];?></td>

<td align="center" class="manage">
<a href="<?php echo $d['url'];?>index.php?case=admin&act=remotelogin&admin_dir=<?php echo $d['admindir'];?>&args=<?php echo $d['args'];?>&submit=1" target="_blank">切换</a>
<a href="<?php echo modify("act/editwebsite/id/".$d['path']);?>">编辑</a>
<a onclick="javascript: return confirm('确实要删除吗?');" href="<?php echo modify("/act/deletewebsite/id/".$d['path']);?>">删除</a>
</td>
</tr>
<?php } ?>


      </tbody>
    </table>



</form>
</div>