<?php 
/*******************************************************************************                                                      
* Lib:      Generic Class                                                      *
* Version:  1.0.0 	                                                           *
* Date:     12-03-2019                                                         *
* Author:   Dendie                                                             *
* License:  Freeware                                                           *
*									       									   *
* This class for generic function`					    					   *
*									       									   *
* You can  use, modification and distribution 								   *	                                                                  
*******************************************************************************/

if (!class_exists('general')) {
	class general 
	{		
		public static function secureInput($str)
		{
			$rst = addslashes(htmlentities($str));
			return $rst;
		}


		function stripTags($text, $tags = '', $invert = FALSE) {

		  /*	
		  preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags);
		  $tags = array_unique($tags[1]);
		   
		  if(is_array($tags) AND count($tags) > 0) {
		    if($invert == FALSE) {
		      return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text);
		    }
		    else {
		      return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text);
		    }
		  }
		  elseif($invert == FALSE) {
		    return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text);
		  }
		  return $text;
		  */

		  return $text;
		} 
		 		
	}
}	

?>
