<?php 
	
	$emailcont = '
<table cellspacing="0" cellpadding="20">
	<tr><td>
	<table width="500" cellspacing="0" cellpadding="1">
		<tr><td bgcolor="#FF8E00" align="left" style="font-family:\'lucida grande\',tahoma,\'bitstream vera sans\',helvetica,sans-serif;line-height:150%;color:#FFF;font-size:24px;font-weight:bold;padding:4px">&nbsp; '.$_SCONFIG[sitename].'</th></tr>
		<tr><td bgcolor="#FF8E00">
			<table width="100%" cellspacing="0" bgcolor="#FFFFFF" cellpadding="20">
				<tr><td style="font-family:\'lucida grande\',tahoma,\'bitstream vera sans\',helvetica,sans-serif;line-height:150%;color:#000;font-size:14px;">
					親愛的朋友：
					<blockquote>'.$message.'<br></blockquote>
					<br>
					<br>'.$_SCONFIG[sitename].'
					<br><a href="http://'.$_SERVER['HTTP_HOST'].'" target="_blank">'.'http://'.$_SERVER['HTTP_HOST'].'</a>
					<br>'.date('Y-m-d H:i',$_SGLOBAL[timestamp]).'
					<br>
					<br>此郵件為系統自動發出的郵件，請勿直接回覆。
				</td></tr></table>
		</td></tr></table>
	</td></tr>
</table>';
?>