<?php
    ob_start();
	session_start();
    include_once(dirname(__FILE__).'/../../config/config.php');
	include_once(dirname(__FILE__).'/../../inc/functions.inc.php');
	include_once(dirname(__FILE__).'/../../classes/class.db.php');
	
	
	date_default_timezone_set("America/New_York");
	
	switch($_REQUEST['module'])
	{
	 case 'addbrand':
	 include("addBrand.php");
	 break;
	 
	 case 'listdocument':
	 include("listForms.php");
	 break;
	 
	 case 'listbrand':
	 include("listBrands.php");
	 break;
	 
	 case 'addbanner':
	 include("addBanner.php");
	 break;
	 
	 case 'listbanner':
	 include("listBanners.php");
	 break;
	 
	  case 'addtestimonial':
	 include("addTestimonial.php");
	 break;
	 
	 case 'listtestimonial':
	 include("listTestimonials.php");
	 break;
	 
	 case 'addcoach':
	 include("addCoach.php");
	 break;
	 
	 case 'listcoach':
	 include("listCoach.php");
	 break;
	 
	  case 'addplayerspotlight':
	 include("addPlayerSpotlight.php");
	 break;
	 
	 case 'listplayerspotlight':
	 include("listPlayerSpotlight.php");
	 break;
	 
	 case 'addstore':
	 include("addStore.php");
	 break;
	 
	 case 'liststore':
	 include("listStores.php");
	 break;
	 
	 case 'addcategory':
	 include("addCategory.php");
	 break;
	 case 'listcategory':
	 include("listCategory.php");
	 break;
	 
	 case 'addfaq':
	 include("addFaq.php");
	 break;
	 
	 case 'listfaq':
	 include("listFaqs.php");
	 break;
	 
	 case 'logout':
	 include("logout.php");
	 break;
	 
	 case 'adduser':
	 include("addUser.php");
	 break;
	 
	 case 'listuser':
	 include("listUser.php");
	 break;
	 
	 case 'addproduct':
	 include("addProduct.php");
	 break;
	 
	 case 'listproduct':
	 include("listProduct.php");
	 break;
	 
	 case 'featureproduct':
	 include("featureProduct.php");
	 break;
	 
	 case 'addmanufac':
	 include("addManufacturer.php");
	 break;
	 
	 case 'listmanufac':
	 include("listManufacturer.php");
	 break;
	 
	 case 'addnews':
	 include("addNews.php");
	 break;
	 
	 case 'listnews':
	 include("listNews.php");
	 break;
	 
	 case 'addblog':
	 include("addBlogs.php");
	 break;
	 
	 case 'listblog':
	 include("listBlogs.php");
	 break;
	 
	 case 'addappointment':
	 include("addAppointment.php");
	 break;
	 
	 case 'listappointment':
	 include("listAppointment.php");
	 break;
	 
	 case 'sendnewsletter':
	 include("sendNewsletter.php");
	 break;
	 
	 case 'adminprofile':
	 include("adminProfile.php");
	 break;
	 
	 case 'contactus':
	 include("listContact.php");
	 break;
	 
	 case 'replycontactus':
	 include("replyContact.php");
	 break;
	 
	 case 'managecms':
	 include("manageCMS.php");
	 break;
	 
	 case 'orderlist':
	 include("orderList.php");
	 break;
	 
	 case 'vieworder':
	 include("viewOrder.php");
	 break;
	 
	 case 'popupoffer':
	 include("popupOffer.php");
	 break;
	 
	 case 'addoffer':
	 include("addOffer.php");
	 break;
	 
	 case 'listoffer':
	 include("listOffer.php");
	 break;
	 
	 case 'addsuboffer':
	 include("addsubOffer.php");
	 break;
	 
	 case 'listsuboffer':
	 include("listsubOffer.php");
	 break;
	 
	 case 'listphotogallery':
	 include("listPhotogallery.php");
	 break;
	 
	 case 'addphotogallery':
	 include("addPhotogallery.php");
	 break;
	 
	 case 'dashboard':
	 include("dashboard.php");
	 break;
	 
	  case 'addposorder':
	 include("add_pos_order.php");
	 break;
	 
	 case 'posorders':
	 include("list_pos_orders.php");
	 break;
	 
	  case 'posorderdetail':
	 include("list_pos_order_details.php");
	 break;
	 	 
	 default:
	 include("login.php");
	}
?>