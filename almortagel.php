<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
#====#
$token = "6235769542:AAFVN1es9frhiiqxJtJ345yuFpbVC7usQ-E";# توكنك تمام
$tokens = "6235769542:AAFVN1es9frhiiqxJtJ345yuFpbVC7usQ-E"; #توكنك
#====#
define('API_KEY',$token);
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}

#Short
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
$typen = $message->chat->type;
$from_id = $message->from->id;
$forward =$message->forward_from_chat;
$forwardid = $message->forward_from_chat->id;
$text = $message->text;
### ALKINDI ###
$kindev = 5089553588;
$sudo =$kindev;
### ALKINDI ###
$id = $message->from->id;
$caption = $update->message->caption;
$message_id = $message->message_id;
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}
### ALKINDI ###
if(isset($update->channel_post)){
 $chat_id = $update->channel_post->chat->id;
 $message_id = $update->channel_post->message_id;
 $message = $update->channel_post;
 $text = $update->channel_post->text;
 $textpost = $update->channel_post->text;
if($update->channel_post->message->caption){
$caption = $update->channel_post->message->caption;
}}
### ALKINDI ###
$my = file_get_contents("stting.txt");
$sttingsch = json_decode(file_get_contents("DEVER.json"),1);
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$settingdev = json_decode(file_get_contents("DEVER.json"),true);
$developer = $settingdev["developer"];
### ALKINDI ###
$sudo = array("$kindev","5089553588");#ايدي ادمن اخر
$idbot = "6126907300"; #ايدي البوت
$userbot = "O_3_zbot"; #يوزر البوت
$userbots = "@$userbot";
$buy = "Almortagel_12"; #معرف المطور
$chi = "AlmortagelTech"; #معرف قناتك
mkdir("sudo");
mkdir("data");

#===۞𝗞𝗜𝗡𝗗𝗜۞===#
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban);
$admins=explode("\n",file_get_contents("sudo/admin.txt"));#الادمنية
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$members = file_get_contents("sudo/member.txt");#تخزين الاعضاء
$groups = file_get_contents("sudo/groups.txt");#تخزين القروبات
$ex_groups = explode("\n",$groups);
$countgroups = count($ex_groups)-1;
$channels = file_get_contents("sudo/channels.txt");#تخزين القنوات
$ex_channels = explode("\n",$channels);
$countchannels = count($ex_channels)-1;
//===۞𝗞𝗜𝗡𝗗𝗜۞===//
$amr = file_get_contents("sudo/amrs.txt");
$ch2 = file_get_contents("sudo/ch2.txt");
$amr = file_get_contents("sudo/amr.txt");
$kh = file_get_contents("sudo/ch.txt");
$ch2= file_get_contents("sudo/ch2.txt");
$taf3il = file_get_contents("sudo/tanbih.txt");
$estgbal = file_get_contents("sudo/estgbal.txt");
//===۞𝗞𝗜𝗡𝗗𝗜۞===//
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
$textpost = $update->channel_post->text;
$rec = $update->channel_post->reply_to_message->text;
$typee=file_get_contents("sudo/typee1.txt");
if($typee==null){
$typee=$kindev;
}
### ALKINDI ###
if(!$settingdev["kindi"]){
$em = "- ";}elseif($settingdev["kindi"]){
$em = $settingdev["kindi"];
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
$t =$message->chat->title; 
$sstop=null;
function getChatstats($chat_id,$tokens){
$url =
'https://api.telegram.org/bot'.$tokens.'/getChatAdministrators?chat_id='.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->ok;
  return $result;
}
function getadmin($id,$from_id,$tokens){
$url = 'https://api.telegram.org/bot'.$tokens.'/getChatAdministrators?chat_id='.$id.'&user_id='.$from_id;
  $get = file_get_contents($url);
if(strpos($get,"$from_id") === false){
$ok="no";
}else{
$ok="yes";
}
return $ok;
}
function getmember($tokens,$idchannel,$from_id){
$join = file_get_contents("https://api.telegram.org/bot".$tokens."/getChatMember?chat_id=$idchannel&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"Bad Request: user not found"') or strpos($join,'"ok": false') or strpos($join,'"status":"kicked"')) !== false){
$NSSAR="no";}else{$NSSAR="yes";}
return $NSSAR;
}
function getmembergroup($tokens,$id,$from_id){
 $info2 = json_decode(file_get_contents("https://api.telegram.org/bot".$tokens."/getChatMember?chat_id=$id&user_id=$from_id"), true);
$info = $info2['result']['status'];
if($info=="left"){
$NSSAR="no";}else{$NSSAR="yes";}
return $NSSAR;
}
### ALKINDI ###
@$infosudo = json_decode(file_get_contents("sudo.json"),true);
if(!file_exists("sudo.json")){
#	$put = [];
$infosudo["info"]["stbot"]="مفعل";
$infosudo["info"]["admins"][]="$admin";
$infosudo["info"]["fwrmember"]="معطل";
$infosudo["info"]["tnbih"]="مفعل";
$infosudo["info"]["silk"]="مفعل";
$infosudo["info"]["kindis"]="مفعل";
$infosudo["info"]["allch"]="مفردة";
$infosudo["info"]["start"]="non";
$infosudo["info"]["klish_info"]="non";
file_put_contents("sudo.json",json_encode($infosudo));
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$st_bot=$infosudo["info"]["stbot"];
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$kindis=$infosudo["info"]["kindis"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$start=$infosudo["info"]["start"];
$msrd_info=$infosudo["info"]["msrd_info"];
$klish_info=$infosudo["info"]["klish_info"];
#$klish_sil=$infosudo["info"]["klish_sil"];
if($thoil==null){$thoil=0;}

/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$chsudo=$infosudo["info"]["الرئيسية"];
$na_chsu=$chsudo["name"];
$id_chsu=$chsudo["id"];
$us_chsu=$chsudo["user"];
$st_chsu=$chsudo["st"];
$co_chsu=$chsudo["coin"];
$sudoamr= $infosudo["info"]["amr"];
$infosudo["info"]["amr"]="start";
function member($from_id,$p){
$memberjson = json_decode(file_get_contents("members.json"),true);
if($p!="null"){
if($p=="add"){
$memberjson["info"]["members"][]="$from_id";
}
if($p=="ban"){
$memberjson["info"]["ban"][]="$from_id";
}
file_put_contents("members.json", json_encode($memberjson));
}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($text=="$text" or $text=="/start" or $data=="back" or preg_match('/^\/([Ss]tart) (.*)/',$text)){
if($type=="private"){
if(preg_match('/^\/([Ss]tart) (.*)/',$text)){
preg_match('/^\/([Ss]tart) (.*)/',$text,$match);
$idmem=$match[2];
if($idmem!=null){
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$refjson = json_decode(file_get_contents("ref.json"),true);
$refjson["info"][$from_id]["st"]="yes";
$refjson["info"][$from_id]["text"]="$text";
file_put_contents("ref.json", json_encode($refjson));
}}
$false="";
if($allch!="مفردة"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$s ){
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($tokens,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($klish_sil == null and $type=="private"){
$klish_sil ="✬︙مرحبا بڪك عزيزي👲،
✬︙لا يمڪنـك استخدام البوت ،
✬︙عليك الإشتراڪك في قناهہ‌‏ البوت ،
✬︙*[اضغط هنا للإشتراڪك في القناهہ‌‏](t.me/$userchannel)* ،
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙بعـد الاشتراڪك ارسل { /start } ،
";
}
if($silk=="مفعل"){
$keyboard["inline_keyboard"][]=[['text'=>$namechannel,'url'=>$url]];
}else{
$txt=$txt."\n".$tt;
}$false="yes";
}}}
$reply_markup=json_encode($keyboard);
if($false=="yes"){
	bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*$klish_sil*
$txt
",'parse_mode'=>"markdown", 
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup,
]);
return $false;}
}else{
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
foreach($orothe as $co=>$s ){
$keyboard["inline_keyboard"]=[];
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($tokens,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";

$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($klish_sil == null and $type=="private"){
$klish_sil ="✬︙مرحبا بڪك عزيزي👲،
✬︙لا يمڪنـك استخدام البوت ،
✬︙عليك الإشتراڪك في قناهہ‌‏ البوت ،
✬︙*[اضغط هنا للإشتراڪك في القناهہ‌‏](t.me/$userchannel)* ،
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙بعـد الاشتراڪك ارسل { /start } ،
";
}
if($silk=="مفعل"){
$keyboard["inline_keyboard"][]=[['text'=>$namechannel,'url'=>$url]];
}

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*$klish_sil*
",'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode($keyboard),
]);
return $false;
}}}}}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$refjson = json_decode(file_get_contents("ref.json"),true);
if($refjson["info"][$from_id]["st"]=="yes"){
$text=$refjson["info"][$from_id]["text"];
unset($refjson["info"][$from_id]);
file_put_contents("ref.json", json_encode($refjson));
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if(preg_match('/^\/([Ss]tart)(.*)/',$text)){
preg_match('/^\/([Ss]tart)(.*)/',$text,$match);
$idmem=$match[2];
$stn = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$idmem"))->result;
$nn= $stn->first_name." ".$stn->last_name;
if($idmem!=null and $nn!=null){
if($idmem!=$from_id){
if(!in_array($from_id,$member)){
if(in_array($idmem,$member)){
if(!in_array($idmem,$ban)){
$coins=coins($idmem,"z",$refl);
}}}}}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$t=time()+(3600  - 180);
for($i=0;$i<3;$i++){    
$t=$t+60;
$todaydate = date('Y-m-d',$t);
$now_date=date('H:i:s',$t);
if(file_exists("time/day/$todaydate.txt")){
$timeout=file_get_contents("time/day/$todaydate.txt");
$timeout1=explode("\n",$timeout);
}
if(is_file("time/".$now_date.".json") && !in_array($now_date,$timeout1)){
file_put_contents("time/day/$todaydate.txt",$now_date ."\n" , FILE_APPEND); 
file_put_contents("data/timeon.txt","$now_date");
$texttime="run_watawtime";
break;
}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($text == "الوقت" and in_array($from_id,$sudo)){
$t=time()+(3600* +1);
$todaydate = date('Y/m/d',$t);
$now_date=date('H:i:s',$t);
unlink("sudo/amr.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"الوقت الان 
$now_date
التاريخ
$todaydate
",'message_id'=>$message_id,
]);
}

///۞𝗞𝗜𝗡𝗗𝗜۞///
if($message and $kindis=="معطل" and !in_array($from_id,$sudo) and $type =="private" and $chat_id !=$channeladmin){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🕵 | مرحبا بك عزيزي ،
⚠ | #ناسف عن توقف البوت ،
⚙ | فقط تحت الصيانة والتحديث ،
🔘 | سيتم اعادته للخدمة الساعات القادمة ،*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
]);return false;
}
///۞𝗞𝗜𝗡𝗗𝗜۞///
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$amrjson=$fromjson["info"][$from_id]["amr"];
$coins=$fromjson["info"][$from_id]["coins"];
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$username = $message->from->username;
$user = $update->message->from->username;
//////Ali kindi //////
if($update and !in_array($from_id,$member) and $type=="private" and ! $data){
file_put_contents("sudo/member.txt","$from_id\n",FILE_APPEND);
if($tnbih=="مفعل"){
 if(!@$username){
$user="لايوجد معرف";
}elseif(@$username){
$user="@$username";
}
bot("sendmessage",[
"chat_id"=>$kindev,
"text"=>"*
✬︙أهلاً بك عزيزي المطور.
✬︙انت المطور الاساسي للبوت. 
✬︙هناك عضو قام بالدخول الى بوتك.
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙الاسم ⋙ *[$name](tg://user?id=$id)* .
✬︙الايدي ⋙ *`$from_id`*.
✬︙المعرف ⋙ $user .
✬︙عدد المشترڪين ⋙ $cunte .
✬︙عدد المجموعات المفعله ⋙ $countgroups .
✬︙عدد القنوات المستخدمة ⋙ $countchannels .
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙وقت الدخول ⋙ $now_date .
✬︙التاريخ ⋙ $todaydate .
*
",'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}}
///۞𝗞𝗜𝗡𝗗𝗜۞///
function coins($from_id,$p,$coin){
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$coins=$fromjson["info"][$from_id]["coins"];
if($p!="null"){
if($p=="z"){
$co=$coins+$coin;
}
if($p=="n"){
$co=$coins-$coin;
}
$fromjson["info"][$from_id]["coins"]=$co;
file_put_contents("from_id.json", json_encode($fromjson));
return $co;
}else{
return $coins;
}}
#############
$fromjson = json_decode(file_get_contents("from_id.json"),true);
### ALKINDI ###

#===۞𝗞𝗜𝗡𝗗𝗜۞===#
if($message->new_chat_member and $message->new_chat_member->id == $idbot){
$count = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idbot"), true);
$bot = $info['result']['status'];
### ALKINDI ###
if($bot == "member"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' =>"- معلومات عن البوت 🕵",'callback_data'=>"info"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$typee,
'text'=>"
".$em." أهلاً بك عزيزي المطور
".$em." انت المطور الاساسي للبوت. 
".$em." هناك عضو قام باضافة البوت في. 
• ┉ • ┉ • ┉ • ┉ • ┉ •*
".$em."اسم المجموعة ⋙ـ $t
".$em."ايدي المجموعة ⋙ـ *`$chat_id`*
".$em."نوع الإضافة ⋙ عضوا فقط
".$em."اعضاء المجموعة ⋙ـ $count $l
".$em."عدد المجموعات المشتركة ⋙ـ $countgroups
".$em."قام بإضافتي ⋙ـ *[$name](tg://user?id=$from_id)*
*",'parse_mode'=>"markdown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
if($bot == "administrator"){
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true,
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$typee,
'text'=>"
".$em."أهلاً بك عزيزي المطور
".$em."انت المطور الاساسي للبوت. 
".$em."هناك عضو قام باضافة البوت في. 
• ┉ • ┉ • ┉ • ┉ • ┉ •*
".$em."اسم المجموعة ⋙ـ $t
".$em."ايدي المجموعة ⋙ـ *`$chat_id`*
".$em."نوع الإضافة ⋙ مشرف
".$em."اعضاء المجموعة ⋙ـ $count $l
".$em."عدد المجموعات المشتركة ⋙ـ $countgroups
".$em."قام بإضافتي ⋙ـ *[$name](tg://user?id=$from_id)*
*",'parse_mode'=>"markdown",
'disable_web_page_preview'=> true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
if(!in_array($chat_id,$ex_groups)){
file_put_contents("sudo/groups.txt",
"$chat_id\n",FILE_APPEND);}
}
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
if($textpost){
if(!in_array($chat_id,$ex_channels)){
$use = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$chat_id"));
$users=$use->result->username;
$u= "@$users";
if($users==null){
$users = json_decode(file_get_contents("http://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id"))->result;
$u = "$users";
}
$count = bot('getchatmemberscount',[
'chat_id'=>$chat_id])->result;
bot('sendMessage',[
'chat_id'=>$typee,
'text'=>"
".$em."أهلاً بك عزيزي المطور
".$em."انت المطور الاساسي للبوت. 
".$em."هناك عضو قام باضافة البوت في. 
• ┉ • ┉ • ┉ • ┉ • ┉ •*
".$em."اسم القناة ⋙ـ $t
".$em."ايدي القناة ⋙ـ *`$chat_id`*
".$em."اعضاء القناة ⋙ـ $count $u
".$em."عدد القنوات المشتركة ⋙ـ $countchannels *
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])]);
file_put_contents("sudo/channels.txt",
"$chat_id\n",FILE_APPEND);
}}
 ### ALKINDI ###
if($data == "memb" and  in_array($from_id,$sudo)){
$userb = strtoupper($userbot);
if($sppedtime == 3  or $sppedtime <3){
$f ="ممتازه";}
if($sppedtime == 9 or $sppedtime >9){
$f ="جيده";}
if($sppedtime == 10 or $sppedtime >10){
$f ="ضعيفه";
}
bot('editmessagetext',[
"message_id"=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*
".$em." الاحصائيات .

".$em."عدد الاعضاء ⋙ $cunte ،
".$em."عدد المجموعات ⋙ $countgroups ،
".$em."عدد القنوات ⋙ $countchannels ،
".$em."السرعة ⋙ $f ،*
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
### ALKINDI ###
if($text=="المرتجل" or $text=="م" or $text=="مطور"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
if($type=="private"){
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"
".$em." اهلا بك عزيزي 🙋🏽‍♂
".$em."في اوامر البوت الكتابية !
• ┉ • ┉ • ┉ • ┉ • ┉ • 
".$em."الادمنية⇜لعرض قائمة الادمنية .
".$em."ارفعني⇜ارسل رقم الترقية لتصبح ادمن
".$em."ترقية⇜لإنشاء رمز الترقية .
".$em."تنزيل + ايدي⇜لتنزيل ادمن .
".$em."تواقيت⇜لعرض التواقيت .
--
",'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'📌 اعدادات تعيين الكلايش','callback_data'=>"nul"]],
[['text'=>'📑 البدء | start','callback_data'=>"welc"],['text'=>"📑 الاشتراك ",'callback_data'=>"klish_sil"],['text'=>'📑 التعليمات','callback_data'=>"infobot"]],
[['text'=>"- حالة البوت | $kindis",'callback_data'=>"kindis"]],
[['text'=>'🔒 قفل البوت','callback_data'=>"قفل البوت"],['text'=>'🔓 فتح البوت','callback_data'=>"فتح البوت"]],

[['text'=>'- تعيين الرموز','callback_data'=>"تعيين رموز السورس"],['text'=>'- حذف الرموز','callback_data'=>"حذف رموز السورس"]],

[['text'=>'📌 اعدادات الاذاعة والاحصائية','callback_data'=>"null"]],
[['text'=>'⏺ اذاعة عامة ','callback_data'=>"ethaa"],['text'=>'⏰ اذاعة بالتوقيت','callback_data'=>"sendtime"],['text'=>'📊 الاحصائيات','callback_data'=>"memb"]],
[['text'=>'📌 اعدادات اشعارات البوت','callback_data'=>"nulll"]],
[['text'=>"👬 الدخول | $tnbih",'callback_data'=>"tnbih"],['text'=>"🔄 التوجيه | $fwrmember",'callback_data'=>"fwrmember"]],
[['text'=>'📌 اعدادات الاشتراك الاجباري','callback_data'=>"nullll"]],
[['text'=>'🛰 قنوات الاشتراك','callback_data'=>"viwechannel"],['text'=>"➖ حذف قنوات",'callback_data'=>"delchannel"],['text'=>"➕ اضافة قنوات",'callback_data'=>"addchannel"]],
[['text'=>'📌 اعدادات الحظر والرفع','callback_data'=>"nulllll"]],
[['text'=>'🚷المحظورين','callback_data'=>"ban"],["text"=>"🚫حظر","callback_data"=>"baan"],["text"=>"🚯الغاء ","callback_data"=>"unban"],["text"=>"🗑حذف عام","callback_data"=>"unbanall"]],
[['text'=>'📌 استقبال الرسائل للاعضاء','callback_data'=>"nullllll"]],
[['text'=>'💬 خاص البوت','callback_data'=>"typee"],
['text'=>'💬 المجموعة','callback_data'=>"supergruope"]],
[['text'=>'📌 اعدادات خاصة للمطور','callback_data'=>"nulllllll"]],
[['text'=>"👨‍🔧 الادمنية",'callback_data'=>"admins"],['text'=>'⌛️ انشاء نسخة','callback_data'=>"nnn"],["text"=>"⚠️ تهيئة البوت","callback_data"=>"delbot"]],
[['text'=>'📌 خيارات الاشتراك الاجباري','callback_data'=>"nullllllll"]],
[['text'=>"🛃 الزر انلاين | $silk",'callback_data'=>"silk"],['text'=>"📑 الكليشة | $allch",'callback_data'=>"allch"]]
]])
]);
}}
}
///۞𝗞𝗜𝗡𝗗𝗜۞///
if($data == "home" and in_array($from_id,$sudo)){
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
  ///۞𝗞𝗜𝗡𝗗𝗜۞///
function sendwataw($chat_id,$message_id){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$kindis=$infosudo["info"]["kindis"];

$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="لايوجد محظورين";
}	
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"
".$em." اهلا بك عزيزي 🙋🏽‍♂
".$em."في اوامر البوت الكتابية !
• ┉ • ┉ • ┉ • ┉ • ┉ • 
".$em."الادمنية⇜لعرض قائمة الادمنية .
".$em."ارفعني⇜ارسل رقم الترقية لتصبح ادمن
".$em."ترقية⇜لإنشاء رمز الترقية .
".$em."تنزيل + ايدي⇜لتنزيل ادمن .
".$em."تواقيت⇜لعرض التواقيت .
---
",'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'📌 اعدادات تعيين الكلايش','callback_data'=>"nul"]],
[['text'=>'📑 البدء | start','callback_data'=>"welc"],['text'=>"📑 الاشتراك ",'callback_data'=>"klish_sil"],['text'=>'📑 التعليمات','callback_data'=>"infobot"]],
[['text'=>"- حالة البوت | $kindis",'callback_data'=>"kindis"]],
[['text'=>'🔒 قفل البوت','callback_data'=>"قفل البوت"],['text'=>'🔓 فتح البوت','callback_data'=>"فتح البوت"]],

[['text'=>'- تعيين الرموز','callback_data'=>"تعيين رموز السورس"],['text'=>'- حذف الرموز','callback_data'=>"حذف رموز السورس"]],

[['text'=>'📌 اعدادات الاذاعة والاحصائية','callback_data'=>"null"]],
[['text'=>'⏺ اذاعة عامة ','callback_data'=>"ethaa"],['text'=>'⏰ اذاعة بالتوقيت','callback_data'=>"sendtime"],['text'=>'📊 الاحصائيات','callback_data'=>"memb"]],
[['text'=>'📌 اعدادات اشعارات البوت','callback_data'=>"nulll"]],
[['text'=>"👬 الدخول | $tnbih",'callback_data'=>"tnbih"],['text'=>"🔄 التوجيه | $fwrmember",'callback_data'=>"fwrmember"]],
[['text'=>'📌 اعدادات الاشتراك الاجباري','callback_data'=>"nullll"]],
[['text'=>'🛰 قنوات الاشتراك','callback_data'=>"viwechannel"],['text'=>"➖ حذف قنوات",'callback_data'=>"delchannel"],['text'=>"➕ اضافة قنوات",'callback_data'=>"addchannel"]],
[['text'=>'📌 اعدادات الحظر والرفع','callback_data'=>"nulllll"]],
[['text'=>'🚷المحظورين','callback_data'=>"ban"],["text"=>"🚫حظر","callback_data"=>"baan"],["text"=>"🚯الغاء ","callback_data"=>"unban"],["text"=>"🗑حذف عام","callback_data"=>"unbanall"]],
[['text'=>'📌 استقبال الرسائل للاعضاء','callback_data'=>"nullllll"]],
[['text'=>'💬 خاص البوت','callback_data'=>"typee"],
['text'=>'💬 المجموعة','callback_data'=>"supergruope"]],
[['text'=>'📌 اعدادات خاصة للمطور','callback_data'=>"nulllllll"]],
[['text'=>"👨‍🔧 الادمنية",'callback_data'=>"admins"],['text'=>'⌛️ انشاء نسخة','callback_data'=>"nnn"],["text"=>"⚠️ تهيئة البوت","callback_data"=>"delbot"]],
[['text'=>'📌 خيارات الاشتراك الاجباري','callback_data'=>"nullllllll"]],
[['text'=>"🛃 الزر انلاين | $silk",'callback_data'=>"silk"],['text'=>"📑 الكليشة | $allch",'callback_data'=>"allch"]]
]])
]);
unlink("sudo/amr.txt");
}
### ALKINDI ###
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($text == "اذاعه" or $text == "اذاعة"){
if(in_array($from_id,$sudo)or in_array($from_id,$admins)){ 
if($type=="private"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em."أهلا بك عزيزي في قسم الاذاعة
".$em."قم بتحديد نوع الاذاعة ومكان ارسال الاذاعة
".$em."ثم قم الضغط على ارسال الرسالة 
",'parse_mode'=>"markdown",
'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"📯 نوع الاذاعة | $no3send",'callback_data'=>"button"]],
[['text'=>"🔂 توجيه",'callback_data'=>"forward"],
['text'=>"🔘 بدون اقتباس",'callback_data'=>"donfor"]],
[['text'=>"Ⓜ️ MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"🖇 HTML",'callback_data'=>"HTML"]],
[['text'=>"📬 ارسال الى | $chatsend",'callback_data'=>"button"]],
[['text'=>"👥 الكل",'callback_data'=>"all"],['text'=>"👤 الاعضاء",'callback_data'=>"member"]],
[['text'=>"🎛 المجموعات",'callback_data'=>"gruops"],['text'=>"🖥 القنوات",'callback_data'=>"channel"]],
[['text'=>"💬 ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>"العودة للخلف 🔙",'callback_data'=>"home"]],
]])
]);
}}
}
### ALKINDI ###
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($data == "ethaa" and in_array($from_id,$sudo) or in_array($from_id,$admins) and $type=="private"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"
".$em."أهلا بك عزيزي في قسم الاذاعة
".$em."قم بتحديد نوع الاذاعة ومكان ارسال الاذاعة
".$em."ثم اضغط على ارسال الرسالة
",'message_id' =>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"📯 نوع الاذاعة | $no3send",'callback_data'=>"button"]],
[['text'=>"🔂 توجيه",'callback_data'=>"forward"],
['text'=>"🔘 بدون اقتباس",'callback_data'=>"donfor"]],
[['text'=>"Ⓜ️ MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"🖇 HTML",'callback_data'=>"HTML"]],
[['text'=>"📬 ارسال الى | $chatsend",'callback_data'=>"button"]],
[['text'=>"👥 الكل",'callback_data'=>"all"],['text'=>"👤 الاعضاء",'callback_data'=>"member"]],
[['text'=>"🎛 المجموعات",'callback_data'=>"gruops"],['text'=>"🖥 القنوات",'callback_data'=>"channel"]],
[['text'=>"💬 ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>"العودة للخلف 🔙",'callback_data'=>"home"]],
]])
]);
}
function sendwataw2($chat_id,$message_id){
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"
".$em."أهلا بك عزيزي في قسم الاذاعة
".$em."قم بتحديد نوع الاذاعة ومكان ارسال الاذاعة
".$em."ثم اضغط على ارسال الرسالة
",'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"📯 نوع الاذاعة | $no3send",'callback_data'=>"button"]],
[['text'=>"🔂 توجيه",'callback_data'=>"forward"],
['text'=>"🔘 بدون اقتباس",'callback_data'=>"donfor"]],
[['text'=>"Ⓜ️ MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"🖇 HTML",'callback_data'=>"HTML"]],
[['text'=>"📬 ارسال الى | $chatsend",'callback_data'=>"button"]],
[['text'=>"👥 الكل",'callback_data'=>"all"],['text'=>"👤 الاعضاء",'callback_data'=>"member"]],
[['text'=>"🎛 المجموعات",'callback_data'=>"gruops"],['text'=>"🖥 القنوات",'callback_data'=>"channel"]],
[['text'=>"💬 ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>"العودة للخلف 🔙",'callback_data'=>"home"]],
]])
]);
}
### ALKINDI ###
if($data == "forward"){
file_put_contents("no3send.txt","forward");
sendwataw2($chat_id,$message_id);
}
if($data == "donfor"){
file_put_contents("no3send.txt","donfor");
sendwataw2($chat_id,$message_id);
}
if($data == "MARKDOWN"){
file_put_contents("no3send.txt","MARKDOWN");
sendwataw2($chat_id,$message_id);
}
if($data == "HTML"){
file_put_contents("no3send.txt","html");
sendwataw2($chat_id,$message_id);
}
if($data == "all"){
file_put_contents("chatsend.txt","all");
sendwataw2($chat_id,$message_id);
}
if($data == "member"){
file_put_contents("chatsend.txt","member");
sendwataw2($chat_id,$message_id);
}
if($data == "gruops"){
file_put_contents("chatsend.txt","gruops");
sendwataw2($chat_id,$message_id);
}
if($data == "channel"){
file_put_contents("chatsend.txt","channel");
sendwataw2($chat_id,$message_id);
}

$no3send=file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($data == "post" and $no3send!=null and $chatsend!=null ){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
file_put_contents("sudo/amr.txt","sendsend");
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"
".$em."قم بارسال منشورك الان 

".$em."نوع الارسال : $no3send
".$em."مكان الارسال : $chatsend
",'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"❎ الغاء الامر ",'callback_data'=>"set"]],
]
])
]);
}}
if($data == "set" ){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
unlink("sudo/amr.txt");
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"✅| تم إلغاء الارسال بنجاح 
",'parse_mode' =>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}}
####kindi####
$forward = $update->message->forward_from;
$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;
if($amr=="sendsendtime" or  $amr=="sendsend" ){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
$poststatus="yes";
}}
if($poststatus=="yes"){
if($photo){
$sens="sendphoto";
$file_id = $update->message->photo[1]->file_id;
}
if($document){
$sens="senddocument";
$file_id = $update->message->document->file_id;
}
if($video){
$sens="sendvideo";
$file_id = $update->message->video->file_id;
}
if($audio){
$sens="sendaudio";
$file_id = $update->message->audio->file_id;
}
if($voice){
$sens="sendvoice";
$file_id = $update->message->voice->file_id;
}
if($sticker){
$sens="sendsticker";
$file_id = $update->message->sticker->file_id;
}
$poststatus=null;
}
mkdir("ms");
### ALKINDI ###
if($message and $text !="الاذاعة" and $amr == "sendsend" and $no3send=="forward"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
unlink("sudo/amr.txt");
$rand=rand(11111111,99999999);
if($chatsend=="all"){
$for=$channels."\n".$groups."\n".$members;
$txt="
✅| تم التوجية : عام

".$em."خاص البوت : $cunte
".$em."المجموعات : $countgroups
".$em."القنوات : $countchannels";}
if($chatsend=="member"){
$for=$members;
$txt="".$em."تم التوجية: للاعضاء فقط
".$em."الاعضاء : $cunte";}
if($chatsend=="gruops"){
$for=$groups;
$txt="".$em."تم التوجية: المجموعات فقط
".$em."المجموعات : $countgroups";}
if($chatsend=="channel"){
$txt="".$em."تم التوجية: القنوات فقط
".$em."القنوات : $countchannels";
$for=$channels;
}
$foor=explode("\n",$for);
bot('ForwardMessage',[
'chat_id'=>$chat_id,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
for($i=0;$i<count($foor); $i++){
$get=bot('ForwardMessage',[
'chat_id'=>$foor[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
bot('sendmessage',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"$txt
".$em."كود المنشور : *`$rand`*
---
",'parse_mode' =>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🗑| حذف المنشور ",'callback_data'=>"delelink ".$rand]],
[['text'=>'💬| ارسال رسالة اخرى ','callback_data'=>"post"]],
[['text'=>'🔙 𝙱𝙰𝙲𝙺','callback_data'=>"home"]],
]])
]);
}}
### ALKINDI ###
if($message and $text !="الاذاعة" and $amr == "sendsend" and $no3send !="forward"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
unlink("sudo/amr.txt");
$rand=rand(11111111,99999999);
if($chatsend=="all"){
$for=$channels."\n".$groups."\n".$members;
$txt="✅| تم النشر - عام للجميع

".$em."عدد الخاص : $cunte عضوا.
".$em."عدد المجموعات : $countgroups مجموعة.
".$em."عدد القنوات : $countchannels قناة.
";}
if($chatsend=="member"){
$for=$members;
$txt="✅| تم النشر - خاص - للاعضاء فقط 
✬︙عدد الاعضاء : $cunte";}
if($chatsend=="gruops"){
$for=$groups;
$txt="✅| تم النشر - خاص - المجموعات فقط 
✬︙عدد المجموعات : $countgroups";}
if($chatsend=="channel"){
$txt="✅| تم النشر - خاص - القنوات فقط 
✬︙عدد القنوات : $countchannels ";
$for=$channels;
}
### ALKINDI ###
$foor=explode("\n",$for);
if($text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$text
",'reply_to_message_id'=>$message->message_id, 
'parse_mode'=>"markdown", 
]);
for($i=0;$i<count($foor); $i++){
$get=bot('sendMessage',[
'chat_id'=>$foor[$i],
'text'=>"$text
",'parse_mode'=>"$no3send",
'disable_web_page_preview'=>true,
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
}else{
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption",
]);
for($i=0;$i<count($foor); $i++){
$ss=str_replace("send","",$sens);
$get=bot($sens,[
"chat_id"=>$foor[$i],
"$ss"=>"$file_id",
'caption'=>"$caption",
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}}
bot('sendmessage',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*$txt

".$em."كود المنشور: *`$rand`*
*--
",'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🗑| حذف المنشور ",'callback_data'=>"delelink ".$rand ]],
[['text'=>'💬| ارسال رسالة اخرى ','callback_data'=>"post"]],
[['text'=>'🔙 𝙱𝙰𝙲𝙺','callback_data'=>"home"]],
]])
]);
}}
### ALKINDI ###
if($data == "sendtime"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins) and $type=="private"){
file_put_contents("sudo/amr.txt","sendtime");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⏰|حسنا قم بارسال الوقت 

6:00م : تعني الساعة السادسة مساء
6:00ص : تعني الساعة السادسة صباحاً
",'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"❎ الغاء الامر ",'callback_data'=>"sett"]],
]
])
]);
}}
if($data == "sett"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins) and $type=="private"){
unlink("sudo/amr.txt");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"تم إلغاء الامر بنجاح ✅
",'message_id'=>$message_id,
]);
}}
### ALKINDI ###
if ($text and !$data and $amr=="sendtime"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
mkdir("time");
mkdir("time/day");
if(strpos($text,"ص") !== false){
$tim = str_replace("ص","am",$text);
$time = str_replace("ص"," صباحاً",$time);
$time1 = date('H:i',strtotime("$tim"));
}
if(strpos($text,"م") !== false){
$tim = str_replace("م","pm",$text);
$time = str_replace("م"," مساء",$time);
$time1 = date('H:i',strtotime("$tim"));
}
file_put_contents("sudo/time.txt","$time1");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⏰| سيتم النشر في $text 
📟| اختار نوعية الارسال والفئة التي تريد الارسال لها 
",'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"📯 نوع الاذاعة | $no3send",'callback_data'=>"button"]],
[['text'=>"🔂 توجيه",'callback_data'=>"forward"],
['text'=>"🔘 بدون اقتباس",'callback_data'=>"donfor"]],
[['text'=>"Ⓜ️ MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"🖇 HTML",'callback_data'=>"HTML"]],
[['text'=>"📬 ارسال الى | $chatsend",'callback_data'=>"button"]],
[['text'=>"👥 الكل",'callback_data'=>"all"],
['text'=>"👤 الاعضاء",'callback_data'=>"member"]],
[['text'=>"🎛 المجموعات",'callback_data'=>"gruops"],
['text'=>"🖥 القنوات",'callback_data'=>"channel"]],
[['text'=>"💬 ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>"العودة للخلف 🔙",'callback_data'=>"home"]],
]])
]);
}}
### ALKINDI ###
$posttime=file_get_contents("sudo/time.txt");
if($data == "posttime" and $no3send!=null and $chatsend!=null){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
file_put_contents("sudo/amr.txt","sendsendtime");

bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"
⏰| ارسال بالتوقيت 
🕰| في $posttime 
⌛️| نوع الارسال : $no3send
📡| مكان الارسال : $chatsend
",'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"❎ الغاء الامر",'callback_data'=>"sett"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}}
### ALKINDI ###
if($message  and $text !="الاذاعة" and $amr == "sendsendtime" and $no3send=="forward"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
unlink("sudo/amr.txt");
$send["info"]['chatsend']="$chatsend";
$send["info"]['send']="forward";
$send["info"]['method']="ForwardMessage";
$send["info"]['from_chat_id']="$chat_id";
$send["info"]['message_id']=$message->message_id;
file_put_contents("data/send.json", json_encode($send));
bot('ForwardMessage',[
	'chat_id'=>$chat_id,
	'from_chat_id'=>$chat_id,
	'message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔂| سيتم نشر التوجيه👆 
⏰| الساعة $posttime
💾| اضغط حفظ لاتمام العملية
",'message_id'=>$message_id,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'حفظ العملية ✅ ','callback_data'=>"sivetime"]],
]])
]);
}}
### ALKINDI ###
if($message and $text !="الاذاعة" and $amr == "sendsendtime"and $no3send !="forward"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
unlink("sudo/amr.txt");
if($text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$text
",'parse_mode'=>"$no3send",
'disable_web_page_preview'=>true,
]);
$send["info"]['chatsend']="$chatsend";
$send["info"]['send']="text";
$send["info"]['method']="sendMessage";
$send["info"]['text']="$text";
$send["info"]['parse_mode']=$no3send;
file_put_contents("data/send.json", json_encode($send));
}else{
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption",
]);
$send["info"]['chatsend']="$chatsend";
$send["info"]['method']="$sens";
$send["info"]['send']="media";
$send["info"]['file_id']="$file_id";
$send["info"]['media']="$ss";
$send["info"]['caption']="$caption";
$send["info"]['parse_mode']=$no3send;
file_put_contents("data/send.json", json_encode($send));
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔂| سيتم نشر رسالتك👆 
⏰| الساعة $posttime
💾| اضغط حفظ لاتمام العملية
",'message_id'=>$message_id,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- حفظ المنشور 💾' ,'callback_data'=>"sivetime"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
}
if($data == "sivetime"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
unlink("sudo/amr.txt");
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"✅| تم حفظ المنشور التالي 👇 
⏰| سيتم نشره في الساعة $posttime

",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
]);
$tt=str_replace(':','-',$posttime);
$sendjson = json_decode(file_get_contents("data/send.json"),true);
$method=$sendjson["info"]['method'];
$sendd=$sendjson["info"]['send'];
if($sendd=="forward"){
$from=$sendjson["info"]['from_chat_id'];
$msg=$sendjson["info"]['message_id'];
$data =array(
chat_id=>"$from_id",
from_chat_id=>$from,
message_id=>$msg,
);
}
if($sendd=="text"){
$parse=$sendjson["info"]['parse_mode'];
$text=$sendjson["info"]['text'];
$data =array(
chat_id=>"$from_id",
text=>$text,
parse_mode=>$parse,
);
}
if($sendd=="media" ){
$file_id=$sendjson["info"]['file_id'];
$media=$sendjson["info"]['media'];
$caption=$sendjson["info"]['caption'];
$parse=$sendjson["info"]['parse_mode'];
$data =array(
chat_id=>"$from_id",
$media=>$file_id,
caption=>$caption,
parse_mode=>$parse,
);
}
$b = http_build_query($data);
$link="https://api.telegram.org/bot".$token."/".$method."?$b";
file_get_contents($link);
$tt=str_replace(':','-',$posttime);
file_put_contents("time/$tt.json", json_encode($sendjson));
}
}
$timeon = file_get_contents("data/timeon.txt");
if($texttime=="run_watawtime" and is_file("time/".$timeon.".json")){
$rand=rand(11111111,99999999);
$json = json_decode(file_get_contents("time/".$timeon.".json"),true);
$senddd=$json["info"]['send'];
$chatsendd = $json["info"]['chatsend'];
$method=$json["info"]['method'];
if($chatsendd=="all"){
$for=$channels."\n".$groups."\n".$members;
$txt=" تم النشر - عام للجميع";
}
if($chatsendd=="member"){
$for=$members;
$txt=" تم النشر - خاص - للاعضاء فقط
$cunte";
}
if($chatsendd=="gruops"){
$for=$groups;
$txt=" تم النشر - خاص - القروبات فقط
$countgroups";
}
if($chatsendd=="channel"){
$txt=" تم النشر - خاص - القنوات فقط
$countchannels";
$for=$channels;
}
$from=$json["info"]['from_chat_id'];
$msg=$json["info"]['message_id'];
$parse=$json["info"]['parse_mode'];
$text=$json["info"]['text'];
$file_id=$json["info"]['file_id'];
$media=$json["info"]['media'];
$caption=$json["info"]['caption'];
$parse=$json["info"]['parse_mode'];
if($senddd=="forward"){
$foor=explode("\n",$for);
for($i=0;$i<count($foor); $i++){
$data =array(
chat_id=>$foor[$i],
from_chat_id=>$from,
message_id=>$msg,
);
$b = http_build_query($data);
$get=file_get_contents("https://api.telegram.org/bot".$token."/".$method."?$b");
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
}
if($senddd=="text"){
$foor=explode("\n",$for);
for($i=0;$i<count($foor); $i++){
$data =array(
chat_id=>$foor[$i],
text=>$text,
parse_mode=>$parse,
);
$b = http_build_query($data);
$get=file_get_contents("https://api.telegram.org/bot".$token."/".$method."?$b");
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
}
if($senddd=="media" ){
$foor=explode("\n",$for);
for($i=0;$i<count($foor); $i++){
$data =array(
chat_id=>$foor[$i],
$media=>$file_id,
caption=>$caption,
parse_mode=>$parse,
);
$b = http_build_query($data);
$get=file_get_contents("https://api.telegram.org/bot".$token."/".$method."?$b");
$msg_id = $get->result->message_id;
file_put_contents("ms/$rand.txt",$foor[$i]."==". $msg_id."\n", FILE_APPEND);
}
}
bot('sendmessage',[
'chat_id'=>$typee,
'text'=>"⏰ | تم النشر بالتوقيت
$txt

🎫 | كود النشر :- `$rand`
",'parse_mode'=>'markdown',
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- حذف المنشور 🗑",'callback_data'=>"delelink ".$rand]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
### ALKINDI ###
if(preg_match('/^(delelink) (.*)/s',$data)){
$data1 = explode(" ",$data);
$mesg = $data1['1'];
if(is_file("ms/$mesg.txt")){
bot('editmessagetext',[
'message_id' =>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*⚠ هل تريد حذف المنشور الان ..

🎫 | كود النشر :- *`$mesg`**
",'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"-❌ لا ",'callback_data'=>"nodelpost"],['text'=>"- ✅ نعم",'callback_data'=>"delepost ".$mesg]],
]])
]);
}
}
### ALKINDI ###
if(preg_match('/^(delepost) (.*)/s',$data)){
$data1 = explode(" ",$data);
$mesg= $data1['1'];
$getmes_id = explode("\n", file_get_contents("ms/$mesg.txt"));
if(is_file("ms/$mesg.txt")){
bot('editmessagetext',[
'message_id'=>$message_id,
'chat_id'=>$chat_id, 
'text'=>"جار حذف المنشور ...
",'parse_mode' =>"markdown",
]);
for($d=0;$d<count($getmes_id);$d++){
$ex = explode("==", $getmes_id[$d]);
$getmes_id1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getmes_id1");
}
$mesgg= $data1['1'];
bot('editmessagetext',[
'message_id'=>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*✅| تم حذف المنشور بنجاح.

🎫| كود النشر :- *`$mesgg`**
",'parse_mode'=>'markdown',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙 𝙱𝙰𝙲𝙺','callback_data'=>"home"]],
]])
]);
}
}
######
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
if($data && $settingdev["rmz"]=="$from_id" and in_array($from_id,$sudo)){
bot('editmessagetext',[
"message_id"=>$message_id,
"chat_id"=>$chat_id,
"text" => "*تم تحديث رموز السورس $text *
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id
]);
$settingdev["rmz"]="done";
$settingdev["kindi"]="$text";
$settingdev = json_encode($settingdev,128|34|256);
file_put_contents("DEVER.json",$settingdev);
}
elseif($data == "⋄ تعيين رموز السورس" or $data == "تعين رموز السورس"){
if(in_array($from_id,$sudo)){
bot('editmessagetext',[
"message_id"=>$message_id,
"chat_id"=>$chat_id,
"text"=>"*ارسل الرمز الجديد*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
]);
$settingdev["rmz"]="$from_id";
$settingdev = json_encode($settingdev,128|34|256);
file_put_contents("DEVER.json",$settingdev);
}}
elseif($data == "⋄ حذف رموز السورس" or $data == "حذف رموز السورس"){
if(in_array($from_id,$sudo)){
bot('editmessagetext',[
"message_id"=>$message_id,
"chat_id"=>$chat_id,
"text"=>"*تم الحذف*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
]);
unset($settingdev["kindi"]);
$settingdev = json_encode($settingdev,128|34|256);
file_put_contents("DEVER.json",$settingdev);
}}

#===۞𝗞𝗜𝗡𝗗𝗜۞===#
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($data == "فتح البوت" and in_array($from_id,$sudo)){
$infosudo["info"]["kindis"]="مفعل";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"".$em." تم فتح البوت بنجاح 
",'parse_mode' =>"markdown",
"message_id"=>$message_id,
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}

if($data == "قفل البوت" and in_array($from_id,$sudo)){
$infosudo["info"]["kindis"]="معطل";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"".$em." تم قفل البوت بنجاح
",'parse_mode' =>"markdown",
"message_id"=>$message_id,
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}

### ALKINDI ###
if($data == "delchannel" and in_array($from_id, $sudo)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$s ){
$namechannel= $s["name"];
$st= $s["st"];
$userchannel= $s["user"];
if($namechannel!=null){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'callback_data'=>'null']];
if($st=="خاصة"){
$userchannel="null";
}
$keyboard["inline_keyboard"][] =
[['text'=>'🚫 حذف قناة ','callback_data'=>'deletchannel '.$co],['text'=>$st,'callback_data'=>'null']];
}}
### ALKINDI ###
$keyboard["inline_keyboard"][]=[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"".$em."قم بالضغط على خيار الحذف بالاسفل 
",'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>$reply_markup
]);
}
### ALKINDI ###
if(preg_match('/^(deletchannel) (.*)/s', $data)){
$nn = str_replace('deletchannel ',"",$data);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"✅| تم حذف القناة بنجاح 
-id $nn
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
unset($infosudo["info"]["channel"][$nn]);
file_put_contents("sudo.json", json_encode($infosudo));
}
#اضافة قنوات 
if($data == "addchannel"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$count=count($orothe);
if($count<4){
$infosudo["info"]["amr"]="addchannel";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"
".$em."مرحبا بك عزيزي↯
".$em."أرسل معرف القناة العامة الان
".$em."اذكانت خاصة قم بتوجية منشور .
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❎ | الغاء الامر",'callback_data'=>"home"]],
]
])
]);
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🚫 لا يمكنك اضافة اكثر من  3 قنوات 
--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
unlink("sudo.json");
}}
### ALKINDI ###
if($text  and $text !="/start" and $sudoamr=="addchannel" and in_array($from_id,$sudo) and !$message->forward_from_chat ){
$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$text"))->result->id;
$idchan=$ch_id;
if($ch_id != null){
$checkadmin = getChatstats($text,$tokens);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$text"))->result->title;
$infosudo["info"]["channel"][$ch_id]["st"]="عامة";
$infosudo["info"]["channel"][$ch_id]["user"]="$text";
$infosudo["info"]["channel"][$ch_id]["name"]="$namechannel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅| تم إضافة القناة بنجاح.
*info channel 
".$em."name : $namechannel
".$em."id : *`$ch_id`*
".$em."user : $text *
",'parse_mode' =>"markdown",
'disable_web_page_preview'=> true,'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- إضافة قناة آخرى",'callback_data'=>"addchannel"]],
 [['text'=>"- العودة والخروج",'callback_data'=>"home"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚠ المعذرة البوت ليس ادمن في القناة 
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- إعادة المحاولة",'callback_data'=>"addchannel"]],
 [['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚠ المعذرة لم يتم إضافة القناة او لايوجد معرف /n $text 
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($message->forward_from_chat and $sudoamr=="addchannel" and in_array($from_id, $sudo)){
$id_channel= $message->forward_from_chat->id;
if($id_channel != null){
$checkadmin = getChatstats($id_channel,$tokens);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$id_channel"))->result->title;
$infosudo["info"]["channel_id"]="$id_channel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫|تم حفظ معلومات القناة بنجاح.

*info channel 
".$em."name : $namechannel
".$em."id : *`$id_channel`*
".$em."user : • قناة خاصة •*

".$em." قم بارسال الرابط الخاص بالقناة الان
",'parse_mode'=>"MarkDown",'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"❎ | الغاء الامر",'callback_data'=>"home"]],
 ]])
 ]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚠ عذرا البوت ليس ادمن في القناة 
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Ⓜ️ | اعادة المحاولة",'callback_data'=>"addchannel"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);}}
$infosudo["info"]["amr"]="channel_id";
file_put_contents("sudo.json", json_encode($infosudo));
}
$channel_id=$infosudo["info"]["channel_id"];
if($text  and $text !="/start" and $sudoamr=="channel_id" and in_array($from_id,$sudo) and !$message->forward_from_chat ){
$checkadmin = getChatstats($channel_id,$tokens);
### ALKINDI ###
if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$tokens/getChat?chat_id=$channel_id"))->result->title;
$infosudo["info"]["channel"][$channel_id]["st"]="خاصة";
$infosudo["info"]["channel"][$channel_id]["user"]="$text";
$infosudo["info"]["channel"][$channel_id]["name"]="$namechannel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫| تم حفظ رابط القناة بنجاح.

*info channel 
".$em."name : $namechannel
".$em."id : *`$channel_id`*
".$em."link : $text**

👾| تأكد ان البوت أدمن في القناة
",'parse_mode' =>"markdown",
'disable_web_page_preview'=> true,'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"📡| اضافة قناة اخرى",'callback_data'=>"addchannel"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚠ عذرا البوت ليس ادمن في القناة 
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"Ⓜ️ | اعادة المحاولة",'callback_data'=>"addchannel"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
 ]])
]);
}
$infosudo["info"]["amr"]="null";
$infosudo["info"]["channel_id"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
# عرض القنوات
if($data == "viwechannel" and in_array($from_id, $sudo)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co ){
$namechannel= $co["name"];
$st= $co["st"];
$userchannel= $co["user"];
if($namechannel!=null){
$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'callback_data'=>'null']];
if($st=="خاصة"){
$userchannel="null";
}
$keyboard["inline_keyboard"][] =
[['text'=>$userchannel,'callback_data'=>'null'],['text'=>$st,'callback_data'=>'null']];
}}
$keyboard["inline_keyboard"][] = [['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"📋| قائمة القنوات المشتركة
",'parse_mode'=>"MarkDown",
'message_id'=>$message_id,
'reply_markup'=>$reply_markup
]);
}
#كليشة الاشتراك
if($data == "klsh"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
$infosudo["info"]["klish_sil"]="$text";
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"✅ تم إلغاء الامر بنجاح
",'message_id'=>$message_id,
]);}}

if($data == "klish_sil"){
$infosudo["info"]["amr"]="klish_sil";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"*
".$em."قم بارسال كليشة الاشتراك الان...
*--
",'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء الامر ❌",'callback_data'=>"klsh"]],
]
])
]);
}
if($text and $text !="/start" and $sudoamr=="klish_sil" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*✅| تم حفظ كليشة الاشتراك الاجباري 
- الكليشة : 
$text
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["klish_sil"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}

####### التوجيه ####
if($message and $fwrmember=="مفعل"){
bot('ForwardMessage',[
 'chat_id'=>$kindev,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);
}
####start##
@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$sudoamr= $infosudo["info"]["amr"];
if($data == "welc"){
$text = str_replace('{الاسم}',$name,$text);
$infosudo["info"]["amr"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*
".$em."قم بارسال نص كليشة الترحيب /start
لاظهار الاسم الاسم
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء الامر ❌",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="start" and in_array($from_id,$sudo)){
$text = str_replace('{الاسم}',$name,$text);
bot('sendmessage',[
'message_id' =>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*✅| تم حفظ كليشة الترحيب /start 
- الكليشة : 
$text 
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["start"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
#####info######
if($data == "infobot"){
$text = str_replace('{الاسم}',$name,$text);
$infosudo["info"]["amr"]="klis_info";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id, 
'text'=>"*- قم بارسال نص كليشة نبذة عن البوت
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء الامر ❌",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="klis_info" and in_array($from_id,$sudo)){
$text = str_replace('{الاسم}',$name,$text);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*✅| تم حفظ كليشة نبذة عن البوت .
- الكليشة : 
$text 
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["klish_info"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
#######
if($data == "silk"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$skil=$infosudo["info"]["silk"];
if($skil=="مفعل" or $text == "offff"){
$infosudo["info"]["silk"]="معطل";
}
if($skil=="معطل" or $text == "onnnn"){
$infosudo["info"]["silk"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "allch"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$allch=$infosudo["info"]["allch"];
if($allch=="مفردة"){
$infosudo["info"]["allch"]="مجموعة";
}
if($allch=="مجموعة"){
$infosudo["info"]["allch"]="مفردة";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
########
$memberi = explode("\n",file_get_contents("sudo/member.txt"));
$cuntei = count($memberi)-1;
$getben = explode("\n",file_get_contents("data/ban.txt"));
$countben = count($getben)-1;
if($data == 'ban'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عدد المحظورين' .$countben,
 'show_alert'=>true
 ]);      
}
if($data == "baan"){
$infosudo["info"]["amr"]="ban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"*- قم بارسال أيدي العضو لحظره
*--
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
}
if($text and $text !="/start" and $sudoamr=="ban" and in_array($from_id,$sudo) and is_numeric($text)){
if(!in_array($text,$ban)){
member($text,'ban');
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حظر العضو بنجاح 
$text
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"❌ لقد قام الادمن بحظرك من استخدام البوت",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 العضو محظور مسبقاً",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
#الغاء الحظر
if($data == "unban"){
$infosudo["info"]["amr"]="unban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال أيدي العضو للإلغاء الحظر عنه
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="unban" and in_array($from_id,$sudo) and is_numeric($text)){
if(in_array($text,$ban)){
$memberjson = json_decode(file_get_contents("members.json"),true);
$ban=$memberjson["info"]["ban"];

$index = array_search($text, $ban);
unset($memberjson["info"]["ban"][$index]);
$memberjson["info"]["ban"]=array_values($memberjson["info"]["ban"]);
file_put_contents("members.json", json_encode($memberjson));
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم الغاء حظر العضو بنجاح 
$text
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"✅ لقد قام الادمن بالغاء الحظر عنك  .",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 العضو ليسِ محظور مسبقاً",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
$count_ban = count($ban);
if($data == "unbanall"){
if($countban > 0){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم مسح قائمة المحظورين بنجاح 
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'message_id' =>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
}else{
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"🚫 ليس لديك اعضاء محظورين",
'show_alert'=>true
]);}}
##########
if($data == "typee" and in_array($from_id,$sudo)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- تم تفعيل استقبال الرسائل خاص
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙 𝙱𝙰𝙲𝙺 ','callback_data'=>"home"]],
]])
]);
file_put_contents("sudo/typee1.txt","$from_id");
}
if($data == "supergruope" and in_array($from_id,$sudo)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
حسننا قم بالذهاب الى جروب الاستقبال 
ثم ارسل الامر. /setastgbal
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
file_put_contents("sudo/amr.txt","set");
}
### ALKINDI ###
if($text=="/setastgbal" and $amr == "set" and in_array($from_id, $sudo)){
file_put_contents("sudo/amr.txt","");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>"*
".$em."تم تحديد هذا الجروب ليكون جروبا للاستقبال 
*---
",'parse_mode' =>"markdown",
'disable_web_page_preview'=>true ,
]);
file_put_contents("sudo/typee1.txt","$chat_id");
}
### ALKINDI ###
if($text == "تواقيت" and in_array($from_id,$sudo)){
$file = scandir('time/');
$s=0;$s1=0;
for($l=2;$l<count($file);$l++){
if(file_exists("time/".$file[$l]) and strpos($file[$l],".json") !== false){

$s1=1;
$tim=file_get_contents("time/".$file[$l]);
$time=str_replace(".json","",$file[$l]);
$del=str_replace("-","_",str_replace(".json","",$file[$l]));
$delet="/delete_".$del;
$time2=str_replace("-",":",$time);
$ex=explode(":",$time2);
$sa=$ex['0'];
$da=$ex['1'];
if($sa >= 13){
$saa=$sa-12;
$time3=$saa.":".$da." مساء";
}
if($sa == 12){
$saa=$sa;
$time3=$saa.":".$da." مساء";
}
if($sa < 12){
$time3=$time2." صباحاً";
}
if($del!=null){
$usch1=$usch1."\n⏰ $time3 \n🗑 $delet";
}
}
}
########
if($s1==0)
{$usch1="⏰| لايوجد تواقيت ";}
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$usch1
",'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" 🗑حذف التوقيت ...🗑",'callback_data'=>"del_time ".$text]],
[['text'=>" 🗑حذف التواقيت ...🗑",'callback_data'=>"del_time"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"admin"]],
[['text'=>'🔙 𝙱𝙰𝙲𝙺 ','callback_data'=>"home"]],
]])
]);
}
### ALKINDI ###
if(stristr($text,"/delete_") and in_array($from_id, $sudo)){
$text=str_replace("/delete_","",$text);
$text=str_replace("@".$userbot,"",$text);
$text=str_replace("_","-",$text);
$sendjson = json_decode(file_get_contents("time/$text.json"),true);
$method=$sendjson["info"]['method'];
$sendd=$sendjson["info"]['send'];
if($sendd=="forward"){
$from=$sendjson["info"]['from_chat_id'];
$msg=$sendjson["info"]['message_id'];
$data =array(
chat_id=>"$from_id",
from_chat_id=>$from,
message_id=>$msg,
);
}
if($sendd=="text"){
$parse=$sendjson["info"]['parse_mode'];
$text=$sendjson["info"]['text'];
$data =array(
chat_id=>"$from_id",
text=>$text,
parse_mode=>$parse,
);
}
if($sendd=="media"){
$file_id=$sendjson["info"]['file_id'];
$media=$sendjson["info"]['media'];
$caption=$sendjson["info"]['caption'];
$parse=$sendjson["info"]['parse_mode'];
$data =array(
chat_id=>"$from_id",
$media=>$file_id,
caption=>$caption,
parse_mode=>$parse,
);
}
$b = http_build_query($data);
$link="https://api.telegram.org/bot".$token."/".$method."?$b";
file_get_contents($link);
bot('SendMessage', [
'chat_id' => $chat_id,
'text'=>" ⏰ هذا هو المنشور 👆
قم بالضغط على حذف للتاكيد 
",'parse_mode'=>"html",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" 🗑حذف التوقيت ...🗑",'callback_data'=>"del_time ".$text]],
[['text'=>" 🗑حذف التواقيت ...🗑",'callback_data'=>"del_time"]],
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"admin"]]
]])]);
}
if(preg_match('/^(del_time) (.*)/s',$data) and in_array($from_id, $sudo)){
$data1 = explode(" ",$data);
$time1 = $data1['1'];
unlink("time/".$data1['1'].".json");
bot('editmessagetext', [
'chat_id' => $chat_id,
'text'=>"✅| تم حذف التوقيت بنجاح
$time1
",'message_id'=>$message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙 𝙱𝙰𝙲𝙺 ','callback_data'=>"home"]],
]])
]);
}
if($text == "❎ | الغاء الامر" or $data == "del_time"and $sting =="sting" and in_array($from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ | تم حذف التواقيت " 
]);
unlink("time/".$data1['1'].".json");
} 
### ALKINDI ###
$get_ban=file_get_contents('sudo/ban.txt');
$ban =explode("\n",$get_ban);
if($text=="ghkk" or $text == "sdfh" and in_array($from_id,$sudo) and $type=="private"){
$rand=rand(111111,999999);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*".$em."اهلا بك عزيزي المطور 
".$em." لرفع اي شخص ادمن قم بارسال 
".$em." هذا الرمز له رمز الترقية ⋙ *`$rand`*
*---
",'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]
])
]);
file_put_contents("data/trgih.txt","$rand");
}
### ALKINDI ###
$adminall=explode("\n",file_get_contents("sudo/admin.txt"));
$amrtr=file_get_contents("data/$from_id.txt");
if($text=="ارفعني" and $from_id!=$kindev and !in_array($from_id, $sudo) and $type=="private"){
if(!in_array($from_id, $ban)){
if(!in_array($from_id, $adminall)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
".$em." اهلا بك عزيزي الكريم
".$em." اذا كنت تريد ان يقوم البوت برفعك ادمن 
".$em." قم بارسال رمز الترقيه المكون من 6 ارقام للموافقة
*---
",'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
file_put_contents("data/$from_id.txt","yes");
}else{
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"⌯ لقد تمت ترقيتك بالفعل مسبقا ✅
",'reply_to_message_id'=>$message_id,
]);
}
}else{
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"⌯ المعذرة لا استطيع ترقيتك لانك محظور من قبل مالك البوت 
",'reply_to_message_id'=>$message_id,
]);
}}
### ALKINDI ###
$randtrg=file_get_contents("data/trgih.txt");
if($text and !$data and $amrtr == "yes" and $type=="private" ){
unlink("data/$from_id.txt");
if($text==$randtrg){
if(!in_array($from_id, $admins)){
file_put_contents("sudo/admin.txt","$from_id\n",FILE_APPEND);
}
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"⌯ لقد تمت ترقيتك بنجاح عزيزي ✅
",
]);
bot('sendmessage',[
	'chat_id'=>$yppee,
'text'=>"⌯ لقد تمت ترقية العضو للادمنية
 - [$name](tg://user?id=$from_id)
 وتم الغاء رمز الترقية السابق 
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
]);
unlink("data/trgih.txt");
}else{
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"⌯ عذرا عزيزي رمز الترقية خاطئ ❎
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
]);
}}
if($text=="الادمنية" or $text == "الادمنيه" and in_array($from_id,$sudo) and $type=="private"){
unlink("sudo/adminsinfo.txt");
for($h=0;$h<count($adminall);$h++){
if($adminall[$h] != ""){
$admin = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$adminall[$h]"))->result;
$from=$adminall[$h];
$name= $admin->first_name;
$admins="⌯ اسم الادمن ⌯ [$name](tg://user?id=$from)\n⌯ ايدي الادمن ⌯`$from`";
file_put_contents("sudo/adminsinfo.txt","$admins\n",FILE_APPEND);
}}
$adminsinfo=file_get_contents("sudo/adminsinfo.txt");
if(!$adminsinfo){
$adminsinfo="لايوجد ادمنية الان";
}elseif($adminsinfo){
$adminsinfo="$adminsinfo";
}
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"".$em."هذة هي قائمة الادمنية 
• ┉ • ┉ • ┉ • ┉ • ┉ •
$adminsinfo
",'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
###########
if($data == "admins" and in_array($from_id,$sudo)){
unlink("sudo/adminsinfo.txt");
for($h=0;$h<count($adminall);$h++){
if($adminall[$h] != ""){
$admin = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$adminall[$h]"))->result;
$from=$adminall[$h];
$name= $admin->first_name;
$admins="⌯ اسم الادمن ⌯ [$name](tg://user?id=$from)\n⌯ ايدي الادمن ⌯`$from`";
file_put_contents("sudo/adminsinfo.txt","$admins\n",FILE_APPEND);
}}
$adminsinfo=file_get_contents("sudo/adminsinfo.txt");
if(!$adminsinfo){
$adminsinfo="لايوجد ادمنية الان";
}elseif($adminsinfo){
$adminsinfo="$adminsinfo";
}
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id, 
'text'=>"هذة هي قائمة الادمنية 
$adminsinfo
ـ• ┉ • ┉ • ┉ • ┉ • ┉ • 
- لإضافة ادمن جديد للبوت ارسل الامر ترقية
- سيقوم البوت بجلب كود ارسله للعضو المراد رفعه
- العضو يرسل الامر ارفعني ثم يرسل الكود الذي اعطيته
- وهكذا تم منح العضو صلاحية ادمن في البوت بطريقة صحيحة
",'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🔙 𝙱𝙰𝙲𝙺 ' ,'callback_data'=>"home"]],
]
])
]);
}
### ALKINDI ###
if(preg_match('/^(تنزيل) (.*)/s',$text) and in_array($from_id,$sudo)  and $type=="private"){
$textt = str_replace("تنزيل ","",$text);
$strlen=strlen($textt);
if($strlen < 12){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'".$em."تم تنزيل العضو من الادمنية ',
'reply_to_message_id'=>$message_id
]);
bot('sendMessage',[
'chat_id'=>$textt,
'text'=>'".$em."تم تنزيل العضو من الادمنية ',
]);
$bin=file_get_contents('sudo/admin.txt');
$str = str_replace($textt."\n", '' ,$bin);
file_put_contents('sudo/admin.txt', $str);
}}

######
if($data == "kindis"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$kindis=$infosudo["info"]["kindis"];
if($kindis=="مفعل"){
$infosudo["info"]["kindis"]="معطل";
}
if($kindis=="معطل"){
$infosudo["info"]["kindis"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
#######
if($data == "fwrmember"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
if($fwrmember=="مفعل"){
$infosudo["info"]["fwrmember"]="معطل";
}
if($fwrmember=="معطل"){
$infosudo["info"]["fwrmember"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
#########
if($data == "tnbih"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$tnbih=$infosudo["info"]["tnbih"];
if($tnbih=="مفعل"){
$infosudo["info"]["tnbih"]="معطل";
}
if($tnbih=="معطل"){
$infosudo["info"]["tnbih"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
#########
if($data == "silk"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$skil=$infosudo["info"]["silk"];
if($skil=="مفعل"){
$infosudo["info"]["silk"]="معطل";
}
if($skil=="معطل"){
$infosudo["info"]["silk"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
### ALKINDI ###
function KINDEZip($KINDEZip1, $KINDEZip2){
$KINDEZip4 = realpath($KINDEZip1);
$KINDEZip = new ZipArchive();
$KINDEZip->open($KINDEZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$KINDEZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($KINDEZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($KINDEZip3 as $KINDEZip5 => $KINDEZip6){

if(!$KINDEZip6->isDir()){
$KINDEZip7 = $KINDEZip6->getRealPath();
$KINDEZip8 = substr($KINDEZip7, strlen($KINDEZip4) + 1);
$KINDEZip->addFile($KINDEZip7, $KINDEZip8);
}}
$KINDEZip->close();
}
# كود حجم الملف لـ @MrDGSY #
function KINDEZip1($KINDEZip9, $KINDEZip10 = 2){
$KINDEZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$KINDEZip12=floor((strlen($KINDEZip9) - 1) / 3);
return sprintf("%.{$KINDEZip10}f", $KINDEZip9 / pow(1024, $KINDEZip12)) . @$KINDEZip11[$KINDEZip12];
} 
### ALKINDI ###
if($text == "نسخة إحتياطية" or $text == "نسخة" or $text == "/kindi" or $text == "/cope" or $data== "nnn" and in_array($from_id,$sudo)){
$NSSAR = "$kindev"; //ايديك
date_default_timezone_set("Asia/Damascus");
$time = date("{h-i-s}");
KINDEZip('./', "Backup-$time.zip");
bot('sendmessage',[
'chat_id'=>$from_id,
'text'=>"جار انشاء النسخة الاحتياطية",
]);
bot('senddocument',[
'chat_id'=>$from_id,
'document'=>new CURLFile("Backup-$time.zip"),
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
File size : ".KINDEZip1(filesize("Backup-$time.zip"))." 🏷",
]);
unlink("Backup-$time.zip");
} 
### ALKINDI ###
if($text == "تهيئة" || $text == "اعادة" || $text == "تصفية" || $text == "فرمته" and in_array($from_id,$sudo)){
bot('sendmessage',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*
".$em."مرحبا عزيزي المطور
".$em."سيتم اعادة ضبط كل معلومات البوت
".$em."سيتم فقد كل التخزين السابق للبوت تابع ↯
*--
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- ✅ | نعم","callback_data"=>"dell"],["text"=>"- ❎ | لا","callback_data"=>"home"]],
]])
]);   
}
if($data == "اعادة الضبط" and in_array($from_id,$sudo)){
#bot('sendmessage',[
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*
".$em."مرحبا عزيزي المطور
".$em."سيتم اعادة ضبط كل معلومات البوت
".$em."سيتم فقد كل التخزين السابق للبوت تابع ↯
*--
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- ✅ | نعم","callback_data"=>"dell"],["text"=>"- ❎ | لا","callback_data"=>"home"]],
]])
]);   
}
if($data == "delbot" and in_array($from_id,$sudo)){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
".$em."مرحبا عزيزي المطور
".$em."سيتم اعادة ضبط كل معلومات البوت
".$em."سيتم فقد بيانات كل التخزين السابق للبوت..*
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- ✅ نعم","callback_data"=>"dell"],["text"=>"- ❎ لا","callback_data"=>"home"]],
]])
]);   
}
### kindi3 ###
if($data == "dell" and in_array($from_id,$sudo)){
 bot('editMessageText',[
 'chat_id'=>$chat_id,
'message_id'=>$message_id ,
 'text'=>"*• بدء التحديث الان ...*
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message->message_id, 
]);
unlink("amr.txt");
unlink("sudo/amr.txt");
unlink("sudo/amrs.txt");
unlink("sudo/infobot.txt");
unlink("sudo/start.txt");
unlink("amr.txt","yes");
unlink("sudo/member.txt");
unlink("sudo/groups.txt");
unlink("sudo/channels.txt");

unlink("sudo/admin.txt");
unlink("data/sudo.json");
unlink("sudo/tanbih.txt");
unlink("sudo/estgbal.txt");
unlink("sudo.json");
unlink("data.json");

unlink("sudo/ban.txt");
unlink("sudo/typee1.txt");
unlink("from_id.json");
unlink("tmoil.json");
unlink("ref.json");

unlink("data/timeon.txt","$now_date");
unlink("time/day/$todaydate.txt");
unlink("time/".$now_date.".json");
unlink("sudo/member.txt");

unlink("tv.txt");
unlink("ch.txt");

bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id ,
'text'=>"".$em."مرحبا بك مطوري ؛ 
".$em."تم اعادة الضبط بنجاح تم التحديث ؛
".$em."تم تصفية البوت وحذف التخزين من السيرفر ؛ 
",'parse_mode'=>"markdown",
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"🔙 𝙱𝙰𝙲𝙺","callback_data"=>"home"]],
]])
]);   
}
# ALKINDI #
$datacount = json_decode(file_get_contents("data.json"),true);
if(!file_exists("data.json")){
# $put = [];
$datacount["info"]["number"]=2000000;
file_put_contents("data.json", json_encode($datacount));
}
$countdata=$datacount["info"]["number"];
if($text=="test" and in_array($from_id,$sudo)){
if($countdata<= 2000010){
$time = date("h:i:s");
$count=$countdata+1;
bot('sendmessage',[
'chat_id'=>$from_id,
'text'=>" ✅ تم الاتصال 
-count : $count
- time : $time
",
]);
$datacount["info"]["number"]=$count;
file_put_contents("data.json", json_encode($datacount));
}else{
$time = date("h:i:s");
$count=$countdata;
bot('sendmessage',[
'chat_id'=>$from_id,
'text'=>" ℹ تم الوصول للعدد النهائي سيتم اعادة العدد للرقم الرئيسي 
 
-count : $count
- time : $time
",
]);
$datacount["info"]["number"]=2000000;
file_put_contents("data.json", json_encode($datacount));
}} 
 ### ALKINDI ###
if($text == "اصدار الاستضافه" or $text == "الاصدار" or $text == "اصدار" and in_array($from_id,$sudo)) {
  $ver = phpversion();  
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
• ᴘʜᴘ ᴠᴇʀ : <code>$ver</code>
",'parse_mode'=>"HTML",'reply_to_message_id'=>$message_id,
  ]); 
  }
### ALKINDI ###
$fromjson = json_decode(file_get_contents("from_id.json"),true);
if($text=="/start#" and $type=="private"){
$name = $message->from->first_name;
$start = str_replace('الاسم',$name,$start);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$start
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- معلومات البوت 🕵','callback_data'=>'info']],
[['text'=>"- تابع قناة المطور 📡.",'url'=>"t.me/$chi"]],
[['text'=>'- المطور 👨‍✈️.','url'=>"t.me/$buy"]],
]])]);}
### ALKINDI ###
if($data=="back#"){
$coins=coins($from_id,"null",$coo);
$fromjson["info"][$from_id]["amr"]="non";
$start = str_replace('الاسم',$name,$start);
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"$start
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- معلومات البوت 🕵 ','callback_data'=>'info']],
[['text'=>"- تابع قناة المطور 📡.",'url'=>"t.me/$chi"]],
[['text'=>'- المطور 👨‍✈️.','url'=>"t.me/$buy"]],
]])]);}
  ///۞𝗞𝗜𝗡𝗗𝗜۞///
if($data=='info#'){
$coins=coins($from_id,"null",$coo);
$fromjson["info"][$from_id]["amr"]="non";
$name = $message->from->first_name;
$klish_info=str_replace('الاسم',$name,$klish_info);
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>" 
$klish_info
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- تابع قناة المطور 📡.",'url'=>"t.me/$chi"]],
[['text'=>'🔙 𝙱𝙰𝙲𝙺','callback_data'=>'back']],
]])]);}

#===۞𝗞𝗜𝗡𝗗𝗜۞===#
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;

$json = json_decode(file_get_contents("save.txt"),true);
$getjson = json_decode(file_get_contents("save.txt"));

$user = $getjson->$id;
$save = $user->save;

$sour = array("عودة","الفاتحة","البقرة","ال عمران","النساء","المائدة","الأنعام","الأعراف","الأنفال","التوبة","يونس","هود","يوسف","الرعد","ابراهيم","الحجر","النحل","الإسراء","الكهف","مريم","طه","الأنبياء","الحج","المؤمنون","النور","الفرقان","الشعراء","النمل","القصص","العنكبوت","الروم","لقمان","السجدة","الأحزاب","سبإ","فاطر","يس","الصافات","ص","الزمر","غافر","فصلت","الشورى","الزخرف","الدخان","الجاثية","الأحقاف","محمد","الفتح","الحجرات","ق","الذاريات","الطور","النجم","القمر","الرحمن","الواقعة","الحديد","المجادلة","الحشر","الممتحنة","الصف","الجمعة","المنافقون","التغابن","الطلاق","التحريم","الملك","القلم","الحاقة","المعارج","نوح","الجن","المزمل","المدثر","القيامة","الانسان","المرسلات","النبإ","النازعات","عبس","التكوير","الإنفطار","المطففين","الإنشقاق","البروج","الطارق","الأعلى","الغاشية","الفجر","البلد","الشمس","الليل","الضحى","الشرح","التين","العلق","القدر","البينة","الزلزلة","العاديات","القارعة","التكاثر","العصر","الهمزة","الفيل","قريش","الماعون","الكوثر","الكافرون","النصر","المسد","الإخلاص","الفلق","الناس");

//الباحث النصي
$write = array(
  "بحث",
  "الميسر",
  "الجلالين",
  "عودة",
  );
$writeafter = array(
  "search",
  "tafser2",
  "tafser1",
  "english"
  );
$writemessage = array(
  "حسنا ، أرسل ما تذكره من الاية ليتم البحث عنها",
  "حسنا ، أرسل ما تذكره من الاية ليتم تفسيرها -تفسير الميسر-",
  "حسنا ، أرسل ما تذكره من الاية ليتم تفسيرها -تفسير الجلالين-",
  "حسنا ، أرسل ما تذكره من الاية ليتم شرحها باللغة الإنجليزية",
  );
$writesave = str_replace($write, $writeafter, $text);
$writemessage = str_replace($write, $writemessage, $text);


//الباحث الصوتي

$sound = array(
  "عبد الباسط عبد الصمد",
  "عبد الله المطرود",
  "عبد الرحمن العوسي",
  "أبو بكر الشاطري",
  "أحمد العجمي",
  "فارس عباد",
  "محمود خليل الحصري",
  "ماهر المعيقلي",
  "محمد صديق المنشاوي",
  "عودة",
  );

$soundafter = array(
  "abdul_basit",
  "al_matrood",
  "al_ausi",
  "al_shatri",
  "al_ajmi",
  "abbad",
  "al_husori",
  "al_mueaqly",
  "sddeq",
  );
  
$soundsave = str_replace($sound, $soundafter, $text);

//start
if($text == "البحث" or $text == "اوامر"){
  $json ["$id"]["save"] = "start";
  file_put_contents("save.txt",json_encode($json));
  bot("sendMessage",[
    "chat_id"=>$chat_id,
    "text"=>"*🗳 اليك قائمة قسم البحث :
—————*
۝  بحث ~ للبحث عن اية
۝  الميسر ~ لتفسير اية
۝  الجلالين ~ لتفسير اية
۝  بحث صوتي ~ للبحث الصوتي 
۝  عودة ~ للرجوع الى القائمة 
*۝  اللهم صل على محمدا وال محمد ♡*
*—————*",'parse_mode'=>'markdown',
    "reply_to_message_id"=>$message_id,
  ]);
  return;
}

if(in_array($text,$write)){
  $json ["$id"]["save"] = "$writesave";
  file_put_contents("save.txt",json_encode($json));
  bot("sendMessage",[
    "chat_id"=>$chat_id,
    "text"=>$writemessage,
    "reply_to_message_id"=>$message_id,
  ]);
  return;
}

if(in_array($save,$writeafter)){
  $get = json_decode(file_get_contents("https://api-quran.cf/quransql/index.php?text=".urlencode($text)."&type=".$save))->result;
  $count = count($get);
  if($count > 10)
    $l = 10;
  else
    $l = $count;
  for( $i=0; $i <= $l; $i++){
    bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>$get[$i],
'reply_markup'=>json_encode([
'remove_keyboard'=>true
])
    ]);
$json["$id"]["save"] = "done";
  file_put_contents("save.txt",json_encode($json));
  }
}



//أوامر الباحث الصوتي


if($text == "بحث صوتي"){
  foreach($sound as $key){
    $keyboard[] = [$key];
  }
  bot("sendMessage",[
    "chat_id"=>$chat_id,
    "text"=>"
حسنا ، اختر أحد القراء
    ",
    "reply_to_message_id"=>$message_id,
    "reply_markup"=>json_encode([
      'keyboard'=>$keyboard
    ])
  ]);
}
if($text){
if(in_array($text,$sound)){
  $json["$id"]["save"] = "$soundsave";
  file_put_contents("save.txt",json_encode($json));
  foreach($sour as $key){
    $keyboard[] = [$key];
  }
  bot("sendMessage",[
    "chat_id"=>$chat_id,
    "text"=>"تم إختيار القارئ ، قم الان بكتابة اسم السورة أو قم بالإختيار من الكيبورد في الاسفل..",
    "reply_to_message_id"=>$message_id,
    "reply_markup"=>json_encode([
      'keyboard'=>$keyboard
    ])
  ]);
}
}
if($text){
if(in_array($save,$soundafter)){
  $get = json_decode(file_get_contents("https://api-quran.cf/quransql/mp3.php?text=".urlencode($text)."&reader=".$save));
  bot('sendaudio',[
    'chat_id' => $chat_id,
    'audio' => $get->url,
    'caption'=>$get->caption,
    "reply_to_message_id"=>$message_id,
'reply_markup'=>json_encode([
'remove_keyboard'=>true
])
 ]);
  $json["$id"]["save"] = "done";
  file_put_contents("save.txt",json_encode($json));
}
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$motaz = $message->text;
$lmotaz = $update->callback_query->message->message_id;
$aldrsy = $message->chat->id;
$lslhb = $update->callback_query->data;
$sand = $update->callback_query->message->chat->id;
$PIIIIli = file_get_contents("https://hmsbots.aba.vg/apieati/ApiAthkar.php");

if($motaz == "ذكر"){
bot('sendmessage', [
'chat_id' => $aldrsy,
'text' => $PIIIIli,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[[ 'text' => 'ذكر اخر',callback_data => 'atkar' ]],
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - قناة عالم البرمجه ♥", 'url' =>"https://t.me/botatiiii"]],
]])]);}

if($lslhb == "atkar"){
bot('EditMessageText',[
'chat_id'=>$sand,
'message_id'=>$lmotaz,
'text' => $PIIIIli, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[[ 'text' => 'ذكر اخر',callback_data => 'atkar' ]],
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - قناة عالم البرمجه ♥", 'url' =>"https://t.me/botatiiii"]],
]])]);}
if($text == "تلاو" or $text == "تلاوات" or $text == "تلاوة"){
bot("sendvoice",[
"chat_id"=>$chat_id,
"voice"=>"https://t.me/ALMORTAGELRSK/" . rand(7,276),
"caption"=>" « صلي على سيدنا محمد ﷺ »", 
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - قناة عالم البرمجه ♥", 'url' =>"https://t.me/botatiiii"]],
]])]);}
//--------------------@Almortagel_12--------------------//
if($text == "ايه" or $text == "القران" or $text == "قران"){
bot("sendvoice",[
"chat_id"=>$chat_id,
"voice"=>"https://t.me/QuranTV4/" . rand(1,115),
"caption"=>" « صلي على سيدنا محمد ﷺ »", 
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - قناة عالم البرمجه ♥", 'url' =>"https://t.me/botatiiii"]],
]])]);}
//------------------@Almortagel_12------------------------//
if($text == "سورة" or $text == "سوره" or $text == "س"){
bot("sendvoice",[
"chat_id"=>$chat_id,
"voice"=>"https://t.me/QuranTV4/" . rand(1,114),
"caption"=>"[✧ - نسألكم الدعاء 💙](https://t.me/AlmortagelTech)", 
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - قناة عالم البرمجه ♥", 'url' =>"https://t.me/botatiiii"]],
]])]);}
if($text == "عبدالباسط" or $text == "عبدالباسط عبدالصمد"){
bot("sendvoice",[
"chat_id"=>$chat_id,
"voice"=>"https://t.me/telawatnader/" . rand(140,264),
"caption"=>"[✧ - نسألكم الدعاء 💙](https://t.me/AlmortagelTech)", 
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - قناة عالم البرمجه ♥", 'url' =>"https://t.me/botatiiii"]],
]])]);}
if($text == "مقطع" or $text == "مقطع ديني" or $text == "م"){
  bot("sendvideo",[
  "chat_id"=>$chat_id,
  "video"=>"https://t.me/iLo0oJi/" . rand(7,500),
  "caption"=>"في كل مرة ترسل كلمة مقطع أو مقطع ديني البوت يرسل لك مقطع جديد",
  'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
      'inline_keyboard'=>[
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - قناة عالم البرمجه ♥", 'url' =>"https://t.me/botatiiii"]],
]])]);}
if($text=="مصحف" or $text == "صفحة"){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"https://t.me/lA_l_Al/162",
'caption'=>"✧ - مرحبا بكم اخوتي في قسم صفحات القران ارسل رقم الصفحه باللغه الانكليزية (1 , 2 , 3 , الخ) نسألكم الدعاء ♥
",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],
[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - القرآن الكريم ♥", 'url' =>"https://t.me/AlmortagelTech"]],
]])
]);
}
if($text < 10){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://www.daily-quran.com/static/pages/page-00$text.jpg",
'caption'=>"✧ - تم جلب الصفحة نسألكم الدعاء ♥",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],
[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - القرآن الكريم ♥", 'url' =>"https://t.me/AlmortagelTech"]],
]])
]);
}
if($text >= 10 and $text <100){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://www.daily-quran.com/static/pages/page-0$text.jpg",
'caption'=>"✧ - تم جلب الصفحة نسألكم الدعاء ♥",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],
[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - القرآن الكريم ♥", 'url' =>"https://t.me/AlmortagelTech"]],
]])
]);
}
if($text >= 100){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://www.daily-quran.com/static/pages/page-$text.jpg",
'caption'=>"✧ - تم جلب الصفحة نسألكم الدعاء ♥",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],
[['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
[['text' => "✧ - القرآن الكريم ♥", 'url' =>"https://t.me/AlmortagelTech"]],
]])
]);
}
if($text == "أوقات الصلاة"){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"https://telegra.ph/file/8ddd42094a2f408d6d23f.mp4",
'caption'=>"✧ - مرحبا بك اخي في قسم اوقات الصلاة اضغط علئ اوقات الصلاة ثم قم بادخال اسم بلدك ومنطقتك لجلب الاوقات
[✧ - نسألكم الدعاء 🤍](https://t.me/AlmortagelTech)
",
        'parse_mode'=>"MarkDown",
        'reply_markup'=> json_encode([
    'inline_keyboard'=>[
        [['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/Almortagel_12"]],
        [['text' => "✧ - قناة مطور البوت", 'url' =>"https://t.me/AlmortagelTech"]],
        [['text'=>"✧ - اوقات الصلاة ⏱️",'web_app'=>['url'=>"https://dev-almortageltech.pantheonsite.io/time"]]]
    ]
    ])
    ]);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$wer = $message->text;
$mlk = $update->callback_query->message->message_id;
$files = $message->chat->id;
$lop = $update->callback_query->data;
$msg = $update->callback_query->message->chat->id;
$do3a = file_get_contents("https://om-ar.online/v1/d.php");
//code//
if($wer == "دعاء" or $wer == "ادعيه" or $wer == "د"){
bot('sendmessage', [
'chat_id' => $files,
'text' => "$do3a",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[[ 'text' => 'دعاء اخر🤍',callback_data => 'app' ]],
     ]])
   ]);
}
//تكرار الدعاء//
if($lop == "app"){
bot('EditMessageText',[
'chat_id'=>$msg,
'message_id'=>$mlk,
'text' => "$do3a", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[[ 'text' => 'دعاء اخر🤍',callback_data => 'app' ]],
     ]])
   ]);
}
if($text == "مبرمج البوت" or $text == "المبرمج"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/Almortagel_12",
'caption' =>"
┏•━•━•━『ALMORTAGEL』━•━•━•┓
╏⍟ 𝚆𝙴𝙻𝙲𝙾𝙼𝙴 𝚃𝙾 
╏⍟ 𝙸𝙽𝙵𝙾 𝙳𝙴𝚅 ALMORTAGEL  
┗•━•━•━『ALMORTAGEL』━•━•━•┛
╏⍟ 𝙲𝙾𝙼𝙼𝙺𝙽𝙸𝙲𝙰𝚃𝙸𝙾𝙽 𝙳𝙴𝚅𝙴𝙻𝙾𝙿𝙴𝚁
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"✵⁞ المبرمج ⁞✵",'url'=>"t.me/Almortagel_12"],['text'=>"✵⁞ قناة البوت  ⁞✵",'url'=>"t.me/ALMORTAGELTECH"]],
]])
]); 
}
if($text=="/start" or $text == "عودة"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://telegra.ph/file/14c7948ad180050fe16e4.jpg",
'caption'=>"✰ ⁞ اهلا بكك عزيزي في بوت المقاطع الدينية
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"مبرمج البوت"]],
[['text'=>"مقطع"],['text'=>"عبدالباسط"]],
[['text'=>"دعاء"],['text'=>"ذكر"]],
[['text'=>"سورة"]],
[['text'=>"البحث"]],
[['text'=>"قران"],['text'=>"تلاوات"]],
[['text'=>"مصحف"],['text'=>"أوقات الصلاة"]],
],
'resize_keyboard'=>true
])
]);
}