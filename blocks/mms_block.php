
<?php
// $Id: solat_block.php,v 1.0 2004/09/17 13:58:00 mvandam Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// 			MMS Blogger For XOOPS By EXZSDOTCOM (http://www.exzs.com)			 //
//MMS Blogger version 01
//Modified by Exzs Dot Com
//http://www.exzs.com
//mmsblog@exzs.com
//24072005
//Please visit our forum to discuss about this MMS Blog
//Thanks from The Management

//Get your ID @ http://www.exzs.com/04/modules/mms/index.php?action=registerform
//Or your can email us (mmsblog@exzs.com) if the link above not valid due to version change
//Registration FOC until further notice :-)


function show_mms_block(){
$block['title']   = "MMS Blogger";
$block['content'] = "<center><img src=\"http://www.exzs.com/banners/exzscommunity.jpg\" alt=\"Not implement yet\"></center>";

return $block;
}

?>