<?php

namespace Retail\Analytics\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\CsrfAwareActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Request\InvalidRequestException;
 
class Index extends \Magento\Framework\App\Action\Action implements CsrfAwareActionInterface
{
	
    protected $jsonResultFactory;

    public function __construct(Context $context,\Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory) 
    {
        parent::__construct($context);
        $this->jsonResultFactory = $jsonResultFactory;
    }

    public function createCsrfValidationException(RequestInterface $request): ? InvalidRequestException
    {
        return null;
    }
    
    public function validateForCsrf(RequestInterface $request): ?bool
    {
        return true;
    }

    public function execute()
    {
        $result = $this->jsonResultFactory->create();
        $params = $this->getRequest()->getParams ();

        $data = array();
        if(isset($params ['service']))
        {
        	if($params ['service']=="customer")
        	{
        		$lastId = $params ['lastid'];
        		$limit = $params ['limit'];
        		$filterKey = isset($params['filterkey'])?$params['filterkey']:"";
        		$filterValue = isset($params['filtervalue'])?$params['filtervalue']:"";
		        $raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
		        $data = $raaHelper->raaCustomers($lastId,$limit,$filterKey,$filterValue);
        	}
        	else if($params ['service']=="subscriber")
        	{
        		$lastId = $params ['lastid'];
        		$limit = $params ['limit'];
		        $raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
		        $data = $raaHelper->raaSubscribers($lastId,$limit);
        	}
        	else if($params ['service']=="customerbyid")
        	{
        		$id = $params ['id'];
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
        		$data = $raaHelper->raaCustomerById($id);
        	}
        	else if($params ['service']=="productbyid")
        	{
        		$id = $params ['id'];
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
        		$data = $raaHelper->raaProductById($id);
        	}
        	else if($params ['service']=="productbydate")
        	{
        		$lastdate = $params['lastdate'];
				$limit = $params ['limit'];
				$lastid = $params ['lastid'];		
				$filterKey = isset($params['filterkey'])?$params['filterkey']:"";
				$filterValue = isset($params['filtervalue'])?$params['filtervalue']:"";
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
        		$data = $raaHelper->raaProductsByDate($lastdate,$lastid,$limit,$filterKey,$filterValue);
        	}
        	else if($params ['service']=="productfinalprice")
        	{
        		$helperdata = $this->_objectManager->create('Retail\Analytics\Helper\ConfigData');
        		$isadmin = (isset($params ['isadmin']))?$params ['isadmin']:false;
				$filterKey = isset($params['filterkey'])?$params['filterkey']:"";
				$filterValue = isset($params['filtervalue'])?$params['filtervalue']:"";
				$width = 200;
				$height = 200;
				$imagetype = "product_page_image_small";
				if (isset ( $params ['width'] ) && $params ['width']!=null && $params ['width']!="") {
					$width = $params ['width'];
				}
				else {
					$width = $helperdata->getImageWidth();
				}
				if (isset ( $params ['height'] ) && $params ['height']!=null && $params ['height']!="") {
					$height = $params ['height'];
				}
				else {
					$height = $helperdata->getImageHeight();
				}
				if (isset ( $params ['imagetype'] ) && $params ['imagetype']!=null && $params ['imagetype']!="") {
					$imagetype = $params ['imagetype'];
				}
				else {
					$imagetype = $helperdata->getImageType();
				}
				$lastId = $params ['lastid'];
				$limit = $params ['limit'];
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
        		$data = $raaHelper->raaProductsFinalPrice($lastId,$limit,$imagetype,$width ,$height,$isadmin,$filterKey,$filterValue);
        	}
        	else if($params ['service']=="category")
        	{
        	    $lastId = $params ['lastid'];
        	    $limit = $params ['limit'];
        	    $raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
        	    $data = $raaHelper->raaCategory($lastId,$limit);
        	}
        	else if($params ['service']=="productcategory")
        	{
        		$lastId = $params ['lastid'];
				$limit = $params ['limit'];
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
        		$data = $raaHelper->raaProductCategory($lastId,$limit);
        	}
        	else if($params ['service']=="orderbyid")
        	{
        		$id = $params ['id'];
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
        		$data = $raaHelper->raaOrderById($id);
        	}
       		else if($params ['service']=="orderbydate")
        	{
        		$lastdate = $params['lastdate'];
				$limit = $params ['limit'];
				$lastid = $params ['lastid'];		
				$filterKey = isset($params['filterkey'])?$params['filterkey']:"";
				$filterValue = isset($params['filtervalue'])?$params['filtervalue']:"";
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
        		$data = $raaHelper->raaOrdersByDate($lastdate,$lastid,$limit,$filterKey,$filterValue);
        	} 
        	else if($params ['service']=="setconfig")
        	{
        		$helperdata = $this->_objectManager->create('Retail\Analytics\Helper\ConfigData');
	        	$request = $helperdata->raaJsonDecode($params['request']);
	        	$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Raaconfig');
	        	$data = $raaHelper->setRaaconfig($request);
        	}
        	else if($params ['service']=="raaconfig")
        	{
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Raaconfig');
        		$data = $raaHelper->getRaaconfigs();
        	}
        	else if($params ['service']=="getstores")
        	{
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\ConfigData');
        		$data = $raaHelper->raaGetStores();
        	}
        	else if($params ['service']=="storecount")
        	{
        		$raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\Data');
        		$data = $raaHelper->raaStoreCounts();
        	}
        	else if($params ['service']=="enp")
        	{
        	        $params = $this->getRequest ()->getParams ();
        	        $raaHelper = $this->_objectManager->create('Retail\Analytics\Helper\ConfigData');
        	        $raaServerUrl = $raaHelper->getServer();
        	        if($raaServerUrl=="enalito.com" || $raaServerUrl=="enalito.in" ||  $raaServerUrl=="retailrecoanalytics.com") {
        	            if( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)) {
        	                $raaServerUrl = "https://". $raaServerUrl.":8443";
        	            } else {
        	                $raaServerUrl = "http://". $raaServerUrl.":8080";
        	            }
        	        }
        	        else {
        	            if( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)) {
        	                $raaServerUrl = "https://". $raaServerUrl."";
        	            } else {
        	                $raaServerUrl = "http://". $raaServerUrl."";
        	            }
        	        }
        	        $content = "";
        	        if(!isset($params['url'])) {
        	            $bodyParam = file_get_contents('php://input');
        	            if(isset($bodyParam) && $bodyParam!="") {
        	                $request = str_replace('&quot;', '"',$bodyParam);
        	                $jsonBodyParam = json_decode($bodyParam);
        	                if(isset($jsonBodyParam->url)) {
        	                    $url = $raaServerUrl.$jsonBodyParam->url;
        	                    $content = $bodyParam;
        	                }
        	                else {
        	                    $url = $raaServerUrl.$params['url'];
        	                }
        	            }
        	            //echo $content;
        	            //echo $ur;
        	        }
        	        else
        	        {
        	            $url = $raaServerUrl.$params['url'];
        	        }
        	        
        	        if(isset($params['request'])) {
        	            $content = "request=" . $params['request'];
        	            $content = str_replace("&amp;","&",$params['request']);
        	            $content = str_replace ( '\\"', '"', $content );
        	            $content = str_replace("\"[", "\[",$content);
        	            $content = str_replace("]\"", "\]",$content);
        	        }
        	       
        	        $curl = curl_init ( $url );
        	        curl_setopt ( $curl, CURLOPT_HEADER, false );
        	        curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
        	        curl_setopt ( $curl, CURLOPT_HTTPHEADER, array ("Content-type",	"application/x-www-form-urlencoded"	) );
        	        if($content!="") {
        	            curl_setopt ( $curl, CURLOPT_POST, true );
        	            curl_setopt ( $curl, CURLOPT_POSTFIELDS, $content );
        	        }
        	        curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
        	        curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
        	        curl_setopt($curl, CURLOPT_ENCODING,  'gzip');
        	        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);
        	        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        	        
        	        $result = curl_exec ( $curl );
        	        curl_close ( $curl );
        	        echo $result;
        	        die;
        	    
        	}
        }
        $result->setData($data);
        return $result;
    }
    
    
}