<form method='post' action="javascript:deleteStatus('{siteurl}stream/deletestatus/{statusID}')">
    <label style="font-weight:bold;">{statusposter_name} posted a photo on your profile</label>
    <input type='submit' id='deleteStatus' name='deleteStatus' value='Delete'/>
</form><br/>
<img src='{siteurl}uploads/status/images/{statusimage}'/> <!--{statusposter_user}-->
<p class="postedtime">Posted {statusfriendly_time}</p>