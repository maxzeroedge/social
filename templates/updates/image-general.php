<form method='post' action="javascript:deleteStatus('{siteurl}stream/deletestatus/{statusID}')">
    <label style="font-weight:bold;">{statusposter_name} posted an image: {statusupdate}</label>
    <input type='submit' id='deleteStatus' name='deleteStatus' value='Delete'/>
</form><br/>
<img src='{siteurl}uploads/status/images/{statusimage}'/> <!--{statusposter_user}-->
<p class="postedtime">{statusfriendly_time}</p>