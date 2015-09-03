<!DOCTYPE html>
<html>

<?php
	function get_search_results($search_term){
		//Add your Flickr key here!
		$key = "####";
	
		$result = array();
		//We get the search term from the user's GET request
		//POST code from http://stackoverflow.com/a/574246/3303546
		$curl_parameters = http_build_query( array("method" => "flickr.photos.search",
													"api_key" => $key,
													"text" => $search_term,
													"format" => "json",
													"nojsoncallback" => 1,
													"sort" => "relevance"));
		if ( function_exists('curl_init') ) {
			try{
				$curl = curl_init("https://api.flickr.com/services/rest/");
				curl_setopt( $curl, CURLOPT_POST, true);
				curl_setopt( $curl, CURLOPT_POSTFIELDS, $curl_parameters);
				curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
				$result = curl_exec( $curl );
				curl_close( $curl );
				
				var_dump(json_decode($result));
			}catch(Exception $e) {
				$result = sprintf('{\"error\": \"Curl failed with error #%d: %s\"}',
					$e->getCode(), $e->getMessage(), E_USER_ERROR);
			}
		}
		else{
			$result = "{\"error\": \"No curl available\"}";
		}
			
		return $result;
	}
?>

</html>