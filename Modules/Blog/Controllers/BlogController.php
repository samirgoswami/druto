<?php
namespace Modules\Blog\Controllers;
use Modules\User\Models\Alam as Alam;
use Druto\Controllers\Controller as Controller;
use Druto\Configs\Config as Config;
class BlogController extends Controller
{
	public $restfull=true;
	public function tcest($id)
	{
		echo "Display Product #$id <hr>";
	}

	public function getTest()
	{
		echo "Get Test";
	}

	public function postTest()
	{
		echo "Post Test";
	}

	public function putTest()
	{
		echo "Put Test";
	}

	public function deleteTest()
	{
		echo "Delete Test";
	}
	public function getMintu()
	{
		echo "I am Mintu";
	}
	public function getDisplayUserProfile($username)
	{
		$alam=new Alam;
		echo "User Profile Page of ".$username;
	}

	public function gettestCity($country,$state,$city)
	{
		echo " Country is $country || state is $state || city is $city";
	}

	public function getproductDetails($pdtid)
	{
		//echo baseURL;
		echo Config::get('database.default','test');
		echo '<hr>';
		Config::set('database.default','bisu');
		Config::set('database.mysql.passwordp','rootwdp');
		echo '<hr>';
		echo Config::get('database.default','test');
		echo '<hr>';
		echo "You want to see the details od $pdtid";
	}
}

