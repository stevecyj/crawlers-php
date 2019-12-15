
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script src="/js/css_browser_selector.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/stylesheets/global.css" type="text/css"/>
	<script src="/js/mootools-yui-compressed-1.1.js" type="text/javascript"></script>
	<script src="/js/all.js" type="text/javascript"></script>

<title>
	訂便當管理系統 DinBenDon</title>
<style id="bendon-web-IndexPage-0">
<!--
	.downloadFireFox {
	    display: none;
	    color: #999;
	    font-size: 120%;
	    font-weight: bold;
	    margin: 2em;
	    margin-bottom: 0em;
	    width: 600px;
	}
	.ie .downloadFireFox {
	    display: block;
	}
-->
</style>
<script type="text/javascript" src="/do/resources/wicket.ajax.AbstractDefaultAjaxBehavior/wicket-ajax.js"></script>
<script>setTimeout(function() { var wcall=wicketAjaxGet('/do/?wicket:interface=:0:heartbeat:-1:IUnversionedBehaviorListener&wicket:behaviorId=0&wicket:ignoreIfNotActive=true', function() { }, function() { }); }, 180000);</script>

		<script id="bendon-wicket-comp-caps-CapsLockPrompter-0" type="text/javascript">
		<!--
			function capsDetect( e, promptText ) {
				if( !e ) { e = window.event; } if( !e ) { MWJ_say_Caps( false ); return; }
				var theKey = e.which ? e.which : ( e.keyCode ? e.keyCode : ( e.charCode ? e.charCode : 0 ) );
				var theShift = e.shiftKey || ( e.modifiers && ( e.modifiers & 4 ) );
				MWJ_say_Caps( ( theKey > 64 && theKey < 91 && !theShift ) || ( theKey > 96 && theKey < 123 && theShift ), promptText );
			}
			function MWJ_say_Caps( capsEngaged, promptText ) {
				var capWarn = document.getElementById(promptText);
				if( capsEngaged ) {
					capWarn.style.display = '';
				} else {
					capWarn.style.display = 'none';
				}
			}
		//-->
		</script>
		<style id="bendon-wicket-comp-caps-CapsLockPrompter-1">
		<!--
		     .capWarn {
			    display:block;
			    position:absolute;
			    padding: 2px;
			    border:1px solid #ffa500;
			    background-color:#fffacd; color:#000;
			    text-align: left;
			    text-decoration:none ;
			    white-space: nowrap;
		     }
		-->
		</style>
		<script type="text/javascript" ><!--/*--><![CDATA[/*><!--*/
if (window.name=='') { window.name="wicket:default"; }
/*-->]]>*/</script>

</head>
<body>
    <div id="header">
        <div ><a href="/do/" title="訂便當管理系統"><img src="/images/logo.png" alt="訂便當管理系統"/></a>
        	<span style="" class="headerTitle"></span>
       	</div>
        <div style="position: absolute; right: 20px; top: 3px; font-size: small;" >
           <a href="/do/?wicket:interface=:0:english::ILinkListener" class="function">English</a>|<span class="function"><em>Chinese</em></span>



        </div>
        <div style="position: absolute; right: 20px; top: 26px; font-size: small;" >



           <a class="function external" onclick="window.open(this.href);return false;" href="http://blog.dinbendon.net" >
           	部落格</a>
           <a href="/do/" class="function">首頁</a>
           <a href="/do/idine" class="function">公用店家</a>

           <a href="/do/pub/UserManualPage" class="function">使用手冊</a>
           <a href="/do/pub/Comment" class="function">留言版</a>
        </div>
    </div>

    <div id="main">

		<div id="globalFeedback">

</div>

<!--
<div style="margin:10px;"><a href="#" wicket:id="toPartnerLogo"><img src="partner/banner-front.gif"/></a></div>
 -->
<div style="margin:2em;">
<h2 style="display: inline;">
	歡迎使用訂便當管理系統</h2><span>
 -
 幫助您團購便當/下午茶的小工具</span>
</div>
<table>
<tr>
	<td style="width: 70%;vertical-align: top;">
		<p style="padding:2em;padding-top:0em;">還在用紙筆統計訂便當和下午茶嗎？訂便當管理系統提供您簡單、聰明的工具，
		幫助您快速完成團購！從此擺脫這個麻煩事囉~~</p>
		<div >
			<img src="/images/index_demo2.png" style="float: left;"/>
			<div style="float: left; font-size:115%; line-height: 2em; width: 15em;">
				<div style="text-align: center;">簡單好用的團購利器</div>
				<ul>
					<li>建立與管理店家產品</li>
					<li>發起店家團購</li>
					<li>團購的統計、記帳</li>
					<li>群組間分享交流店家資訊</li>
					<li><a href="/do/pub/UserManualPage">更多功能...</a></li>
				</ul>
				<!--
				<a onclick="window.open(this.href);return false;" href="https://digitalid.hitrust.com.tw/SecureSite/getPage.jsp?cn=dinbendon.net&lang=zh_TW">
					<img style="margin-left:1em;" src="partner/seal_new.gif" />
				</a>  -->
			</div>
		</div>
	</td>
	<td style="width: 30%;vertical-align: top;">
		<div class="greenbox" style="width:21em; padding-bottom: 1em;">
			<h4 style="text-align: center;">
				使用群組帳號或個人帳號登入</h4>
			<div>
	<form action="/do/?wicket:interface=:0:signInPanel:signInForm::IFormSubmitListener" id="signInPanel_signInForm" method="post"><div style="display:none"><input type="hidden" name="signInPanel_signInForm:hf:0" id="signInPanel_signInForm:hf:0" /></div>
		<table class="lists">
			<tr>
				<td class="alignRight">
					帳號
					:
				</td>
				<td>
					<input name="username" style="width: 9em;" type="text" maxlength="20" value=""/>
				</td>
			</tr>
			<tr>
				<td class="alignRight">
					密碼
					:
				</td>
				<td>
					<input maxlength="20" name="password" style="width: 9em;" type="password" value="" onkeypress="capsDetect(arguments[0], 'signInPanel_signInForm_capsLockPrompter_promptText');"/>
		<span style="display: none;" id="signInPanel_signInForm_capsLockPrompter_promptText" class="capWarn">
			大寫鍵 (Caps Lock) 按住了，小心不要弄錯。</span>

				</td>
			</tr>
			<tr>
				<td style="width: 6em;" class="alignRight">60 加 5 等於</td>
				<td>
					<input name="result" style="width: 9em;" type="text" maxlength="5" value=""/>
					<a style="white-space: nowrap;" href="javascript:void(0)" class="tooltip">?<span>
	請計算驗證碼</span></a>
				</td>
			</tr>
			<tr>
				<td></td>
				<td> <div style="width:11em;"><input name="rememberMeRow:rememberMe" checked="checked" type="checkbox"/>
				我懶得每次都要打，請記住我的帳號</div>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input name="submit" type="submit" value="登入"/>
					<input type="reset" />
				</td>
			</tr>
		</table>
	</form>
<script type="text/javascript">document.forms[0].username.focus();</script>
</div>
			<div style="margin-top: 1em; text-align:center; line-height: 1.5em; ">
				<a href="/do/?wicket:interface=:0:toCreateUser::ILinkListener">
					申請新的群組帳號</a><br/>
				<a href="/do/?wicket:interface=:0:toRecoverPassword::ILinkListener">
					忘記個人帳號密碼？</a><br/>
				<a style="white-space: nowrap;" href="javascript:void(0)" class="tooltip">
					帳號無法認證？
					<span>如果你遺失了認證信、或是 email<br/>
						打錯了。你仍然可以使用未認證<br/>
						的帳號登入。登入後按照網頁的<br/>
						指示便可重新認證。
					</span>
				</a>
			</div>
		</div>

		<div class="greenbox" style="width:21em; margin-top: 1em; text-align: center; line-height: 2em;">
			<div>您可以使用帳號 <b>guest</b> (密碼: guest) 登入試用</div>
			<div>新手可先看一段<a href="/do/pub/UserManualPage/moviedemo">示範影片</a></div>
			<div>任何意見或建議可至 <a href="/do/pub/Comment">留言版</a> 留言</div>
		</div>

	</td>
</tr>
</table>

    </div>

    <div id="footer">
      <div class="left">
          Copyright <span>2019</span>&copy; All rights reserved.
      </div>

      <div class="right">
          <a href="/do/pub/TermsOfUsePage">
          	使用條款</a> |
          <a href="/do/pub/AboutPage">About</a> |

      </div>
    </div>
	<span style="display:none" id="heartbeat"></span>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-666784-1', 'auto');
          ga('send', 'pageview');
        </script>

</body>
</html>
